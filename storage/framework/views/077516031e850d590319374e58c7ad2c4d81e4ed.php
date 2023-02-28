<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FOODEA About Us</title>
    <link rel="stylesheet" type="text/css" href="css/about.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet" />
    <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</head>

<body>
    <div class="main-container">
    <div class="header">
    <!--- NAVBAR -->
    <nav class="navbar navbar-expand-lg px-2 mx -2 px-xs-3 px-md-4 px-lg-5 mx-xs-3 mx-md-4 mx-lg-5">
      <div class="container-fluid px-3">
        <a href="/" class="navbar-brand">
          <img src="image/foodea1.png" alt="" />
          <span>FOODEA</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-expanded= "false"
          aria-label= "Toggle Navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Foodea</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Services</a
                >
                <ul class="dropdown-menu">
                  <li><a href="/rider_landing" class="dropdown-item">Rider</a></li>
                  <li><a href="/partner_landing" class="dropdown-item">Partner</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="/about" class="nav-link active">About Us</a>
              </li>
              <li class="nav-item">
                <a href="/contact" class="nav-link">Contact Us</a>
              </li>
            </ul>
            <a
            href="/account_type"
            class="text-secondary mt-2 mx-5"
            style="text-decoration: none;">
              Signup
            </a>
            <a
              href="/login_type"
              class="btn btn-danger btn-sm py-2 px-5 rounded"
            >
              Login
        </a>
          </div>
        </div>
      </div>
    </nav>
    </div>
    <!-- END OF NAVBAR -->
    <div class="container">
      <!-- SECTION 1 -->
    <section class="d-flex intro">
      <div class="content pt-4 pb-2 py-xs-3 py-md-4 py-lg-5" data-aos="fade-up">
        <h1 class="text-center">Welcome to Foodea,<br>your ultimate food <br>recommendation app</h1>
      </div>
    </section>
    <!-- END SECTION 1 -->

    <!-- SECTION 2 -->
    <section class="section2" data-aos="fade-up">
        <div class="images2 d-flex flex-column flex-md-row align-items-center gap-5 py-4">
          <img src="image/about3.png" class="" alt="man riding">
          <p>Say goodbye to meal-time indecision with Foodea - the ultimate food recommendation app. Our state-of-the-art algorithm takes into account your dietary restrictions, favorite cuisines, and location to provide personalized meal suggestions.</p>
      </div>
    </section>
    <!-- END SECTION 2 -->

    <!-- SECTION 3 -->
    <section class="section3" data-aos="fade-up">
        <div class="images d-flex flex-column-reverse flex-md-row  align-items-center gap-3 gap-md-5 py-4">
          <p>Discover new dishes, save your favorites and earn rewards for trying new restaurants. Get the app now on Software Store or visit foodea.com for your next culinary adventure.</p>
          <img src="image/about2.png" class="img-fluid" alt="Delivering Order">
      </div>
    </section>
    <!-- END SECTION 3 -->

    <!-- SECTION 4 -->
    <section class="d-flex" data-aos="fade-up">
      <div class="content pt-4 pb-2 py-xs-3 py-md-4 py-lg-5">
        <h1 class="text-center">Lunch made easy<br>with just a tap</h1>
      </div>
    </section>
    <!-- SECTION 4 -->

    <!-- SECTION 5 -->
    <!-- TIMELINE -->
    <div class="timeline mx-auto">
      <div class="timeline-section">
        <div class="timeline-content" data-aos="fade-up">
          <ul>
              <li>
                <div>
                  <p><span>"Download"</span> Get the Foodea app on your phone, it's available on App Store and Google Play, and start your food journey with us.</p>
                </div>
          </li>
              <li>
                <div>
                  <p><span>"Check"</span> Check out personalized recommendations based on your preferences and location, and discover new dishes that you may not have otherwise considered.</p>
                </div>
              </li>
              <li>
                <div>
                  <p><span>"Order"</span> Order your favorite dishes with just a few clicks, no more waiting in lines or calling to place an order. Have your food delivered right to your doorstep with Foodea.
                  </p>
                </div>
              </li>
          </ul>
        </div>
    </div>
    </div>
    <!-- SECTION 5 -->
    <div class="container lastimage py-4 d-flex justify-content-center" data-aos="fade-up"><img src="image/about1.png" alt="calling"></div>
    </div>
    </div>

    <script src="dist/aos.js"></script>
    <script>
      document.querySelector('html').classList.remove('no-js');
      if (!window.Cypress) {
        const scrollCounter = document.querySelector('.js-scroll-counter');

        AOS.init({
          mirror: true
        });

        document.addEventListener('aos:in', function(e) {
          console.log('in!', e.detail);
        });

        window.addEventListener('scroll', function() {
          scrollCounter.innerHTML = window.pageYOffset;
        });
      }
    </script>

    <!-- FOOTER -->
    <div class="footer">
        <div class="footer-content py-4 py-md-5">
            <div class="icon pb-3 pb-md-0">
                <a href="/" class="icon text-decoration-none">
                <img src="image/foodea2.png" alt="">
                <h1 class="text-light">FOODEA</h1>
                </a>
                <p class="text-center">Follow Us</p>
            </div>
            <div class="join">
                <h2>Join Us</h2>
                <a href="/rider_landing" class="text-reset text-decoration-none">
                    <p>Register as Rider</p>
                </a>
                <a href="/partner_landing" class="text-reset text-decoration-none">
                    <p>Be a Partner</p>
                </a>
            </div>
            <div class="company">
                <h2>Our Company</h2>
                <a href="/about" class="text-reset text-decoration-none">
                    <p>About Us</p>
                </a>
                <a href="/contact" class="text-reset text-decoration-none">
                    <p>Contact Us</p>
                </a>
                <a href="/" class="text-reset text-decoration-none">
                    <p>Mission</p>
                </a>
                <a href="/" class="text-reset text-decoration-none">
                    <p>Vision</p>
                </a>
                <a href="/" class="text-reset text-decoration-none">
                    <p>Services</p>
                </a>
            </div>
            <div class="footer-section">
                <div class="inquire">
                    <h2>For inquiries:</h2>
                    <p>foodea@gmail.com</p>
                </div>
                <div class="legal">
                    <h2>Legal:</h2>
                    <p>Terms and Condition</p>
                    <p>Privacy Policy</p>
                </div>
            </div>
        </div>
    </div>
    <div class="dark-footer pt-3">
        <div class="dark-content m-auto text-center">
            <p class="">Copyright © 2022. All Rights Reserved</p>
        </div>
    </div>
    <!-- END FOOTER -->

    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
</body>

</html><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/about.blade.php ENDPATH**/ ?>