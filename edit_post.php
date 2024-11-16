<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id = $id";
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);
?>
<form action="update_post.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>" />
    <input type="text" name="title" value="<?php echo $post['title']; ?>" required />
    <textarea name="content" required><?php echo $post['content']; ?></textarea>
    <button type="submit">Update</button>
</form>
