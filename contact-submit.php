<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['message' => 'Method not allowed.']);
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if (!$name || !$email || !$message) {
    http_response_code(422);
    echo json_encode(['message' => 'Please fill in all fields before sending your message.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['message' => 'Please enter a valid email address.']);
    exit;
}

$to = 'shana@mothercitymaids.co.za';
$subject = 'New contact request from Mother City Maids website';

$safeName = strip_tags($name);
$safeEmail = strip_tags($email);
$safeMessage = strip_tags($message);

$body = "Name: {$safeName}\n";
$body .= "Email: {$safeEmail}\n\n";
$body .= "Message:\n{$safeMessage}\n";

$headers = "From: {$safeName} <{$safeEmail}>\r\n";
$headers .= "Reply-To: {$safeEmail}\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

$mailSent = mail($to, $subject, $body, $headers);

if (!$mailSent) {
    http_response_code(500);
    echo json_encode(['message' => 'There was an error sending your message. Please try again later.']);
    exit;
}

echo json_encode(['message' => 'Thanks! Your message has been sent successfully.']);
