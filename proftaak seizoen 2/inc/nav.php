<header>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="about.php">about</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li class="login"><a href="login.php">Log In</a></li>
      <li class="nav-cart">
        <a href="#" onclick="toggleCart()">
          <img src="img/cart.jpg" alt="Cart" class="cart-image">
          <span class="nav-cart-count" id="nav-cart-count">0</span>
        </a>
      </li>
    </ul>
  </nav>
</header>
<style>
  .cart-image {
    width: 25px; /* Adjust the width as per your requirement */
    height: 25px; /* Adjust the height as per your requirement */
  }
</style>
