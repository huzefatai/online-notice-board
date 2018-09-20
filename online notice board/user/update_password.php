<?php 
session_start();
include_once 'C:\xampp\htdocs\www\online notice board\db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Password</title>
  <style>
  * {
    margin: 0;
    padding:0;
  }

  form {
    background: #f1f1f1;
    padding: 20px;
    color: white;
    text-align: left;
    width: 300px;
    margin: 30px 200px;
  }

  form p {
    color: black;
    font-size: 28px;
    letter-spacing: 5px;
    margin: 5px;
  }

  form input {
    padding: 10px;
    border: none;
    margin-bottom: 10px;
    outline: none;
    width: 270px;
    font-size: 16px;
  }

  form input[type=submit] {
    width: 290px;
    font-size: 20px;
    text-transform: capitalize;
  }
  </style>
</head>
<body>
  <form method="post" action="update_password.php">
  
    <p>Update Password</p><br>
    <input type="password" name="password" placeholder="Enter Current Password"><br>
    <input type="password" name="password1" id="" placeholder="Enter New Password"><br>
    <input type="submit" name="submit" value="submit">
  </form>
  <?php
  $err = "";
    if (isset($_POST['submit'])) {
      $password = $_POST['password'];
      $password1 = $_POST['password1'];

      if (empty($password) || empty($password1)) {
        echo "field are empty";
      } else {

      $sql = "SELECT password FROM `user` WHERE password='$password';";
      $query = mysqli_query($con, $sql);

      if (mysqli_num_rows($query) > 0) {
        if ($password != $password1) {
          $sql1 = "UPDATE `user` SET `password`='$password1' WHERE 1;";
          $query1 = mysqli_query($con, $sql1);
          header("location: index.php?passwordupdated");
        } else {
          echo "passowrd cannot be same";
        }
      } else {
        echo "old password is wrong";
        
       }
      }
    }
  ?>
</body>
</html>