<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FOODEA</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
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
            {{-- <a
              href="/rider_application_agreement"
             class="text-secondary mt-2 mx-5"
              style="text-decoration: none;"
            >
              Signup
           </a> --}}
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
    
    
    <div class="section mx-auto my-5" data-aos="fade-up">
            <div class="content text-center text-md-start">
                <h1>Be The Fastest In Delivering Your <span>Food</span></h1>
                <p class="text-center text-md-start">Our job filling your tummy with delicious food and with fast delivery</p>
                <a class="partnerbtn text-decoration-none" href="/partner_landing">Partner with us</a>
            </div>
        <div class="image">
            <img src="image/food.png" alt=""></div>
        </div>
    <div class="container pt-0">
        <div class="section-2">
            <div class="service">
                <div class="rider" data-aos="fade-up">
                    <img src="image/rider.PNG" alt="">
                    <h3>Become a Rider</h3>
                    <p>As a delivery driver, you'll make reliable money working anytime, anywhere.</p>
                    <a href="/rider_landing">Start earning</a>
                </div>
                <div class="market" data-aos="fade-up">
                    <img src="image/market.PNG" alt="">
                    <h3>Become a Partner</h3>
                    <p>Grow your business and reach new customers by partnering with us.</p>
                    <a href="/partner_landing">Sign up you store</a>
                </div>
                <div class="phone" data-aos="fade-up">
                    <img src="image/phone.PNG" alt="">
                    <h3>Try the App</h3>
                    <p>Experience the best your neighborhood has to offer, all in one app.</p>
                    <a href="#">Get the app</a>
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
</html>