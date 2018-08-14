<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="https://fo	nts.googleapis.com/css?family=PT			+Sans" rel="stylesheet">
<title>Yoga Web Page</title>
<style>

body{
	margin: 0;
	padding:0;
	font-family: 'Open Sans', sans-serif;
	width: 255%;
	height: 100%;
	background-color: white;
}

.container {
background-color: 	rgba(255, 255, 255, .5);
width: 102%;
height:  40%;
padding: 0px 0px 100px 0px;
box-shadow: 0px 5px 20px rgba(0, 0, 0, .5);
position: relative;
}

.logo {
padding: 22px 20px;
font-size: 3em;
color: #4d94ff;
float: left;
margin-top: -20px;
margin-left: 3em;
letter-spacing: 5px;
}

nav {
position: relative;
float: right;
margin: 6em 7em 0px 0em;
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
font-size: 3em;
padding: 33px 30px;
color: white;
text-transform: uppercase;
color: black;
transition: .2s;
letter-spacing: 5px;
}

.active {
color: gray;
}

nav ul li ul {
display: block;
position: absolute;
background:#867979;
min-width: 250px;
border-radius: 2em;
opacity: 0;
visibility: hidden;
transition: .2s ease-in-out;
margin-top: 3em;
padding: 50px;
line-height: 5em;
}

nav ul li ul li a {
letter-spacing: 5px;
font-size: 3.5em;
padding: 20px;
color: white;
transition: .2s ease-in-out;
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

.img {
margin: 0px 25px;
width: 100%;
height: 200%;
background-image: url('https://images.pexels.com/photos/903171/pexels-photo-903171.jpeg?cs=srgb&dl=active-aerobics-beautiful-903171.jpg&fm=jpg');
background-repeat: no-repeat;
background-position: center;
background-size: cover;
border-radius: 1em; 
box-shadow: 0px 5px 5px 5px rgba(0, 0, 0, .1);
box-shadow: 0px 20px 50px 10px 100px rgba(0, 0, 0, .1);
}

.img h1
{
letter-spacing: 5px;
width: 100%;
height: 0%;
position: relative;
color: white;
font-size: 9.5em;
text-align: center;
letter-spacing: 5px;
font-family: 'Raleway', sans-serif;
font-weight: 500;
top: 550;
bottom: 20;
font-weight: 700;
}

.content{
color: white;
font-size: 4em;
box-sizing: border-box;
} 

.content .box
{
background-color: white;
width: 31%;
margin: 0px 20px;
border-radius: 1em;
margin-top: 50px;
overflow: hidden;
text-align: center;
padding: 80px;
box-shadow: 0px 5px 5px 5px rgba(0, 0, 0, .1);
}

.content .box i 
{
text-align: center;
width: 100%;
margin: 0px;
font-size: 1.5em;
color: black;
}
.content .box p 
{
color: black;
text-align: center;
width: 100%;
margin: 50px 0px 0px 0px;
font-size: 0.8em;
}

.content .box
{
color: black;
background-color: white;
width: 25%;
height: 125%;
margin: 1em 20px;
border-radius: 1em;
padding: 80px;
box-shadow: 0px 20px 50px 10px 100px rgba(0, 0, 0, .1);
float: left;
}

.content .box a {
text-decoration: none;
color: black;
}

footer 
{
background-color: black;
width:  102%;
height: 125%;
margin: 55em 0px 0px 0px;
}

footer p 
{
color: white;
width: 93%;
font-size: 3em;
padding: 30px;
margin: 0px 0px 0px 0px;
}

footer i {
color: white;
float: right;
margin: -1.4em 29.5em -100px 0px;
padding: 0px 0px 0em 0px; 
font-size: 4em;
}

article {
text-align: center;
margin: -20em 0px 0px 55em;
}

article p{
color: white;
width: 90%;
letter-spacing: 5px;
positon: absolute;
}

.st_register 
{
width: 100%;
height: 175%;
background-image: url("https://images.pexels.com/photos/1288488/pexels-photo-1288488.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
margin: 50px 0px 0px 25px;
box-sizing: border-box;
box-shadow: 0px 5px 5px 5px rgba(0, 0, 0, .1);
box-shadow: 0px 20px 50px 10px 100px rgba(0, 0, 0, .1);
}
.st_register p 
{
margin: 0px 0px 0px 3em;
padding: 1em 1em 0px 1em;
color: white;
font-weight: 700;
font-size: 8em;
}
.st_register h3 
{
pointer: cursor;
margin: 40px 50px 0px 10px;
padding: 0em 0em 0px 1.2em;
letter-spacing: 5px;
font-family: 'PT Sans', sans-serif;
color: black;
text-align: center;
font-size: 5em;
font-weight: 100;
}
.st_register .click{
background-color: white;
max-width: 20%;
padding: 50px;
margin: 0px 0px 0px 18.2em; 
}

.st_register h3 a {
color: black;
text-decoration: none;
transition: .2s ;
}
.st_register h3 a:hover
{
color: teal;
}
.tr_register
{
background-image: url("https://images.pexels.com/photos/866021/pexels-photo-866021.jpeg?cs=srgb&dl=aerobic-break-class-866021.jpg&fm=jpg");
background-repeat: no-repeat;
background-position: center;
background-size: cover;
width: 100%;
height: 175%;
margin: 50px 0px 0px 25px;
box-sizing: border-box;
box-shadow: 0px 5px 5px 5px rgba(0, 0, 0, .1);
box-shadow: 0px 20px 50px 10px 100px rgba(0, 0, 0, .1);

}

.tr_register p
{
color: black;
font-weight: 700;
font-size: 8em; 
}

.tr_register a
{
font-size: 5em;
color: black;
text-decoration: none;
pointer: cursor;
letter-spacing: 5px;
font-family: 'PT Sans', sans-serif;
color: black;
font-weight: 100;
}
.tr_register p {
color: white;
padding: 100px 0px 0px 0px;
margin: 0px 0px -50px 5em;
}

.tr_register article {
width: 20%;
padding: 50px;
margin: 7em 0px 0em 98em;
background-color: white;
}

.tr_register article a{
pointer: cursor;
transition: .2s;
} 

.tr_register article a:hover
{
color: teal;
}

.product 
{
background-image: url("https://images.pexels.com/photos/267977/pexels-photo-267977.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=1500&w=1500");
background-position: left;
background-repeat: no-repeat;
background-size: cover;
width: 100%;
height: 175%;
margin: 50px 0px 0px 25px;
box-sizing: border-box;
box-shadow: 0px 5px 5px 5px rgba(0, 0, 0, .1);
box-shadow: 0px 20px 50px 10px 100px rgba(0, 0, 0, .1);

}

.product h2 {
font-size: 8em;
margin: 0px 0px 0px 0px;
padding: 1em 0px 0px 2em;
font-family: 'PT Sans', sans-serif;
letter-spacing: 5px;
text-transform: uppercase;
color: black;
}

.product p {
font-size: 2.5em;
margin: 0px 0px 0px 100px;
padding: 0;
letter-spacing: 2.5px;
color: white;
}

.product article {
background-color: white;
padding: 50px;
width: 12%;
margin: 50px 0px 0px 33em;
}
.product article a {
margin: 0px;
padding: 0px;
color: black;
letter-spacing: 5px;		
text-decoration: none;
font-size: 3.9em;
font-family: 'PT Sans', sans-serif;
transition: .2s;
font-weight: 700;
pointer: cursor;
}
.product article a:hover 
{
color: teal;
}
</style>
</head>
<body>
	<div class= "container">
		<div  class="logo"><h1>Yogic Way</h1></div>
		<nav>
		<ul>
		
		<li><a href="index.php" class="active">Home</a></li>
		<li><a href="#">Register</a>
		<ul>
		<li><a href="student_reg.php">Students</a></li>
		<li><a href="tr_reg.php">Trainer</a></li>
		</ul>
		</li>
		<li><a href="#">Booking</a>
				<ul>
		<li><a href="#">Yoga Center</a></li>
		<li><a href="#">Spa Center</a></li>
			<li><a href="#">Trail  Class</a></li>
			</ul>
		</li>
		<li><a href="contact.php">Contact Us</a></li>
		<li><a href="login.php">Login</a></li>
		</ul>
		</nav
				</div>
			</div>
			
			<div class="img">
			  <caption>
			 <h1>Yoga Classes Is Available Here</h1>
			  </caption>                                                       
			</div>
			
			<div class="st_register"><p>Students Can Register Here</p>
			<h3><a href="student_reg.html"><div class="click">Click Here</div></h3></a>
			 </div>
			<div class="tr_register">
			
			<p>Trainer Can Register Here</p>
			
			<article>
			
			<a href="tr_reg.html">
			Click Here
			</a>
			
			</article>
			
			</div>
			
			<div class="product">
			
			<h2>
			Yoga Mat
			</h2>
			
			<p>
			Yoga Mat For Smoothing Your Daily Exersice
			</p>
			<article>
			<a href="#">Buy Now</a>
			</article>
			</div>
			
			<div class="content">
			
			<div class="box">
								<i class="fas fa-stopwatch"></i>
				<p> Yoga Class Timing 7am - 10am </p>
			</div>
			
			<div class="box">
			<i class="fas fa-chalkboard-teacher"></i>
			<p>We Have Experts Teacher For Training Our Future Healthy and Fit
			For Booking Your Yoga Class With Our Experts Register Now By Clicking Here 
			 <a href="#">Link</a></p>
			
			</div>
			<div class="box">			
			<i class="fas fa-shopping-cart"></i>
			<p>We Have So Many Product For Yogi Student To Purchase You Can Buy It From This <a href="#">Link</a></p>
			</div>
			</div>			
			
			<footer>
			<aside>
		<a href="https://m.facebook.com/huzefatai">	<p>Follow Us On Facebook</p><i class="fab fa-facebook-square"></i></a>
			<a href="https://plus.google.com/u/0/107935167502275907152"><p>Follow Us On Google+</p><i class="fab fa-google-plus-square"></i></a>
			<a href="https://twitter.com/huzefa_tai"><p>Follow Us On Twitter</p><i class="fab fa-twitter-square"></i></a>
			<a href="https://mail.google.com/mail/u/0/?tab=wm#inbox/FMfcgxvxBPWhjXgGsSBFqLGhSXTczQbg"><p>Follow Us On Gmail</p><i class="fas fa-envelope" id="four"></i></a>
			<article>
			<p>All Right Are Reserved From 
			Yogic Class &copy;</p>
			</article>
			</aside>
			</footer>
			
</body>
</html>