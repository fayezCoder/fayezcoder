<?php
/**
 * Contact Form Handler API
 * Saves inquiry to MySQL (if DB configured) and sends response
 */

header('Content-Type: application/json; charset=UTF-8');
require_once __DIR__ . '/../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method Not Allowed']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true) ?: $_POST;

$name    = trim($input['name'] ?? '');
$email   = trim($input['email'] ?? '');
$phone   = trim($input['phone'] ?? '');
$message = trim($input['message'] ?? '');
$lang    = trim($input['lang'] ?? 'ar');

if (empty($name) || empty($email) || empty($message)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'error' => 'Missing required fields.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'error' => 'Invalid email address.']);
    exit;
}

// Save to MySQL database if available
$db = Database::getConnection();
if ($db) {
    try {
        $stmt = $db->prepare("INSERT INTO contact_inquiries (name, email, phone, message, ip_address, user_agent, language) VALUES (:name, :email, :phone, :message, :ip, :ua, :lang)");
        $stmt->execute([
            ':name'    => $name,
            ':email'   => $email,
            ':phone'   => $phone,
            ':message' => $message,
            ':ip'      => $_SERVER['REMOTE_ADDR'] ?? '',
            ':ua'      => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 255),
            ':lang'    => $lang,
        ]);
    } catch (Exception $e) {
        error_log("Failed to insert contact inquiry: " . $e->getMessage());
    }
}

echo json_encode([
    'success' => true,
    'message' => 'Inquiry received successfully'
]);
