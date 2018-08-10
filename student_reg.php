<?php

if(isset($_POST['submit'])){

include_once 'db.php';

$name = $_POST['name'];
$no = $_POST['no'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO login (name, number, email, pwd) VALUES ('$name', '$no', '$email', '$pwd');";

mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
 <head>
	 <title>Signup</title>
	 <meta charset="UTF-8"/>
 		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
 <style>
  * {
 margin:0;
 padding:0;
 }
 
 
 body{
	margin: 0;
	padding:0;
	font-family: 'PT' , sans-serif;
	background-color: white;
	user-select: none;
}

.container {
background-color: 	rgba(255, 255, 255, .5);
width: 106%;
height: 0%;
padding: 0px 0px 7em 0px;
position: relative;
box-sizing: border-box;
box-shadow: 0px 5px 5px 5px rgba(0, 0, 0, .1);
box-shadow: 0px 20px 50px 10px 100px rgba(0, 0, 0, .1);
}

.logo {
padding: 0px 0px;
font-size: 1.3em;
color: #4d94ff;
float: left;
margin-top: 33px;
margin-left: 3em;
letter-spacing: 2.5px;
}

nav {
position: relative;
float: right;
margin: 2.8em 2em 0px 0em;
}

nav ul {
margin: 0;
padding: 0;
display: flex;
}

nav ul li {
list-style-type: none;
}

nav ul li a {
text-decoration: none;
font-size: 1.1em;
padding: 0px 20px;
color: white;
text-transform: uppercase;
color: black;
transition: .2s;
letter-spacing: 2.5px;
}

nav ul li ul {
display: block;
position: absolute;
background: #867979;
border-radius: 1em;
opacity: 0;
visibility: hidden;
transition: .2s ease-in-out;
margin-top: 1em;
padding: 30px;
line-height: 2em;
}

nav ul li ul li a {
letter-spacing: 5px;
font-size: 1.3em;
padding: 0px;
color: white;
transition: .2s ease-in-out;
}

.active {
color: gray;
}

nav ul li ul li a:hover
{

color: lightgray;

}


nav ul li a:hover {
color: gray;
}


nav ul li:hover ul {
opacity: 1;
visibility: visible;
}

 
 form {
 background-color: rgba(255,255,255,0.5);
 padding: 1.8em;
 width: 100%;
 height: 100%
 box-sizing: border-box;
 box-shadow: 0px 5px 5px  rgba(0,0,0,.1);
 text-align: center;
 margin: 10px 0px 0px 0px;
 } 
 
 .headline h1 
 {
 font-weight: 200;
 top: 0;
 padding: 0px 0px 50px 0px ;
 letter-spacing: 5px
 margin: 0px 0px 10px 0px;
 font-family: 'PT Sans', sans-serif;
 }
 
 form input {
 user-select: none;
 font-size: 1.2em;
 box-sizing: border-box;
 border: none;
 width: 100%;
 padding: 25px 0px 25px 55px;
 border: 2px solid rgba(0,0,0,.1);
 outline: none;
 margin: 0px 0px 20px 0px;
 }
 
 form input:focus + i {
 color: dodgerblue;
 transition: .2s;
 }
 
 ::placeholder {
 text-transform: uppercase;
 }
 
 button{
 width: 100%;
 font-size: 2em;
 text-transform: uppercase;
 box-sizing: border-box;
 border: none;
 width: 100%;
 padding: 15px;
 border: 2px solid rgba(0,0,0,.1);
 outline: none;
 margin: 0px 0px 10px 0px;
 }
 
 .user {
 position: relative;
 }
 
 .user i {
 margin: -71px 57em 0px -19.5em;
 padding: 0px 0px 0px 0px;
 position: absolute; 
 font-size: 24px;
 color: black;
 }

 </style>
 </head>
	 <body>

<div class= "container">
		<div  class="logo"><h1>Yogic Way</h1></div>
		<nav>
		<ul>
		
		<li><a href="index.html">Home</a></li>
		<li><a href="#" class="active">Register</a>
		<ul>
		<li><a href="student_reg.html">Student</a></li>
		<li><a href="tr_reg.html">Trainer</a></li>
		</ul>
		</li>
		<li><a href="#">Products</a></li>
		<li><a href="contact.html">Contact Us</a></li>
		</ul>
		</nav
				</div>
			</div>	

	<form action="student_reg.php" method="POST" >
	<div class="headline">
	<h1>Student Registration</h1>
	</div>
	<duv class="user">
			<input  type="text" name="name" placeholder="Name" required>
			<i class="fas fa-user"></i>
			</div>
			<div class="number">
		 	<input type="tel" name="no" placeholder="Mobile No." min-length="10" required>
		 <i class="fas fa-phone"></i>
		 	</div>
		 	
		 	<div class="email">
		 <input type="email" name="email" placeholder="E-mail" required>
		 <i class="fas fa-envelope"></i>
		 </div>
		 <div class="password">
		 	<input type="password" name="pwd" placeholder="Password" required>
		 	<i class="fas fa-unlock"></i>
		 	</div>
		 	
		 		<button type="submit" name="submit" value="submit">Submit</button>
	</form>
	 </body>
 </html>