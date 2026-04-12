<?php
require '../vendor/autoload.php';

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

try {

    $client = new MongoDB\Client("mongodb://localhost:27017");

    $collection = $client->login_system->users;
    $existingUser = $collection->findOne(['email' => $email]);

    if ($existingUser) {
        echo "Email already exists";
        exit;
    }
    $result = $collection->insertOne([
        'username' => $name,
        'email'    => $email,
        'password' => $hashedPassword
    ]);

    if ($result->getInsertedCount() == 1) {
        echo "Signup successful with MongoDB $name";
    } else {
        echo "Something went wrong";
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>