<?php
session_start();
include_once 'C:\xampp\htdocs\www\online notice board\db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>send notice</title>
    <script>
      
    </script>
    <style>
    * {
            margin: 0;
            padding:0;
        }
        body {
            overflow-x: hidden;
        }
        
        table{
            background-color: lightgoldenrodyellow;
            margin: 0;
            padding:0;
            padding: 10px;
            margin: 10px;
            width: 670px;
            border-radius: 15px;
            text-transform: capitalize;
            box-shadow: 5px 5px 10px rgba(0,0,0,.1);
            float: right;
            overflow: hidden;
        }

        table td {
            padding: 5px;
        }

        table td {
            width: 100px;
            font-size: 20px;
        }

        table th {
            text-align: left;
            padding: 0;
            margin: 0;
            width: 0px;
            height: 0px;
            font-size: 24px;
        }

        form {
          width: 300px;
          background-color: aquamarine;
          text-align: center;
          margin: 100px 200px;
          padding: 20px;
          border-radius: 10px;
          padding-bottom: 25px;
          float: left;
        }

        form p {
          font-size: 28px;
          color: black;
          margin-bottom: 10px;
        }

        form input {
          width: 250px;
          padding: 8px;
          margin-bottom: 10px;
          outline: none;
          border: none;
          font-size: 16px;
        }
        ::placeholder {
          text-transform: capitalize;
        }

        form button {
          width: 270px;
          padding: 10px;
          border: none;
          border-radius: 10px;
          font-size: 20px;
          outline: none;
          cursor: pointer;
        }

        form textarea {
          width: 245px;
          height: 50px;
          outline:none;
          border: none;
          resize: none;
          padding: 10px;
          margin-bottom: 5px; 
        }

        .notice h3 {
          font-size: 48px;
          text-align: center;
          text-transform: capitalize;
          margin-bottom: 30px;
        }
    </style>
  </head>
  <body>
  <?php 
include 'includes/header.php';
?>
    <form class="" action="send_notice.php" method="post">
    <p>Send Notice To:</p>
      <input type="text" name="user" value="" placeholder="username" minlength="3"><br>
      <input type="text" name="subject" value="" placeholder="subject" minlength="3"><br>
      <textarea name="description" value="" placeholder="description" minlength="3"></textarea><br>
      <button type="submit" name="submit">Send</button>
    </form>
    <div class="notice">
    <h3>notices</h3>
    </div>
  </body>
  <?php
  if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $subject = $_POST['subject'];
    $desc = $_POST['description'];
    
    if (empty($user) || empty($subject) || empty($desc)) {
      header("location: send_notice.php?EMPTY");
    } else {
     echo "";
     $sql = "SELECT user FROM user WHERE user='$user';";
     $query = mysqli_query($con, $sql);
     if (mysqli_num_rows($query) > 0) {
      $sql1 = "INSERT INTO notice (user, subject, description) VALUES ('$user', '$subject', '$desc');";
       $query1 = mysqli_query($con, $sql1);
       header("location: send_notice.php?noticesend");
     } else {
       header("location: send_notice.php?ERROR");
     }
    }
  }
  
  $sql1 = "SELECT * FROM notice ORDER BY notice_id DESC LIMIT 4;";
  $query1 = mysqli_query($con, $sql1);
  while ($row = mysqli_fetch_array($query1)) {
    

    ?>
    
    <table style="background-color: ;">
    <tr>
        <th>notice id</th>
        <th>user</th>
        <th>Subject</th>
        <th>Description</th>
        <th>Date</th>
    </tr>
    <tr>
        <td><?php echo $row['notice_id'] ?></td>
        <td><?php echo $row['user'] ?></td>
        <td><?php echo $row['subject'] ?></td>
        <td><?php echo $row['description'] ?></td>
        <td><?php echo $row['date'] ?></td>
    </tr>
</table>
    
    <?php
    
  }
   ?>
</html>
