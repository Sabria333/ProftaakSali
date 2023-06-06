<?php
require("inc/function.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["signup"]))
	{
		registerUser();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>register now | Clothing Webshop</title>
  <link rel="stylesheet" type="text/css" href="css/stylesignup.css">
 
</head>
<header><p>
    <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="login.php">log in</a></li>
	</p></header>
<body>
<?php

  ?>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>maak een Account</h1>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>registreren</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<h1>register</h1>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<input type="submit" name="signup" value="register">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welkom terug!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn"> log in</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>heeft u wel een account?</h1>
				<p>klik op de log in knop! </p>
                <a href="login.php">
				<button class="ghost" id="signUp">log in</button>
                </a>
            		</div>
	</div>
</div>


 
</body>
</html>
