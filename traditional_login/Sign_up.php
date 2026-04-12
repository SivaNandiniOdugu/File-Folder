<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Invalid request";
    exit;
}
$name     = trim($_POST['username'] ?? '');
$email    = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($name) || empty($email) || empty($password)) {
    echo "All fields are required";
    exit;
}

if (strlen($password) < 6) {
    echo "Password must be at least 6 characters";
    exit;
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$conn = new mysqli("localhost", "root", "", "db");

if ($conn->connect_error) {
    die("Database connection failed");
}
$stmt = $conn->prepare("SELECT id FROM users WHERE email=?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Email already exists";
    exit;
}
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $hashedPassword);

if ($stmt->execute()) {
    echo "Signup successful";
} else {
    echo "Something went wrong";
}

$conn->close();
?>