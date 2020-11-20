<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Cart </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
<!-- ------CART ITEMS DETAILS---- -->

<div class="container">
    <div class="col my-4">
        <h2>Step 1 - My Awesome Cart Express Checkout - Review Your Cart Items</h2>
        <div class="my-4">
            <ul class="list-group" id="item">
            </ul>
        </div>
    </div>


<div class="small-container cart-page">
	<table>
		<tr>
			<th>Product</th>
			<th>Quantity</th>
			<th>Subtotal</th>
		</tr>
		<tr>
			<td><div class="cart-info">
				<img src="images/buy-1.jpg">
				<div>
					<p>Red Printed T-Shirt</p>
					<small>Price: $50.00</small>
					<a href="">Remove</a>
				</div>
			</div></td>
			<td><input type="number" value="1"></td>
			<td>$50.00</td>

		</tr>
		<tr>
			<td><div class="cart-info">
				<img src="images/buy-2.jpg">
				<div>
					<p>Red Printed T-Shirt</p>
					<small>Price: $100.00</small>
					<a href="">Remove</a>
				</div>
			</div></td>
			<td><input type="number" value="1"></td>
			<td>$50.00</td>

		</tr>
		<tr>
			<td><div class="cart-info">
				<img src="images/buy-3.jpg">
				<div>
					<p>Red Printed T-Shirt</p>
					<small>Price: $150.00</small>
					<a href="">Remove</a>
				</div>
			</div></td>
			<td><input type="number" value="1"></td>
			<td>$50.00</td>

		</tr>
	</table>

	<div class="total-price">
		<table>
			<tr>
				<td>Subtotal</td>
				<td>$200.00</td>
			</tr>
			<tr>
				<td>Tax</td>
				<td>$35.00</td>
			</tr>
			<tr>
				<td>Subtotal</td>
				<td>$230.00</td>
			</tr>
		</table>
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

<script>
	var MenuItems=document.getElementById("MenuItems");
	MenuItems.style.maxheight="0px;"

	function menutoggle(){
		if (MenuItems.style.maxheight=="0px") {
			MenuItems.style.maxheight="200px";
		}
		else
		{
			MenuItems.style.maxheight="0px";
		}
	}

	// js for product gallery

	
</script>


<script>
if (localStorage.getItem('cart') == null) {
    var cart = {};
} else {
    cart = JSON.parse(localStorage.getItem('cart'));
}
console.log(cart);
var sum = 0;
var price=0;
if ($.isEmptyObject(cart)) {
    //if object is empty
    mystr = `<p>Your cart is empty, please add some items to your cart before checking out!</p>`
    $('#items').append(mystr);
} else {
    for (item in cart) {
        let name = cart[item][1];
        let qty = cart[item][0];
        sum = sum + qty;
         price= price + qty*(cart[item][]) ;

        mystr = `<li class="list-group-item d-flex justify-content-between align-items-center">
                    ${name}
                    <span class="badge badge-primary badge-pill">${qty}</span>
                </li>`
        $('#item').append(mystr);
    }
}
document.getElementById('cart').innerHTML = sum;
</script>


</body>

</html>

