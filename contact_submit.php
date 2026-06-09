<?php

header('Content-Type: application/json');

require_once 'config/config.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$ip = client_ip();

$response = [
    'status' => 'error',
    'message' => 'Something went wrong.'
];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode($response);
    exit;
}

if (!csrf_check()) {
    $response['message'] = 'Invalid request token. Please refresh and try again.';
    echo json_encode($response);
    exit;
}

if (!rate_limit_hit('contact:' . $ip, 5, 600)) {
    $response['message'] = 'Too many submissions. Please try again later.';
    echo json_encode($response);
    exit;
}

// INPUTS
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

// VALIDATION
if (empty($name)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Please enter your name.'
    ]);
    exit;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Please enter valid email address.'
    ]);
    exit;
}

if (empty($message)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Please enter details.'
    ]);
    exit;
}

try {

    // DATABASE CONNECTION
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        throw new Exception('Database connection failed.');
    }

    // STORE DATA
    $stmt = $conn->prepare("
        INSERT INTO contact_inquiries
        (
            name,
            email,
            phone,
            message,
            ip_address
        )
        VALUES (?, ?, ?, ?, ?)
    ");

    $stmt->bind_param(
        "sssss",
        $name,
        $email,
        $phone,
        $message,
        $ip
    );

    if (!$stmt->execute()) {
        throw new Exception('Failed to save inquiry.');
    }

    // SEND EMAIL
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host       = MAIL_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = MAIL_USERNAME;
    $mail->Password   = MAIL_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = MAIL_PORT;

    // FROM
    $mail->setFrom(MAIL_USERNAME, SITE_NAME);

    // TO
    $mail->addAddress(admin_email());

    // REPLY TO
    $mail->addReplyTo($email, $name);

    // EMAIL CONTENT
    $mail->isHTML(true);

    $mail->Subject = 'New Contact Inquiry - ' . SITE_NAME;

    $safeIp = htmlspecialchars($ip, ENT_QUOTES, 'UTF-8');

    $mail->Body = '
    <html>
    <body style="font-family:Arial,sans-serif;background:#f7f7f7;padding:20px;">

        <div style="max-width:700px;background:#ffffff;padding:30px;border-radius:12px;margin:auto;">

            <h2 style="margin-bottom:20px;">
                New Contact Inquiry
            </h2>

            <table width="100%" cellpadding="12" cellspacing="0" border="1" style="border-collapse:collapse;">

                <tr>
                    <td><strong>Name</strong></td>
                    <td>' . htmlspecialchars($name) . '</td>
                </tr>

                <tr>
                    <td><strong>Email</strong></td>
                    <td>' . htmlspecialchars($email) . '</td>
                </tr>

                <tr>
                    <td><strong>Phone</strong></td>
                    <td>' . htmlspecialchars($phone) . '</td>
                </tr>

                <tr>
                    <td><strong>Message</strong></td>
                    <td>' . nl2br(htmlspecialchars($message)) . '</td>
                </tr>

                <tr>
                    <td><strong>IP Address</strong></td>
                    <td>' . $safeIp . '</td>
                </tr>

                <tr>
                    <td><strong>Date</strong></td>
                    <td>' . date('Y-m-d H:i:s') . '</td>
                </tr>

            </table>

        </div>

    </body>
    </html>';

    $mail->send();

    $response = [
        'status' => 'success',
        'message' => 'Thank you! Your inquiry has been submitted successfully.'
    ];

} catch (Exception $e) {
    error_log('[contact-submit] ' . $e->getMessage());
    $response = [
        'status' => 'error',
        'message' => 'We could not submit your inquiry right now. Please try again shortly.'
    ];
}

echo json_encode($response);
