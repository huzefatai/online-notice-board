<?php
session_start();
include_once 'C:\xampp\htdocs\www\online notice board\db.php';
if (!isset($_SESSION['username'])) {
  header("location: login.php");
  exit();
}
 ?>
<?php 
include 'includes/header.php';
?>

<section>
    <p><a href="dashboard.php" style="text-transform: capitalize;">Dashboard</a></p>
    <img src="image/img1.jpg" alt="">
    <article>
        <p><a href="send_notice.php" style="text-transform: capitalize;">send notice</a></p>
        <p><a href="update_password.php">Update password</a></p><br>
        <p><a href="users.php">Manage User</a></p>
    </article>
</section>
