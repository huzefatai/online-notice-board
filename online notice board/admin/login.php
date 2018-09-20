<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <style media="screen">
      * {
        margin: 0;
        padding: 0;
      }

      body{
        margin: 0;
        padding: 0;
      }

      form {
        text-align: left;
        padding: 50px;
        margin: 0px auto;
        background: #f1f1f1;
        margin: 0px 500px;
      }

      form input {
        width: 300px;
        border: none;
        margin-bottom: 10px;
        padding: 15px;
        font-size: 14px;
        outline: none;
      }
      
      ::placeholder 
      {
        text-transform: capitalize;
      }

      form button {
        width: 220px;
        padding: 10px;
        font-size: 20px;
        border: none;
        text-transform: capitalize;
      }

      form h4 {
        margin-bottom: 10px;
        font-size: 32px;
        border-bottom: 2px solid black;
        background: lightgrey;
        padding: 5px;
      }

      form a {
        text-decoration: none;
        color: white;
      }

      @media (min-width: 400px) {
        form {
          width: 500px;
          height: 240px;
          background: grey;
          text-align:center;
          margin: 0;
          padding: 0;
          margin: 100px 0px 0px 100px; 
          border-radius: 10px;
        }

        form h4 {
          border-radius: 10px 10px 0px 0px;
        }

        form input {
          width: 250px;
          padding: 10px;
          border-radius: 10px;
        }

        form input[type=email] {
          width: 250px;
          padding: 10px;
          margin-top: 20px;
        }

        form button {
          padding:5px;
          width: 275px;
          margin-bottom: 10px;
          border-radius: 10px;
        }
      }
    </style>
  </head>
  <body>
    
    <form class="" action="login.php" method="post">
      <h4>Admin Login</h4>
      <input type="email" name="email" required placeholder="email" value=""><br>
      <input type="password" name="password" required placeholder="password" value=""><br>
      <button type="submit" name="submit">submit</button><br>
      <a href="signup.php">CREATE ACCOUNT</a>
    </form>

    <?php
    if (isset($_POST['submit'])) {
      include 'C:\xampp\htdocs\www\online notice board\db.php';
      $email = $_POST['email'];
      $password = $_POST['password'];
      $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password';";
      $query = mysqli_query($con, $sql);

      if (mysqli_num_rows($query) < 0) {
        echo "username is not there";
      } else {
        while ($row = mysqli_fetch_assoc($query)) {
          $_SESSION['admin_id'] = $row['admin_id'];
          $_SESSION['username'] = $row['username'];
        }
        header("location: index.php");
        exit();
      }
    }
     ?>
  </body>
</html>
