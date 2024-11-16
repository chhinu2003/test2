<?php
include 'db.php';

$sql = "SELECT posts.id, posts.title, posts.content, users.username, posts.created_at
        FROM posts
        JOIN users ON posts.author_id = users.id
        ORDER BY posts.created_at DESC";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>" . $row['title'] . "</h2>";
    echo "<p>By " . $row['username'] . " on " . $row['created_at'] . "</p>";
    echo "<p>" . $row['content'] . "</p>";
    echo "<a href='edit_post.php?id=" . $row['id'] . "'>Edit</a> | ";
    echo "<a href='delete_post.php?id=" . $row['id'] . "'>Delete</a>";
    echo "<hr>";
}
?>
