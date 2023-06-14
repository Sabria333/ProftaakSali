<!DOCTYPE html>
<html>
<head>
  <title>Log In | Clothing Webshop</title>
  <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>
<body>
<?php 
include "inc/function.php";
include "inc/nav.php";

?>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="inc/function.php" method="post">
			<h1>Create Account</h1>
			<span>or use your email for registration</span>
			<input type="text" name="name" placeholder="Name" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="" method="post">
			<h1>Log in</h1>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit">Log in</button>
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

</body>
</html>
