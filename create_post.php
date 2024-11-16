<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $author_id = $_SESSION['user_id']; // Assuming user ID is stored in session after login

    $sql = "INSERT INTO posts (title, content, author_id) VALUES ('$title', '$content', $author_id)";
    if (mysqli_query($conn, $sql)) {
        echo "Post created successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
