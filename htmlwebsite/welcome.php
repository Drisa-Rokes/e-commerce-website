<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
 	<div  style="background: radial-gradiant(#fff,#ffd6d6);">
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
				<li><p id="user" ><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></p>
				<li><a href="logout.php" class="btn btn-danger">Sign Out</a></li>
				<li><a href="reset-password.php" class="btn btn-warning">Reset Password</a></li>
				</ul>
		</nav>
		<a href="cart.html"><img src="images/cart.png" width="30px" height="30px;"></a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
	</div>
	<div class="row">
		<div class="col-2">
			<h1>TIME TO SHOPPING NOW</h1>
			<p>Succsess isn't always abut greateness<br>It's depend on consitancy.Consitent<br> Hard works gains success</p>
			<a href="" class="btn">Explore Now &#8594</a>
		</div>
		<div class="col-2">
			<img src="images/1234.png">
		</div>
		
	</div>
</div>
</div>
<!-- featured categories -->
<div class="categories">
	<div class="small-container">
	<div class="row">
	<div class="col-3">
		<img src="images/category-1.jpg">
	</div>
	<div class="col-3">
		<img src="images/category-2.jpg">
	</div>
	<div class="col-3">
		<img src="images/category-3.jpg">
	</div>
</div>
</div>
</div>
<!-- Featured Product -->
<div class="small-container">
	<h2 class="title">Featured Product</h2>
	<div class="row">
		<div class="col-4">
			<a href="poduct-details.html"><img src="images/Product-1.jpg"></a>
			<a href="poduct-details.html"><h4>Red Printed T-Shirt</h4></a>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
			<div class="col-4">
			<img src="images/Product-2.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
			<div class="col-4">
			<img src="images/Product-3.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
			<div class="col-4">
			<img src="images/Product-4.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		</div>
		<h2 class="title">Latest Product</h2>
	
		<div class="row">
		<div class="col-4">
			<img src="images/Product-5.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
			<div class="col-4">
			<img src="images/Product-6.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
			<div class="col-4">
			<img src="images/Product-7.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
			<div class="col-4">
			<img src="images/Product-8.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		</div>
	<div class="row">
		<div class="col-4">
			<img src="images/Product-9.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
			<div class="col-4">
			<img src="images/Product-10.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
			<div class="col-4">
			<img src="images/Product-11.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
			<p>$50.00</p>
		</div>
			<div class="col-4">
			<img src="images/Product-12.jpg">
			<h4>Red Printed T-Shirt</h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
			<p>$50.00</p>
		</div>
		</div>

</div>
<!-- offer -->
<div class="offer">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
				<img src="images/exclusive.png" class="offer-img">
			</div>
			<div class="col-2"> 
				<p>Excusively Avalable on Drisa Market</p>
				<h1>Smart Band 4</h1>
				<small>The Mi Smart Band 4 features a 39.9% larger(than Mi Band 3) AMOLED
				color full-touch display with adjustable brightness,so everything is clear as can be.</small>
				<a href="" class="btn"> Buy Now &#8594;</a>
			</div>
		</div>
	</div>
</div>
<!-- testimonial -->
<div class="test" style="background-color: white;padding-top: 100px;">
	<div class="small-container">
		<div class="row">
			<div class="col-3" style="text-align: center;padding: 40px 20px;">
				<i class="fa fa-quote-left"></i>
				<p>Lorem Ipsum is simply dummy text of the printing
				and typertting industry.Lorrem Ipsum has been the industry's standard dummy text ever</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				</div>
				<img src="images/user-1.png" style="width: 50px;margin-top: 20px;border-radius: 50%;">
				<h3>Sean parker</h3>

			</div>
			<div class="col-3" style="text-align: center;padding: 40px 20px;">
				<i class="fa fa-quote-left"></i>
				<p>Lorem Ipsum is simply dummy text of the printing
				and typertting industry.Lorrem Ipsum has been the industry's standard dummy text ever</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				</div>
				<img src="images/user-2.png" style="width: 50px;margin-top: 20px;border-radius: 50%;">
				<h3>Indra swetlani</h3>

			</div>
			<div class="col-3" style="text-align: center;padding: 40px 20px;">
				<i class="fa fa-quote-left"></i>
				<p>Lorem Ipsum is simply dummy text of the printing
				and typertting industry.Lorrem Ipsum has been the industry's standard dummy text ever</p>
				<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
				</div>
				<img src="images/user-3.png" style="width: 50px;margin-top: 20px;border-radius: 50%;">
				<h3>Weakar Osima</h3>

			</div>
		</div>
	</div>
</div>
<!-- BRANDS -->
<div class="brands">
	<div class="small-container">
		<div class="row">
			<div class="col-5">
				<img src="images/logo-godrej.png">
			</div>
			<div class="col-5">
				<img src="images/logo-oppo.png">
			</div>
			<div class="col-5">
				<img src="images/logo-coca-cola.png">
			</div>
			<div class="col-5">
				<img src="images/logo-paypal.png">
			</div>
			<div class="col-5">
				<img src="images/logo-philips.png">
			</div>
		</div>
	</div>
</div>
<!-- Footer -->
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
<!-- ----------JS---------- -->

</body>
</html>