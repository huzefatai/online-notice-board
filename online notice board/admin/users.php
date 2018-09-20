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
    <style>
    table{
            background-color: #f1f1f1;
            margin: 0;
            padding:0;
            padding: 10px;
            margin: 20px;
            width: 650px;
            border-radius: 15px;
            text-transform: ;
        }

        table td {
            padding: 5px;
        }

        table td {
            width: 100px;
        }

        table th {
            text-align: left;
            padding: 0;
            margin: 0;
            width: 0px;
            height: 0px;
        }
    </style>
    <title>Manage User | <?php echo $_SESSION['username']; ?></title>
</head>
<body>
    
<?php 
include 'includes/header.php';
?>    <?php
        $sql = "SELECT * FROM user";
        $query = mysqli_query($con, $sql);
        if (mysqli_num_rows($query) < 0) {
            echo "no user is there";
        } else {
           while ($row = mysqli_fetch_assoc($query)) {
               ?>
               <table>
               <tr>
        <th>user id</th>
        <th>username</th>
        <th>email address</th>
        <th>Delete user</th>
    </tr>
                   <tr>
                       <td><?php echo $row['user_id']; ?></td>
                       <td><?php echo $row['user']; ?></td>
                       <td><?php echo $row['email']; ?></td>
                       <td><a href="delete_user.php">dlete</a></td>
                   </tr>
               </table>
           <?php    
           }
        }
        
    ?>
</body>
</html>