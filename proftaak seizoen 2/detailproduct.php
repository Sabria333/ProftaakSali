<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylesheet.css">

    <title>Product Details</title>
</head>
<body>
<style>
 
  </style>
<?php
  include "inc/nav.php";
  ?>
    <div class="container">
        <div class="box">
            <div class="images">
                <div class="img-holder active">
                    <img src="img/1.jpg">
                </div>
                <div class="img-holder">
                    <img src="img/2.jpg">
                </div>
                <div class="img-holder">
                    <img src="img/3.jpg">
                </div>
                <div class="img-holder">
                    <img src="img/1.jpg">
                </div>
            </div>
            <div class="basic-info">
                <h1>Headphone</h1>
                
                <span>$250</span>
                <div class="options">
                    <a href="#">Buy It Now</a>
                    <a href="#" class="btn" onclick="addToCart('Product 1', 49.99)">Add to Cart</a>
                    <label for="size">Size:</label>
                    <select id="size" name="size">
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>
            </div>
            <div class="description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus temporibus corporis repudiandae, consectetur nostrum nisi commodi placeat rerum molestias numquam nihil accusantium deleniti! Enim, nesciunt a quis amet hic officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nemo accusantium tempora facere doloremque cum iusto, ut neque, fuga omnis libero laborum ullam. At dolorum qui atque labore illo dignissimos.</p>
               
            </div>
        </div>
    </div>  <div class="cart" id="cart">
  <h2>Shopping Cart</h2>
  <div id="cart-items"></div>
  <div class="cart-total" id="cart-total"></div>
  <div class="buy-now-btn">
    <a href="order.php" class="btn" onclick="storeOrderSummary()">Buy Now</a>
  </div>
  <div class="cart-toggle" onclick="toggleCart()">&times;</div>
</div>
    <script src="main.js"></script>

</body>
</html>
