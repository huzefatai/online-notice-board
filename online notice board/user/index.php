<?php
session_start();
include_once 'C:\xampp\htdocs\www\online notice board\db.php';
if (!isset($_SESSION['user'])) {
  header("location: login.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Panel |  | <?php echo $_SESSION['user'];?></title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">

    </script>
  </head>
  <body>
        <div class="container">
          <div class="header">
            <h3>Welcome  | <?php echo "<span style='text-transform: capitalize'>" .$_SESSION['user']. "</span>";?></h3>
          <nav>
            <ul>
              <li>
              <a href="logout.php">logout</a>
            </li>
          </ul>
          </nav>
        </div>

      <section>
        <p><a href="notice_view.php">Dashboard</a></p>
          <img src="image.1/img1.jpg" alt="">
          <article>
            <p><a href="update_password.php">Update password</a></p><br>
          </article>
      </section>
    </div>
  </body>
</html>
