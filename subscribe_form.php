<?php

header('Content-Type: application/json');

require_once 'includes/config.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as MailException;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method'
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

    $ip = $_SERVER['REMOTE_ADDR'];

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
    $mail->addAddress(ADMIN_EMAIL);
    $mail->addReplyTo($email);

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';

    $mail->Subject = 'New Newsletter Subscription - ' . SITE_NAME;

    $mail->Body = "
        <h2>New Newsletter Subscription</h2>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Date:</strong> " . date('Y-m-d H:i:s') . "</p>
        <p><strong>IP:</strong> {$ip}</p>
    ";

    $mail->send();

    $conn->close();

    echo json_encode([
        'status' => 'success',
        'message' => 'Successfully subscribed!'
    ]);
    exit;

} catch (MailException $e) {

    echo json_encode([
        'status' => 'error',
        'message' => 'Mail error: ' . $e->getMessage()
    ]);
    exit;

} catch (Exception $e) {

    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
    exit;
}