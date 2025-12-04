<?php

header('Content-Type: application/json');

// Get and decode JSON data
$rawData = file_get_contents('php://input');
$data = json_decode($rawData, true);

// Validate input
if (!isset($data['email']) || empty($data['email'])) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Email is required.']);
    exit;
}

// Sanitize
$email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$message = isset($data['message']) ? htmlspecialchars($data['message']) : '';

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
    exit;
}

// Email setup
// You can add multiple emails separated by commas
$to = 'info@ms-code.dev, mostafaabdelrazek771@gmail.com, abdelrazekmostafa771@gmail.com';
$subject = 'New Contact Request from Portfolio Website';

$body = <<<EOD
📩 New Contact Request

----------------------------
📧 Email: $email
----------------------------

EOD;

if (!empty($message)) {
    $body .= "\n📝 Message:\n$message\n\n";
}

$body .= <<<EOD
----------------------------
This message was sent from the MS-CODE.DEV portfolio website contact form.
EOD;

$headers = "From: noreply@ms-code.dev\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo json_encode([
        'status' => 'success', 
        'message' => 'Thank you! Your message has been sent successfully.'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'status' => 'error', 
        'message' => 'Failed to send email. Please try again later.'
    ]);
}
?>

