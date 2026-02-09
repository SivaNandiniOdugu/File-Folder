<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['post_id'])) {
    echo json_encode(["error" => "Post ID missing"]);
    exit;
}

$postId = (int)$data['post_id'];

$conn = new mysqli("localhost", "root", "", "db");

if ($conn->connect_error) {
    echo json_encode(["error" => "DB connection failed"]);
    exit;
}9

// Check if already liked
$check = $conn->query("SELECT * FROM likes WHERE post_id = $postId");

if ($check->num_rows == 0) {
    // Like
    $conn->query("INSERT INTO likes (post_id) VALUES ($postId)");
    $conn->query("UPDATE posts SET like_count = like_count + 1 WHERE id = $postId");
} else {
    // Unlike
    $conn->query("DELETE FROM likes WHERE post_id = $postId");
    $conn->query("UPDATE posts SET like_count = like_count - 1 WHERE id = $postId");
}

// Get updated count
$result = $conn->query("SELECT like_count FROM posts WHERE id = $postId");
$row = $result->fetch_assoc();

echo json_encode([
    "likes" => (int)$row['like_count']
]);
