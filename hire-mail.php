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
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
    exit;
}

// INPUTS
$name      = trim($_POST['name'] ?? '');
$email     = trim($_POST['email'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$budget    = trim($_POST['budget'] ?? '');
$service   = trim($_POST['service'] ?? '');
$timeline  = trim($_POST['timeline'] ?? '');
$details   = trim($_POST['details'] ?? '');

// VALIDATION
if (empty($name)) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter your name.']);
    exit;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter valid email.']);
    exit;
}

if (empty($service)) {
    echo json_encode(['status' => 'error', 'message' => 'Please select service.']);
    exit;
}

if (empty($details)) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter project details.']);
    exit;
}

try {

    // DB CONNECTION
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        throw new Exception('Database connection failed.');
    }

    $ip = $_SERVER['REMOTE_ADDR'];

    // INSERT INTO DATABASE
    $stmt = $conn->prepare("
        INSERT INTO hire_requests
        (name, email, phone, budget, service, timeline, details, ip_address)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ");

    $stmt->bind_param(
        "ssssssss",
        $name,
        $email,
        $phone,
        $budget,
        $service,
        $timeline,
        $details,
        $ip
    );

    if (!$stmt->execute()) {
        throw new Exception('Failed to save request.');
    }

    // ==========================
    // SEND EMAIL (ADMIN NOTIFY)
    // ==========================
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host       = MAIL_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = MAIL_USERNAME;
    $mail->Password   = MAIL_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = MAIL_PORT;

    $mail->setFrom(MAIL_USERNAME, SITE_NAME);
    $mail->addAddress(ADMIN_EMAIL);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';

    $mail->Subject = '🚀 New Hire Request - ' . SITE_NAME;

    // ==========================
    // EMAIL TEMPLATE
    // ==========================
    $mail->Body = '
    <html>
    <body style="margin:0;padding:0;background:#f4f6f9;font-family:Arial,sans-serif;">

        <div style="max-width:750px;margin:40px auto;background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.08);">

            <!-- HEADER -->
            <div style="background:linear-gradient(135deg,#111827,#1f2937);padding:25px;text-align:center;color:#fff;">
                <h1 style="margin:0;font-size:22px;">🚀 New Hire Request</h1>
                <p style="margin:5px 0 0;font-size:13px;opacity:0.8;">' . SITE_NAME . '</p>
            </div>

            <!-- CONTENT -->
            <div style="padding:30px;">

                <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;font-size:14px;color:#333;">

                    <tr>
                        <td style="font-weight:bold;width:150px;">Name</td>
                        <td>' . htmlspecialchars($name) . '</td>
                    </tr>

                    <tr>
                        <td style="font-weight:bold;">Email</td>
                        <td>' . htmlspecialchars($email) . '</td>
                    </tr>

                    <tr>
                        <td style="font-weight:bold;">Phone</td>
                        <td>' . htmlspecialchars($phone) . '</td>
                    </tr>

                    <tr>
                        <td style="font-weight:bold;">Service</td>
                        <td><span style="background:#e0f2fe;color:#0369a1;padding:4px 10px;border-radius:20px;">' . htmlspecialchars($service) . '</span></td>
                    </tr>

                    <tr>
                        <td style="font-weight:bold;">Budget</td>
                        <td>' . htmlspecialchars($budget) . '</td>
                    </tr>

                    <tr>
                        <td style="font-weight:bold;">Timeline</td>
                        <td>' . htmlspecialchars($timeline) . '</td>
                    </tr>

                </table>

                <!-- DETAILS -->
                <div style="margin-top:25px;">
                    <h3 style="margin-bottom:10px;color:#111827;">Project Details</h3>
                    <div style="background:#f9fafb;padding:15px;border-radius:8px;line-height:1.6;color:#374151;">
                        ' . nl2br(htmlspecialchars($details)) . '
                    </div>
                </div>

                <!-- FOOTER INFO -->
                <div style="margin-top:25px;font-size:13px;color:#6b7280;">
                    <p><strong>IP Address:</strong> ' . $ip . '</p>
                    <p><strong>Date:</strong> ' . date('Y-m-d H:i:s') . '</p>
                </div>

            </div>

            <!-- FOOTER -->
            <div style="background:#f3f4f6;text-align:center;padding:15px;font-size:12px;color:#6b7280;">
                This email was generated automatically from your website hire form.
            </div>

        </div>

    </body>
    </html>';

    $mail->send();

    $conn->close();

    // SUCCESS RESPONSE
    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you! Our team will contact you shortly.'
    ]);
    exit;

} catch (Exception $e) {

    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
    exit;
}