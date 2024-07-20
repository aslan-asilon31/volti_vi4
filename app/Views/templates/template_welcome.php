<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Volti - Book Your Eco-Friendly Ride</title>
  <meta name="title" content="Volti - Book Your Eco-Friendly Ride">
  <meta name="description" content="This is a vahicle charging html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="<?= base_url('volti_assets/favicon.svg'); ?>" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="<?= base_url('volti_assets/css/style.css'); ?>">

  <!-- 
    - custom font link
  -->
  <link rel="stylesheet" href="<?= base_url('volti_assets/font/font.css'); ?>">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="<?= base_url('volti_assets/images/loading.svg'); ?>">
  <link rel="preload" as="image" href="<?= base_url('volti_assets/images/loading-circle.svg'); ?>">
  <link rel="preload" as="image" href="<?= base_url('volti_assets/images/hero-banner.png'); ?>">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class=" preload-box" data-preloader>
    <img src="<?= base_url('volti_assets/images/loading.svg'); ?>" width="45" height="45" alt="loading">

    <img src="<?= base_url('volti_assets/images/loading-circle.svg'); ?>" width="75" height="75" alt="loading" class="preload-circle">
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="<?= base_url('volti_assets/images/logo.svg'); ?>" width="160" height="50" alt="volti home">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Products</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Services</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Gallery</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Blog</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link">Contact Us</a>
          </li>

        </ul>
      </nav>

      <div class="header-action">

        <a href="tel:+12312345678901" class="contact-number">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

          <span class="span">+(123) 1234-567-8901</span>
        </a>

        <a href="#" class="btn btn-primary">
          <span class="span">Get a quote</span>

          <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
        </a>

      </div>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="open"></ion-icon>
        <ion-icon name="close-outline" aria-hidden="true" class="close"></ion-icon>
      </button>

    </div>
  </header>





  <main>
    <?= $this->renderSection('content') ?>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top section" data-reveal>

        <div class="newsletter-card">

          <div class="card-icon">
            <ion-icon name="mail-unread-outline" aria-hidden="true"></ion-icon>
          </div>

          <h3 class="h3 card-title">Sign up for Electric Car,news & inslights</h3>

          <form action="#" class="newsletter-form">

            <label for="email" class="label">Email address</label>

            <input type="emal" name="email" id="email" placeholder="Email address" required class="email-field">

            <button type="submit" class="btn btn-primary">Subscribe</button>

          </form>

        </div>

        <div class="footer-list">

          <p class="h6 has-after">Volti WP Theme</p>

          <p class="footer-text">
            A leading developer of A-grade commercial, electric car and bike projects in USA. Since its foundation the
            company has doubled its turnover year on year, with its staff numbers.
          </p>

          <a href="#" class="btn-outline">
            <span class="span">Get a quote</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

        </div>

        <ul class="footer-list">

          <li>
            <p class="h6 has-after">Company Info</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Our Projects</a>
          </li>

          <li>
            <a href="#" class="footer-link">Meet Our Team</a>
          </li>

          <li>
            <a href="#" class="footer-link">News & Media</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Careers</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="h6 has-after">Quick Contact</p>
          </li>

          <li>
            <address class="footer-text">
              2307 Beverley Rd Brooklyn, New York 11226 United States.
            </address>
          </li>

          <li>
            <p class="footer-text">
              If you have any questions or need help, feel free to contact with our team.
            </p>
          </li>

          <li>
            <a href="tel:00201061245741" class="contact-link">(002) 01061245741</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <div>
          <ul class="footer-bottom-list">

            <li>
              <a href="#" class="footer-bottom-link">Where to Find Us</a>
            </li>

            <li>
              <a href="#" class="footer-bottom-link">Terms of Payment</a>
            </li>

            <li>
              <a href="#" class="footer-bottom-link">Stats Element</a>
            </li>

          </ul>

          <p class="copyright">Made with love @codewithsadee</p>
        </div>

        <img src="<?= base_url('volti_assets/images/footer-logo.svg'); ?>" width="100" height="63" loading="lazy" alt="Volti home">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin" aria-hidden="true"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="go to top" data-go-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="<?= base_url('volti_assets/js/script.js'); ?>"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>