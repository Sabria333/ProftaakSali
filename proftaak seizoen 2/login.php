<<<<<<< Updated upstream
<!DOCTYPE html>
<html>
<head>
  <title>Log In | Clothing Webshop</title>
  <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
 
</head>
<body>
<?php 

?>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Log in</h1>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
            			<button>log in</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welkom terug!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">log in</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>geen account?</h1>
				<p>klik om te registreren</p>
                <a href="signup.php">
				<button class="ghost" id="signUp">registreer</button>
                </a>
            		</div>
	</div>
</div>

<footer>
	<p>
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="signup.php">sign up</a></li>
	</p>
</footer>
</body>
</html>
=======
<?php 
include "inc/function.php";

handlePost();
dd($_POST);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Log In | Clothing Webshop</title>
  <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/shop.css">

</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="<?php echo getCurrentURL(); ?>" method="post">
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
			<input type="text" name="name" placeholder="Name" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit" name="signin">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="" method="post">
			<h1>Log in</h1>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit" name="login">Log in</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome back!</h1>
				<p>To keep connected with us, please login with your personal info</p>
				<button class="ghost" id="signIn">Log in</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>No account?</h1>
				<p>Click below to register</p>
                <a href="signup.php">
				    <button class="ghost" id="signUp">Register</button>
                </a>
            </div>
	    </div>
    </div>
</div>
<div class="cart" id="cart">
  <h2>Shopping Cart</h2>
  <div id="cart-items"></div>
  <div class="cart-total" id="cart-total"></div>
  <div class="buy-now-btn">
    <a href="order.php" class="btn" onclick="storeOrderSummary()">Buy Now</a>
  </div>
  <div class="cart-toggle" onclick="toggleCart()">&times;</div>
  <button onclick="resetCart()">Reset Cart</button>
    </div>
</body>
</html>
<script src="main.js"></script>
>>>>>>> Stashed changes
