<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Home | Clothing Webshop</title>
  <link rel="stylesheet" href="css/stylesheet.css">
  <script src="js/script.js" defer></script>
  <script src="js/main.js" defer></script>
</head>

<body>
  <section>
    <div class="navoffer">
      <p>Get 10% of your first offer. Sign up to our newsletter!</p>
    </div>
  </section>
  </section>
  <?php
  include "inc/nav.php";
  ?>
  <main>
    <section aria-label="Newest Photos">
      <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
        <button class="carousel-button next" data-carousel-button="next">&#8658;</button>

        <ul data-slides>
          <li class="slide" data-active>
            <img src="img/kleding.jpg" alt="">
          </li>
          <li class="slide">
            <img src="img/fear.jpg" alt="">
          </li>
          <li class="slide">
            <img src="img/clothing3.jpg" alt="">
          </li>
        </ul>
      </div>
    </section>

    <!-- <section class="hero">
      <img src="img/index.jpg" alt="">
      <h1 class="indexword">Welcome to our Clothing Webshop</h1>
      <p>Shop for the latest fashion trends and styles</p>
      <a href="#" class="btnshop">Shop Now</a>
    </section> -->

    <section>
      <h2>Categories</h2>
      <div class="gridcategories">
        <div class="categorie">
          <h3>SHIRTS</h3>
        </div>
        <div class="categorie">
          <h3>SWEATERS</h3>
        </div>
        <div class="categorie">
          <h3>HOODIES</h3>
        </div>
        <div class="categorie">
          <h3>TRACKSUITS</h3>
        </div>
        <div class="categorie">
          <h3>FOOTWEARS</h3>
        </div>
        <div class="categorie">
          <h3>ACCESSORIES</h3>
        </div>

      </div>
    </section>

    <section class="featured">
      <h2>Meest verkochten producten</h2>
      <div class="products">
        <div class="product">
          <img src="img/foursweat.jpg.jfif" alt="Product 1">
          <h3>Sweater Black</h3>
          <p>€89.99</p>
          <a href="#" class="btn">Toevoegen aan het winkelmandje</a>
        </div>
        <div class="product">
          <img src="img/foursweater.jpg.jfif" alt="Product 2">
          <h3>Sweater Blue</h3>
          <p>€99.99</p>
          <a href="#" class="btn">Toevoegen aan het winkelmandje</a>
        </div>
        <div class="product">
          <img src="img/redsweat.jpg.jfif" alt="Product 3">
          <h3>Sweater Red</h3>
          <p>€89.99</p>
          <a href="#" class="btn">Toevoegen aan het winkelmandje</a>
        </div>
      </div>
    </section>
    <!--BLOG stuk-->
    <div class="blogcontainer">
      <div class="blogcard">
        <div class="blogcard__header">
          <img src="img/fourtje.jpg.jfif" alt="card__image" class="blogcard__image" width="500" height="300">
        </div>
        <div class="blogcard__body">
          <span class="blogtag tag-blue">SALI</span>
          <h4>What's new in 2023 Sali's collection</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
        </div>
        <div class="blogcard__footer">
          <div class="bloguser">
            <div class="bloguser__info">
              <h5>Sabria El Khadir</h5>
              <small>2h ago</small>
            </div>
          </div>
        </div>
      </div>
      <div class="blogcard">
        <div class="blogcard__header">
          <img src="img/productf.jpg" alt="card__image" class="blogcard__image" width="500" height="300">
        </div>
        <div class="blogcard__body">
          <span class="blogtag tag-brown">SALI</span>
          <h4>Newest trends</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
        </div>
        <div class="blogcard__footer">
          <div class="bloguser">
            <div class="bloguser__info">
              <h5>Sabria El Khadir</h5>
              <small>Yesterday</small>
            </div>
          </div>
        </div>
      </div>
      <div class="blogcard">
        <div class="blogcard__header">
          <img src="img/daily.jpg" alt="card__image" class="blogcard__image" width="500" height="300">
        </div>
        <div class="blogcard__body">
          <span class="blogtag tag-red">SALI</span>
          <h4>Race to your heart content</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
        </div>
        <div class="blogcard__footer">
          <div class="bloguser">
            <div class="bloguser__info">
              <h5>Sabria El Khadir</h5>
              <small>2d ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="newsletter">
      <h2 class="h2abbo">Be part of the family</h2>
      <p class="pabbo">Sign up for our newsletter and receive 10% discount on your first order!</p>
      <form action="#" method="POST">
        <input type="email" name="email" placeholder="Enter your email">
        <button type="submit" class="btn">Abonneer</button>
      </form>
    </section>
  </main>
</body>
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

</html>
