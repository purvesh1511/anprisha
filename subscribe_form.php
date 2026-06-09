<?php

header('Content-Type: application/json');

require_once 'config/config.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as MailException;

$ip = client_ip();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
    ]);
    exit;
}

if (!csrf_check()) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request token. Please refresh and try again.'
    ]);
    exit;
}

if (!rate_limit_hit('subscribe:' . $ip, 10, 600)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Too many attempts. Please try again later.'
    ]);
    exit;
}

$email = trim($_POST['email'] ?? '');

if (empty($email)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Email address is required.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Please enter valid email.'
    ]);
    exit;
}

try {

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        throw new Exception('Database connection failed');
    }

    // Check existing email
    $check = $conn->prepare("SELECT id FROM newsletter_subscribers WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Email already subscribed.'
        ]);
        exit;
    }

    // Insert
    $stmt = $conn->prepare("
        INSERT INTO newsletter_subscribers (email, ip_address)
        VALUES (?, ?)
    ");

    $stmt->bind_param("ss", $email, $ip);

    if (!$stmt->execute()) {
        throw new Exception('Failed to store subscriber');
    }

    // MAIL
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host       = MAIL_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = MAIL_USERNAME;
    $mail->Password   = MAIL_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = MAIL_PORT;

    $mail->setFrom(MAIL_USERNAME, SITE_NAME);
    $mail->addAddress(admin_email());
    $mail->addReplyTo($email);

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';

    $mail->Subject = 'New Newsletter Subscription - ' . SITE_NAME;

    $safeIp = htmlspecialchars($ip, ENT_QUOTES, 'UTF-8');

    $mail->Body = "
        <h2>New Newsletter Subscription</h2>
        <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
        <p><strong>Date:</strong> " . date('Y-m-d H:i:s') . "</p>
        <p><strong>IP:</strong> {$safeIp}</p>
    ";

    $mail->send();

    $conn->close();

    echo json_encode([
        'status' => 'success',
        'message' => 'Successfully subscribed!'
    ]);
    exit;

} catch (MailException $e) {
    error_log('[subscribe] mail: ' . $e->getMessage());
    echo json_encode([
        'status' => 'error',
        'message' => 'We could not subscribe you right now. Please try again shortly.'
    ]);
    exit;

} catch (Exception $e) {
    error_log('[subscribe] ' . $e->getMessage());
    echo json_encode([
        'status' => 'error',
        'message' => 'We could not subscribe you right now. Please try again shortly.'
    ]);
    exit;
}
