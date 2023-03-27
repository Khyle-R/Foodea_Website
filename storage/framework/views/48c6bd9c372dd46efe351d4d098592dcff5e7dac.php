<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FOODEA</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" href="css/carousel.css">
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
    <!--- NAVBAR -->
    <nav class="navbar navbar-expand-lg px-2 mx -2 px-xs-3 px-md-4 px-lg-5 mx-xs-3 mx-md-4 mx-lg-5">
      <div class="container-fluid px-3">
        <a href="#" class="navbar-brand mb-0 h1">
          <img src="image/foodea1.png" alt=""/>
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
                <a href="/" class="nav-link active">Home</a>
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
                <a href="/about" class="nav-link">About Us</a>
              </li>
              <li class="nav-item">
                <a href="/contact" class="nav-link">Contact Us</a>
              </li>
            </ul>
            
            <a
              href="/rider_login"
              class="btn btn-danger btn-sm py-2 px-5 rounded"
            >
              Login
        </a>
          </div>
        </div>
      </div>
    </nav>
    
    <!-- CAROUSEL -->
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      
      <div class="carousel-inner">
        <!---------ONE----------->
        <div class="carousel-item active c-item">
          <div class="carousel-caption d-flex justify-content-center align-items-center top-0 mt-2 mt-md-5">
            <div class="section mb-2 mb-md-5" data-aos="fade-up">
              <div class="content text-center text-md-start">
                  <h1>Revolutionize The Way You Order<span> Food</span></h1>
                  <p class="text-center text-md-start text-dark">Revolutionize your food orders with personalized recommendations and faster, hassle-free delivery.</p>
                  <a class="partnerbtn text-decoration-none" href="/partner_landing">Order Now</a>
              </div>
              <div class="image">
                <img src="image/Userbg.png" alt=""></div>
            </div>
          </div>
        </div>
        <!---------TWO----------->
        <div class="carousel-item c-item">
          <div class="carousel-caption d-flex justify-content-center align-items-center top-0 mt-2 mt-md-5">
            <div class="section mb-2 mb-md-5" data-aos="fade-up">
              <div class="content text-center text-md-start">
                  <h1>Deliver Food with<span> Foodea</span></h1>
                  <p class="text-center text-md-start text-dark">Try becoming your own boss with Foodea as an alternative to conventional food delivery professions where the hours are fixed.</p>
                  <a class="partnerbtn text-decoration-none" href="/rider_application_agreement">Join as Foodea Rider</a>
              </div>
              <div class="imageOne">
                <img src="image/food.png" alt=""></div>
            </div>
          </div>
        </div>
        <!---------THREE----------->
        <div class="carousel-item c-item">
          <div class="carousel-caption d-flex justify-content-center align-items-center top-0 mt-2 mt-md-5">
            <div class="section mb-2 mb-md-5" data-aos="fade-up">
              <div class="content text-center text-md-start">
                  <h1>Grow your Business with <span>Foodea</span></h1>
                  <p class="text-center text-md-start text-dark">Expand your business by bringing your food out and filling up your customers tummy and reach new customers by partnering with us.</p>
                  <a class="partnerbtn text-decoration-none" href="/rider_application_agreement">Partner With Us</a>
              </div>
              <div class="imageTwo">
                <img src="image/market2.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>   
      <!-- PREVIOS -->
      <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <!-- NEXT -->
      <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- END OF CAROUSEL -->
    <div class="container pt-3">
        <div class="section-2">
            <div class="service">
                <div class="rider" data-aos="fade-up">
                    <img src="image/rider.PNG" alt="">
                    <h3>Become a Rider</h3>
                    <p>As a delivery driver, you'll make reliable money working anytime, anywhere.</p>
                    
                </div>
                <div class="market" data-aos="fade-up">
                    <img src="image/market.PNG" alt="">
                    <h3>Become a Partner</h3>
                    <p>Grow your business and reach new customers by partnering with us.</p>
                    
                </div>
                <div class="phone" data-aos="fade-up">
                    <img src="image/phone.PNG" alt="">
                    <h3>Try the App</h3>
                    <p>Experience the best your neighborhood has to offer, all in one app.</p>
                    
                </div>
            </div>
        </div>


        <div class="info-section" data-aos="fade-up">
            <div class="image2">
                <img src="image/eating.png" alt="">
            </div>
            <div class="delivery">
                <h3>Pickup or delivery from restaurants near you</h3>
                <p>Explore restaurants that deliver near you, it’s easy to find food you crave, and order online or
                    through the Foodea app. Find great meals fast with lots of menus to choose from. Enjoy eating the
                    convenient way with places that deliver to your door.</p>
            </div>
        </div>
    </div>

    <!---CAROUSEL-->
    <div class="container" data-aos="fade-up">
        <h2>Our Partners</h2>
        <section class="customer-logos slider">
            <div class="slide"><img src="image/jollibee.png" alt="logo" /></div>
            <div class="slide"><img src="image/angel.png" alt="logo" /></div>
            <div class="slide"><img src="image/mcdo.png" alt="logo" /></div>
            <div class="slide"><img src="image/domino.png" alt="logo" /></div>
            <div class="slide"><img src="image/wendy.png" alt="logo" /></div>
            <div class="slide"><img src="image/sarsa.png" alt="logo" /></div>
            <div class="slide"><img src="image/potle.png" alt="logo" /></div>
            <div class="slide"><img src="image/king.png" alt="logo" /></div>
        </section>
    </div>

    <!---ACOORDION-->
    <div class="container2">
        <div class="accor-title" data-aos="fade-up">
            <h2>FAQs</h2>
            <p>Frequently Ask Questions</p>
        </div>
        <div class="wrapper" data-aos="fade-up">
            <button class="toggle">
                What is Foodea?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                    FOODEA is a mobile application that provides food suggestions and ordering options, with a 
                    focus on supporting small businesses and promoting healthy eating habits.
                </p>
            </div>
        </div>
        <div class="wrapper" data-aos="fade-up">
            <button class="toggle">
                How does FOODEA support small food businesses?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                    FOODEA partners with local merchants to offer their products on the app, 
                    giving them increased visibility and access to a wider customer base.
                </p>
            </div>
        </div>
        <div class="wrapper" data-aos="fade-up">
            <button class="toggle">
                Can FOODEA suggest healthy food options?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                    Yes, FOODEA can suggest healthy and nutritional foods based on a user's 
                    weight goals and dietary preferences.
                </p>
            </div>
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
                <a href="/mission" class="text-reset text-decoration-none">
                    <p>Mission</p>
                </a>
                <a href="/vision" class="text-reset text-decoration-none">
                    <p>Vision</p>
                </a>
                <a href="/service" class="text-reset text-decoration-none">
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
                    <a href="/terms_condition" class="text-reset text-decoration-none">
                      <p>Terms and Condition</p>
                    </a>
                    <a href="/privacy" class="text-reset text-decoration-none">
                      <p>Privacy Policy</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="dark-footer pt-3">
        <div class="dark-content m-auto text-center">
            <p class="">Copyright © 2022. All Rights Reserved</p>
        </div>
    </div>
    </div>
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <script>
        $(document).ready(function () {
            $(".customer-logos").slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1100,
                arrows: true,
                dots: false,
                pauseOnHover: false,
                
                responsive: [{
                        breakpoint: 700,
                        setting: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 520,
                        setting: {
                            slidesToShow: 3,
                        }
                    },
                ],
            });
        });
    </script>
</body>
</html><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/index.blade.php ENDPATH**/ ?>