<!DOCTYPE html>
<html>
<head>
	<title>box</title>

		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<style type="text/css">
	.prod input{
	width: 50px;
	height: 30px;
	padding-left:10px;
	font-size: 20px;
	margin-right: 10px;
	border: 1px solid #ff523b;
}

.prod .fa{
	color:#ff523b;
	margin-left: 10px;
}

</style>
</head><body>

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

<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"productdb");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

//$a= intval("<script>document.writeln(c);</script>");
$a=$_POST['product'];
$sql = "SELECT id, name, price,img,des FROM producttb WHERE id='$a'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

  	?>


  		<div class="prod">
		<div class="row">
		<div class="col-2">
			<img src="<?php echo $row["img"]; ?>" style="width:600px;margin-left: 40px;" id="ProductImg">
		</div>


		<div class="col-2">
			
			<h1><?php echo $row["name"]; ?></h1>
			<h4> $<?php echo $row["price"]; ?></h4>
			Quantity:<input type="number" value="1">
			<a href="#" class="btn">Add To Cart</a>
			<h3>Product Details <i class="fa fa-indent"></i></h3>
			<p><?php echo $row["des"]; ?></p>
		</div>

		
	</div>

<?php

     }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

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



</body>
</html>
