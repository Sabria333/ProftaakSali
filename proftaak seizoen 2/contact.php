<!DOCTYPE html>
<html>
<head>
  <title>Contact Us | Clothing Webshop</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>Contact Us</h1>

    <div class="contact-info">
      <h2>Address:</h2>
      <p>123 Main St</p>
      <p>Anytown, USA 12345</p>

      <h2>Phone:</h2>
      <p>1-800-123-4567</p>

      <h2>Email:</h2>
      <p>info@clothingwebshop.com</p>
    </div>

    <form action="/send-email" method="post" class="contact-form">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </main>

  <footer>
    <div class="footer-content">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/shopping">Shop</a></li>
        <li><a href="/contact">Contact Us</a></li>
      </ul>

      <ul class="social-icons">
        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </footer>
</body>
</html>
