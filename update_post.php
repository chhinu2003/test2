<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $sql = "UPDATE posts SET title = '$title', content = '$content' WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Post updated successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
