<!DOCTYPE html>
<html>
<head>
	<title>Shop - My Clothing Store</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
	<?php
	include "inc/nav.php";
	?>
	<h1>My Clothing Store</h1>
	<main>
		<h2>Shop</h2>
		<ul class="product-list">
			<li class="product">
				<img src="img/foursweat.jpg" alt="Product 1">
				<h3>Product 1</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget libero ut nunc molestie cursus. Duis malesuada arcu ac felis euismod, ut laoreet velit maximus.</p>
				<span class="price">$29.99</span>
				<button>Add to Cart</button>
			</li>
			<li class="product">
				<img src="img/foursweater.jpg.jfif" alt="Product 2">
				<h3>Product 2</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget libero ut nunc molestie cursus. Duis malesuada arcu ac felis euismod, ut laoreet velit maximus.</p>
				<span class="price">$39.99</span>
				<button>Add to Cart</button>
			</li>
			<li class="product">
				<img src="product3.jpg" alt="Product 3">
				<h3>Product 3</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget libero ut nunc molestie cursus. Duis malesuada arcu ac felis euismod, ut laoreet velit maximus.</p>
				<span class="price">$49.99</span>
				<button>Add to Cart</button>
			</li>
		</ul>
	</main>
	<footer>
		<div class="footer-content">
			<p>&copy; My Clothing Store 2023</p>
			<ul class="social-icons">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</footer>
</body>
</html>
