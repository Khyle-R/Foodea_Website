<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FOODEA About Us</title>
    <link rel="stylesheet" type="text/css" href="css/about.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet" />
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
    <div class="main-container">
    <div class="header">
    <!--- NAVBAR -->
    <nav class="navbar navbar-expand-lg px-2 mx -2 px-xs-3 px-md-4 px-lg-5 mx-xs-3 mx-md-4 mx-lg-5">
      <div class="container-fluid px-3">
        <a href="#" class="navbar-brand">
          <img src="image/foodea1.png" alt="" />
          <span>FOODEA </span>
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
            href="/login"
            class="text-secondary mt-2 mx-5"
            style="text-decoration: none;">
              Signup
            </a>
            <a
              href="/login"
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
      <div class="content pt-4 pb-2 py-xs-3 py-md-4 py-lg-5">
        <h1 class="text-center">Welcome to Foodea,<br>your ultimate food <br>recommendation app</h1>
      </div>
    </section>
    <!-- END SECTION 1 -->

    <!-- SECTION 2 -->
    <section class="section2">
        <div class="images2 d-flex flex-column flex-md-row align-items-center gap-5 py-4">
          <img src="image/about3.png" class="" alt="man riding">
          <p>Say goodbye to meal-time indecision with Foodea - the ultimate food recommendation app. Our state-of-the-art algorithm takes into account your dietary restrictions, favorite cuisines, and location to provide personalized meal suggestions.</p>
      </div>
    </section>
    <!-- END SECTION 2 -->

    <!-- SECTION 3 -->
    <section class="section3">
        <div class="images d-flex flex-column-reverse flex-md-row  align-items-center gap-3 gap-md-5 py-4">
          <p>Discover new dishes, save your favorites and earn rewards for trying new restaurants. Get the app now on Software Store or visit foodea.com for your next culinary adventure.</p>
          <img src="image/about2.png" class="img-fluid" alt="Delivering Order">
      </div>
    </section>
    <!-- END SECTION 3 -->

    <!-- SECTION 4 -->
    <section class="d-flex">
      <div class="content pt-4 pb-2 py-xs-3 py-md-4 py-lg-5">
        <h1 class="text-center">Lunch made easy<br>with just a tap</h1>
      </div>
    </section>
    <!-- SECTION 4 -->

    <!-- SECTION 5 -->
    <!-- TIMELINE -->
    <div class="timeline mx-auto">
      <div class="timeline-section">
        <div class="timeline-content">
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
    <div class="container lastimage py-4 d-flex justify-content-center "><img src="image/about1.png" alt="calling"></div>
    </div>
    </div>
    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-content">
            <div class="icon">
                <img src="image/foodea2.png" alt="">
                <h1>FOODEA</h1>
                <p>Follow Us</p>
            </div>
            <div class="join">
                <h2>Join Us</h2>
                <p>Register as Rider</p>
                <p>Be a Partner</p>
            </div>
            <div class="company">
                <h2>Our Company</h2>
                <p>About Us</p>
                <p>Mission</p>
                <p>Vision</p>
                <p>Services</p>
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
        <div class="dark-footer">
        <div class="dark-content">
            <p>Copyright © 2022. All Rights Reserved</p>
        </div>
    </div>
    </footer>
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

</html>