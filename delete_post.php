<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM posts WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "Post deleted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
