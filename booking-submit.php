<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['message' => 'Method not allowed.']);
    exit;
}

$customerName = trim($_POST['customer_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$address = trim($_POST['address'] ?? '');
$town = trim($_POST['town'] ?? '');
$propertySize = trim($_POST['property_size'] ?? '');
$cleanType = trim($_POST['clean_type'] ?? '');
$preferredDate = trim($_POST['preferred_date'] ?? '');

if (!$customerName || !$email || !$address || !$town || !$propertySize || !$cleanType || !$preferredDate) {
    http_response_code(422);
    echo json_encode(['message' => 'Please fill in all fields before submitting your booking request.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['message' => 'Please enter a valid email address.']);
    exit;
}

$to = 'shana@mothercitymaids.co.za';
$subject = 'New booking request from Mother City Maids website';

$safeCustomerName = strip_tags($customerName);
$safeEmail = strip_tags($email);
$safeAddress = strip_tags($address);
$safeTown = strip_tags($town);
$safePropertySize = strip_tags($propertySize);
$safeCleanType = strip_tags($cleanType);
$safePreferredDate = strip_tags($preferredDate);

$body = "New Booking Request\n\n";
$body .= "Customer Name: {$safeCustomerName}\n";
$body .= "Email: {$safeEmail}\n";
$body .= "Address: {$safeAddress}\n";
$body .= "Town: {$safeTown}\n";
$body .= "Property Size: {$safePropertySize}\n";
$body .= "Clean Type: {$safeCleanType}\n";
$body .= "Preferred Date: {$safePreferredDate}\n";

$headers = "From: {$safeCustomerName} <{$safeEmail}>\r\n";
$headers .= "Reply-To: {$safeEmail}\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

$mailSent = mail($to, $subject, $body, $headers);

if (!$mailSent) {
    http_response_code(500);
    echo json_encode(['message' => 'There was an error sending your booking request. Please try again later.']);
    exit;
}

echo json_encode(['message' => 'Thanks! Your booking request has been sent successfully.']);
