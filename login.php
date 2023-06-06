<!DOCTYPE html>
<html>
<head>
  <title>Log In | Clothing Webshop</title>
  <link rel="stylesheet" type="text/css" href="stylelogin.css">
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
