<!DOCTYPE html>
<html>
<head>
  <title>Shop - My Clothing Store</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <style>
    .cart {
      position: fixed;
      top: 0;
      right: -400px;
      width: 400px;
      height: 100%;
      background-color: white;
      padding: 20px;
      box-sizing: border-box;
      transition: right 0.3s ease-in-out;
    }

    .cart.open {
      right: 0;
    }

    .cart-item {
      display: flex;
      justify-content: space-between;
    }

    .cart-total {
      margin-top: 20px;
      font-weight: bold;
    }

    .cart-toggle {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 24px;
      cursor: pointer;
    }

    .buy-now-btn {
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <?php
  include "inc/nav.php";
  ?>
  <main>
    <section class="featured">
      <h2>Featured Products</h2>
      <div class="products">
        <div class="product">
          <img src="img/1.jpg" alt="Girl in a jacket" >
          <h3>Product 1</h3>
          <p>$49.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 1', 49.99)">Add to Cart</a>
        </div>

        <div class="product">
          <img src="img/2.jpg" alt="Girl in a jacket" >
          <h3>Product 2</h3>
          <p>$29.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 2', 29.99)">Add to Cart</a>
        </div>

        <div class="product">
          <img src="img/3.jpg" alt="Girl in a jacket" >
          <h3>Product 3</h3>
          <p>$19.99</p>
          <a href="#" class="btn" onclick="addToCart('Product 3', 19.99)">Add to Cart</a>
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
</div>
  <script>
    let cartItems = [];
    const cartElement = document.getElementById('cart');
    const cartToggleElement = document.querySelector('.cart-toggle');

    function addToCart(productName, price) {
      const cartItem = {
        name: productName,
        price: price
      };

      cartItems.push(cartItem);
      updateCart();
      toggleCart();
    }

    function updateCart() {
      const cartItemsElement = document.getElementById('cart-items');
      cartItemsElement.innerHTML = '';
      
      let totalPrice = 0;

      cartItems.forEach(function(item) {
        const itemElement = document.createElement('div');
        itemElement.className = 'cart-item';
        itemElement.innerHTML = `<span>${item.name} - $${item.price}</span><button onclick="removeFromCart('${item.name}')">Remove</button>`;
        cartItemsElement.appendChild(itemElement);

        totalPrice += item.price;
      });

      const cartTotalElement = document.getElementById('cart-total');
      cartTotalElement.textContent = `Total: $${totalPrice.toFixed(2)}`;
    }

    function removeFromCart(productName) {
      cartItems = cartItems.filter(function(item) {
        return item.name !== productName;
      });

      updateCart();
    }

    function toggleCart() {
      cartElement.classList.toggle('open');
    }

    function storeOrderSummary() {
    let orderSummary = '';
    let totalPrice = 0;

    cartItems.forEach(function(item) {
      orderSummary += `${item.name} - $${item.price.toFixed(2)}<br>`;
      totalPrice += item.price;
    });

    localStorage.setItem('orderSummary', orderSummary);
    localStorage.setItem('orderTotal', totalPrice.toFixed(2));
  
  }
  </script>
</body>
</html>
