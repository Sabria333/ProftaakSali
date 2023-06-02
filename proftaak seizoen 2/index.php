<!DOCTYPE html>
<html>
<head>
  <title> Home | Clothing Webshop</title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
<?php 
include "inc/nav.php";

?>
<main>
  <section class="hero">
  <img src="img/banner.jpg" alt="Girl in a jacket" >
        <a href="#" class="btn-index">Shop Now</a>
      </section>

      <section class="featured">
        <h2>Featured Products</h2>
        <div class="products">
          <div class="product">
            <img src="product1.jpg" alt="Product 1">
            <h3>Product 1</h3>
            <p>$49.99</p>
            <a href="#" class="btn">Add to Cart</a>
          </div>

          <div class="product">
            <img src="product2.jpg" alt="Product 2">
            <h3>Product 2</h3>
            <p>$29.99</p>
            <a href="#" class="btn">Add to Cart</a>
          </div>

          <div class="product">
            <img src="product3.jpg" alt="Product 3">
            <h3>Product 3</h3>
            <p>$19.99</p>
            <a href="#" class="btn">Add to Cart</a>
          </div>
        </div>
      </section>
      <section class="newsletter">
        <h2>Sign up for our Newsletter</h2>
        <form action="#" method="POST">
          <input type="email" name="email" placeholder="Enter your email">
          <button type="submit" class="btn">Subscribe</button>
        </form>
      </section>
    </main>
    <footer>
      <div class="footer-content">
        <ul>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Refund Policy</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>
<script src="main.js"></script>
