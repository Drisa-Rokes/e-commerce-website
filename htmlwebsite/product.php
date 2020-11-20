<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"productdb");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM producttb");
?>


<!DOCTYPE html>
<html>
 <head>
	 <title> Product</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

 <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">



</style>
 </head>
<body>

<div class="navbar">
		<div class="logo">
			<a href="index.html"><img src="images/logo1.png" width="125px" style="filter: brightness(120%);"> </a>
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
			
		<button type="button" id = "popcart"class="btn btn-secondary mx-2" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
Cart (<span id="cart">0</span>)</button>
</div>


	</div>
		
	<div class="small-container">
		<div class="row row-2">
		<h2>All Products</h2>
		<select>
			<option> Default shorting</option>
			<option> Short by Price</option>
			<option> Short by popular</option>
			<option> Short by rating</option>
			<option> short by sale</option>
		</select>
	</div>
	
	 
<div class="row">

<?php
$n= mysqli_num_rows($result);
if ($n> 0) {	
$i=1;
while($row = mysqli_fetch_array($result) and $i<13) {
?>
<?php 
if($i%4!==0 ){
?>


	<div class="col-4" class="items">
		<form method="post"  action="box.php" name="form">
			<input type="hidden" name="product" value="<?php echo $row['id']; ?>" >
		 <button  style="cursor: pointer; background-color: transparent; border-width: 0;"><img src="<?php echo $row["img"]; ?>"  name="('<?php echo $row['id']; ?>')" /> </button><br /></form>
			<h4 id='namepr<?php echo $row["id"];?>'><?php echo $row["name"]; ?></h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>

			<p><?php echo $row["id"]; ?></p>
			<p><?php echo $row["price"]; ?></p>
			
		   
			<span id="divpr<?php echo $row["id"]; ?>" class="divpr">
			<button  id="pr<?php echo $row["id"]; ?>" class="btn cart" style="cursor: pointer; outline:none;"  >Add to Cart</button>
			</span>

			
	</div>

<?php
}
else{
?>
	<div class="col-4">
		<form method="post"  action="box.php" name="form">
			<input type="hidden" name="product" value="<?php echo $row['id']; ?>" >
		 <button  style="cursor: pointer; background-color: transparent; border-width: 0;"><img src="<?php echo $row["img"]; ?>" name= "('<?php echo $row['id']; ?>')" /> </button><br /></form>
			<h4 id='namepr<?php echo $row["id"];?>'> <?php echo $row["name"]; ?> </h4>
			<div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>

			<p><?php echo $row["id"]; ?></p>
			<p><?php echo $row["price"]; ?></p>
			<span id="divpr<?php echo $row["id"]; ?>" class="divpr">
			<button  id="pr<?php echo $row["id"]; ?>" class="btn cart" style="cursor: pointer; outline:none;" >Add to Cart</button>
			</span>

	</div>

</div>
</div>

<div class="small-container">
	
<div class="row">


<?php
}
?>
<?php
$i++;
}
?>
 <?php

}


else{
	echo "No result found";
}
?>
</div>

<div class="page-btn">
		<span>1</span>
		<span>2</span>
		<span>3</span>
		<span>4</span>
		<span>&#8594;</span>
	</div>
</div>


<button type="button" id = "popcart"class="btn btn-secondary mx-2" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
Cart (<span id="Cart">0</span>)

<script>
// Find out the cart items from localStorage
if (localStorage.getItem('cart') == null) {
    var cart = {};
} else {
    cart = JSON.parse(localStorage.getItem('cart'));
    updateCart(cart);
}
// If the add to cart button is clicked, add/increment the item
//$('.cart').click(function() {
$('.divpr').on('click', 'button.cart', function() {
    var idstr = this.id.toString();
    if (cart[idstr] != undefined) {
        qty = cart[idstr][0] + 1;
        
    } else {
        qty = 1;
        name = document.getElementById('name'+idstr).innerHTML
        cart[idstr] = [qty, name];

    }
    updateCart(cart);
});
//Add Popover to cart
$('#popcart').popover();
updatePopover(cart);

function updatePopover(cart) {
    console.log('We are inside updatePopover');
    var popStr = "";
    popStr = popStr + "<h5> Cart for your items in my shopping cart </h5><div class='mx-2 my-2'>";
    var i = 1;
    for (var item in cart) {
        popStr = popStr + "<b>" + i + "</b>. ";
        popStr = popStr + document.getElementById('name' + item).innerHTML.slice(0, 19) + "... Qty: " + cart[item][0] + '<br>';
        i = i + 1;
    }
    popStr = popStr + "</div> <a href='/shop/checkout'><button class='btn btn-primary' id ='checkout'>Checkout</button></a> <button class='btn btn-primary' onclick='clearCart()' id ='clearCart'>Clear Cart</button>     "
    console.log(popStr);
    document.getElementById('popcart').setAttribute('data-content', popStr);
    $('#popcart').popover('show');
}

function clearCart() {
    cart = JSON.parse(localStorage.getItem('cart'));
    for (var item in cart) {
        document.getElementById('div' + item).innerHTML = '<button id="' + item + '" class="btn btn-primary cart">Add To Cart</button>'
    }
    localStorage.clear();
    cart = {};
    updateCart(cart);
}

function updateCart(cart) {
    var sum = 0;
    for (var item in cart) {
        sum = sum + cart[item][0];
        document.getElementById('div' + item).innerHTML = "<button id='minus" + item + "' class='btn btn-secondary minus'>-</button> <span id='val" + item + "''>" + cart[item][0] + "</span> <button id='plus" + item + "' class='btn btn-secondary plus'> + </button>";
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    document.getElementById('cart').innerHTML = sum;
    console.log(cart);
    updatePopover(cart);
}
// If plus or minus button is clicked, change the cart as well as the display value
$('.divpr').on("click", "button.minus", function() {
    a = this.id.slice(7, );
    cart['pr' + a][0] = cart['pr' + a][0] - 1;
    cart['pr' + a][0] = Math.max(0, cart['pr' + a][0]);
    document.getElementById('valpr' + a).innerHTML = cart['pr' + a][0];
    updateCart(cart);
});
$('.divpr').on("click", "button.plus", function() {
    a = this.id.slice(6, );
    cart['pr' + a][0] = cart['pr' + a][0] + 1;
    document.getElementById('valpr' + a).innerHTML = cart['pr' + a][0];
    updateCart(cart);
});
</script>





<script>
	
	function getProduct(val) {
		var a= val;
		localStorage.setItem("myvalue",a);
		window.location.href="box.php";
	}
</script>
 </body>
</html>

