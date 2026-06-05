<?php

header('Content-Type: application/json');

require_once 'includes/config.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$response = [
    'status' => 'error',
    'message' => 'Something went wrong.'
];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
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
    $ip = $_SERVER['REMOTE_ADDR'];

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
    $mail->addAddress(ADMIN_EMAIL);

    // REPLY TO
    $mail->addReplyTo($email, $name);

    // EMAIL CONTENT
    $mail->isHTML(true);

    $mail->Subject = 'New Contact Inquiry - ' . SITE_NAME;

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
                    <td>' . $ip . '</td>
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

    $response = [
        'status' => 'error',
        'message' => $e->getMessage()
    ];
}

echo json_encode($response);