<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CONTACT -DRISA MARKET</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="style1.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
		<div class="container">
	<div class="navbar">
		<div class="logo">
			<a href="index.html"><img src="images/logo1.png" width="125px" style="filter: brightness(120%);"></a>
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="index.html"> Home</a></li>
				<li><a href="product.php"> Products</a></li>
				<li><a href="about.html"> About Us</a></li>
				<li><a href="contact.php"> Contact</a></li>
				<li><a href="register.php"> Account</a></li>
			</ul>
		</nav>
		<a href="cart.html"><img src="images/cart.png" width="30px" height="30px;"></a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
</div>	
</div>

		<div class="wrapper" style="background-image: url('images/back.jpg');">
			<div class="inner">
				<form action="contact.php" method="post" name="myform" >
					<h3>Contact Us</h3>
					<p style="color: white;">DRISA MARKET is best website in case of replying to customer and for keep touch with customer</p>
					<label class="form-group">
					
						<input type="text" class="form-control"  name="fname" required>
						<span>Your Name</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control"   name="email" required>
						<span for="">Your Mail</span>
						<span class="border"></span>
					</label>
					<label class="form-group" >
						<textarea  class="form-control"  name="massage" required></textarea>
						<span for="">Your Message</span>
						<span class="border"></span>
					</label>
					<button onclick="valid()">Submit 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
		<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download Our App</h3>
				<p>Download App for Android and ios Mobile Phone</p>
				<div class="app-logo">
					<img src="images/play-store.png">
					<img src="images/app-store.png">
				</div>
			</div>
			<div class="footer-col-2">
				<img src="images/logo1.png">
				<p>Our Purpose is to sustainably Make the Pleasure and Benefits of Sports Accesible to the Many</p>
			</div>
		<div class="footer-col-3">
				<h3>Useful Links</h3>
				<ul>
					<li>Coupons</li>
					<li>Blog Post</li>
					<li>Return Policy</li>
					<li>Join Affiliate</li>
				</ul>
			</div>
		<div class="footer-col-4">
				<h3>Follow Us</h3>
				<ul>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Instagram</li>
					<li>YouTube</li>
				</ul>
			</div>
		
		</div>
		<hr>
		<p class="copyright"> Copyright 2020-Drisa markets</p>
	</div>
</div>




<?php
session_start();
$dbhost='localhost:3306';
$dbuser='root';
$dbpass='';
$dbname='market';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$a=0;
$fname=$_POST['fname'];
$email=$_POST['email'];
$massage=$_POST['massage'];

if(! $conn){
die('Could not connect:'.mysqli_connect_error());
}

$s="select *from contact where email='$email'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['name']=$name;
	echo"<p>user already commented</p>";
}
else{
$sql="INSERT INTO contact(name,email,massage) VALUES('$fname','$email','$massage')";
 //$sql="DELETE FROM student11 WHERE id='4'";

 if(mysqli_query($conn,$sql)){
 	echo"<script> alert('YOUR COMMENT IS NOTED')</script>";

 }
 else{
 	echo"no";
 }}
?>


<script>
function valid(){
 var a=document.forms["myform"]['fname'].value;
if(a=="")
{
alert("name is empty");
return false;
}

var b=document.forms['myform']['massage'].value;
if(b=="")
{
alert('please write your massage');
return false;}

}

</script>




	</body>
</html>