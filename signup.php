<?php


	include_once 'db.php';

if(isset($_POST['submit'])){

$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['pwd'];

$sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password');";
mysqli_query($conn, $sql);
}


?>

<!DOCTYPE html>
 <head>
	 <title>Untitled</title>
	 <meta charset="UTF-8"/>
	 <link rel="stylesheet" href="" type="text/css"/>
 </head>
	 <body>
	 <form action="signup.php" method="POST">
	 	<input type="text" name="name" placeholder="name"><br>
	<input type="email" name="email" placeholder="email"><br>
	<input type="password" name="pwd" placeholder="password"><br>
	<input type="submit" name="submit" value="submit">
	</form>
	 </body>
 </html>