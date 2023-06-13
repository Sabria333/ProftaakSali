<?php 
include "inc/function.php";

$products = getProducts();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Shop - My Clothing Store</title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="css/shop.css">
</head>
<body>

  <main>
    <section class="featured">
      <h2>Featured Products</h2>
      <div class="products">
      <?php

      foreach($products as $product)
      {
        ?>
        <div class="product">
          <a href="detailproduct.php?productId=<?php echo $product['productId']; ?>" target="_blank">
          <img src="img/<?php echo $product['productImage']; ?>" alt="<?php echo $product['productTitle']; ?>">
          </a>          
          <h3><?php echo $product['productTitle']; ?></h3>
          <p>$ <?php echo $product['productPrice']; ?></p>
          <a href="#" class="btn" onclick="addToCart(<?php echo $product['productTitle']?>, <?php echo $product['productPrice']?>)">Add to Cart</a>
        </div>
        <?php
      }
      
      
      ?>
      
      <!-- <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/redsweat.jpg.jfif" alt="Girl in a jacket">
</a>          <h3>Shirt</h3>
          <p>$49.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 1', 49.99)">Add to Cart</a>
        </div>

        <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/foursweat.jpg.jfif" alt="four sweater">
</a>          <h3>schoenen</h3>
          <p>€49.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 2', 49.99)">Add to Cart</a>
        </div>

        <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/foursweater.jpg.jfif" alt="four sweater">
</a>          <h3>muts</h3>
          <p>€49.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 3', 49.99)">Add to Cart</a>
        </div>

        <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/foursweater.jpg.jfif" alt="four sweater">
</a>          <h3>onderbroek</h3>
          <p>€49.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 4', 49.99)">Add to Cart</a>
        </div>

        <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/1.jpg" alt="Girl in a jacket">
</a>          <h3>sandalen</h3>
          <p>€49.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 5', 49.99)">Add to Cart</a>
        </div>

        <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/1.jpg" alt="Girl in a jacket">
</a>          <h3>BH</h3>
          <p>€49.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 6', 49.99)">Add to Cart</a>
        </div>

        <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/1.jpg" alt="Girl in a jacket">
</a>          <h3>bril</h3>
          <p>€49.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 7', 49.99)">Add to Cart</a>
        </div>

        <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/1.jpg" alt="Girl in a jacket">
</a>          <h3>ketting</h3>
          <p>€49.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 8', 49.99)">Add to Cart</a>
        </div>

        <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/1.jpg" alt="Girl in a jacket">
</a>          <h3>laarzen</h3>
          <p>€49.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 9', 49.99)">Add to Cart</a>
        </div>

        <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/1.jpg" alt="Girl in a jacket">
</a>          <h3>Trui</h3>
          <p>€49.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 10', 49.99)">Add to Cart</a>
        </div>

        <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/2.jpg" alt="Girl in a jacket">
</a>
          <h3>Bloes</h3>
          <p>€29.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 11', 29.99)">Add to Cart</a>
        </div>

        <div class="product">
        <a href="detailproduct.php" target="_blank">
  <img src="img/3.jpg" alt="Girl in a jacket">
</a>          <h3>handschoen</h3>
          <p>€19.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 12', 19.99)">Add to Cart</a>
        </div> -->
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
      <p>&copy; My Clothing Store 2023</p>
      <ul class="social-icons">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
  </footer>

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
