<?php
session_start();
include_once 'C:\xampp\htdocs\www\online notice board\db.php';
echo "<h1 style='padding: 10px; text-align: center;  margin: 10px; text-transform:capitalize'>Welcome " .$_SESSION['user']. "</h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notice View</title>
    <style>
        * {
            margin: 0;
            padding:0;
        }
        
        body {
            overflow-x: hidden;
        }
        
        table{
            background-color: #f1f1f1;
            margin: 0;
            padding:0;
            padding: 10px;
            margin: 20px;
            width: 650px;
            border-radius: 15px;
            text-transform: capitalize;
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
</head>
<body>
    <?php
    
    $sql = "SELECT * FROM notice ORDER BY notice_id DESC;";
    $query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
        ?>

<table style="background-color: #f1f1f1;">
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
</body>
</html>