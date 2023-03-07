<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FOODEA Partner Merchant</title>
    <link rel="stylesheet" type="text/css" href="css/partner_landing.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet" />
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg px-2 mx -2 px-xs-3 px-md-4 px-lg-5 mx-xs-3 mx-md-4 mx-lg-5">
      <div class="container-fluid px-3">
        <a href="/" class="navbar-brand mb-0 h1">
          <img src="image/foodea1.png" alt=""/>
          <span> FOODEA </span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
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
                  class="nav-link dropdown-toggle active"
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
              href="/rider_application_agreement"
              class="text-secondary mt-2 mx-5"
              style="text-decoration: none;"
            >
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
        <!-- SECTION 1 -->
        <div class="context-one mx-auto" data-aos="fade-up">
        <div class="row container mx-auto px-5 align-items-center g-0">
        <div class="col-12 col-md-7 col-lg-6">
                <div class="content text-center text-md-start d-flex flex-column align-items-center align-items-md-start pt-4 pt-md-5">
                    <h1>Grow your business with<span> Foodea</span></h1>
                    <p class="text-center text-md-start">Expand your business by bringing your food out and filling up your customers tummy and reach new customers by partnering with us.</p>
                    <a href="/merchant_application_agreement" class="text-decoration-none">Apply Now</a>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-6">
                    <img class="image1 d-none d-md-block" src="image/market2.png" alt="">
            </div>
        </div>
        </div>
        <!-- END OF SECTION 1 -->
        <!-- SECTION 2 -->
        <div class="context-two mx-auto my-4 my-md-5" data-aos="fade-up">
        <div class="row container mx-auto px-5 align-items-center justify-content-start g-5">
            <div class="col-12 col-md-4 col-lg-4">
            <div class="rider">
                    <img class = "img-fluid" src="image/attract.png" alt="">
                    <h3>Attract customers</h3>
                    <p>Reach people in your local area and grow sales</p>
            </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
            <div class="market">
                    <img class = "img-fluid" src="image/customer.png" alt="">
                    <h3>Turn customers into regulars</h3>
                    <p>Keep customers ordering again and again and show people you’re listening by responding to reviews</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
            <div class="phone">
                    <img class = "img-fluid" src="image/monitor.png" alt="">
                    <h3>Run your business on your terms</h3>
                    <p>Dig into your data anytime to monitor your performance and customer order trends</p>
            </div>
            </div>
        </div>
        </div>
        <!-- END OF SECTION 2 -->
        
    <!-- SECTION 3 -->
    <div class="context-three my-4 my-md-5 pt-3 pt-md-5" data-aos="fade-up">
        <div class="step-title mb-5">
          <h2>Get Started</h2>
        </div>
        <div data-aos="fade-up">
            <div class="row container mx-auto align-items-center gap-0">
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="d-flex flex-column justify-content-between align-items-center gap-5">
                        <div class="d-flex flex-row">
                            <div class="stepone d-flex flex-end flex-column text-end">
                                <h2>STEP 1:</h2>
                                <p>Sign-Up online to be a Foodea partner.</p>
                            </div>
                            <div class="step1-image">
                                <img src="image/signup.png" alt="">
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="steptwo d-flex flex-end flex-column text-end">
                                <h2>STEP 2:</h2>
                                <p>Sign-Up online to be a Foodea partner.</p>
                            </div>
                            <div class="step1-image">
                                <img src="image/signup.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img class="img-fluid" src="image/mer.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <div class="d-flex flex-column justify-content-between  align-items-start gap-5">
                <div class="d-flex flex-row gap-3">
                            <div class="step1-image">
                                <img src="image/signup.png" alt="">
                            </div>
                            <div class="stepthree d-flex flex-column">
                                <h2>STEP 3:</h2>
                                <p>Verification of details and final approval.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-3">
                            <div class="step1-image">
                                <img src="image/signup.png" alt="">
                            </div>
                            <div class="stepfour d-flex flex-column">
                                <h2>STEP 4:</h2>
                                <p>Your are now part of Foodea.</p>
                            </div>
                        </div>  
                </div>
            </div>
        </div>
        </div>
    </div>

    
    <div class="req-container my-3 my-md-5 mb-5">
        <div class="req-section">
            <div class="row section-last" data-aos="fade-up">
                <h2 class="text-center mb-4 text-md-center">Get your documents ready</h2>
                <p class="mb-3 mb-md-5 section-text">You can find the required documents as below. Please ensure that the 
                    following documents are original or else your application will be rejected.
                     Upload only a scanned copy and images of the following documents to avoid document information 
                     being reflective and blurred.</p>
                <div class="col-0 col-md-6 col-lg-6">
               <div class="req-image">
                            <img src="/image/requirements.png" alt="">
                        </div>
                    </div>
             <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="req-content">
                <ul class="accordion">
                
                 <li>
                    <input type="radio" name="accordion" id="first" checked/>
                     <label for="first">Clear copy of your menu</label>
                     <div class="content">
                      <img src="/image/menu_sample.png" alt="">

                    </div>
                    </li>
                    <li>
                        <input type="radio" name="accordion" id="second" />
                        <label for="second">Business Permit</label>
                        <div class="content">
                        <img src="/image/business_permit.png" alt="">
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="accordion" id="third" />
                        <label for="third">BIR Certificate</label>
                        <div class="content">
                         <img src="/image/BIR.png" alt="">
                        </div>
                    </li>
                     <li>
                        <input type="radio" name="accordion" id="fourth" />
                        <label for="fourth">Barangay Permit</label>
                        <div class="content">
                         <img src="/image/barangay_permit.png" alt="">
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="accordion" id="fifth" />
                        <label for="fifth">DTI Certificate</label>
                        <div class="content">
                        <img src="/image/DTI.png" alt="">
                        </div>
                    </li>
                    <li>
                        <input type="radio" name="accordion" id="sixth" />
                        <label for="sixth">Valid Government issued ID</label>
                        <div class="content">
                            <p>Types of valid ID (Driver's license, Passport, SSS ID, Postal ID, Voter ID)</p>
                         <img src="/image/ID.png" alt="">
                        </div>
                    </li>
                    </ul>
                    </div>
                    </div>
                            </div>
                            </div>
                    </div>
                
    <!---Requirements Accordion-->
  

    <!---ACOORDION-->
    <div class="container2 my-3 py-3 my-md-5 py-md-5">
        <div class="accor-title" data-aos="fade-up">
            <h2>FAQs</h2>
            <p>Frequently Ask Questions</p>
        </div>
        <div class="wrapper" data-aos="fade-up">
            <button class="toggle">
                What is a FOODEA merchant?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                    A FOODEA merchant is a local business that partners with FOODEA to offer their food products on the app.

                </p>
            </div>
        </div>
        <div class="wrapper" data-aos="fade-up">
            <button class="toggle">
                How do I become a FOODEA merchant?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                    To become a FOODEA merchant, you can visit the Merchant Page on the FOODEA
                     website for more information on the application process.

                </p>
            </div>
        </div>
        <div class="wrapper" data-aos="fade-up">
            <button class="toggle">
                What are the benefits of partnering with FOODEA as a merchant?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                    Partnering with FOODEA can provide increased visibility and access to a wider customer base, 
                    as well as potential opportunities for marketing and promotions.
                </p>
            </div>
        </div>
        <div class="wrapper" data-aos="fade-up">
            <button class="toggle">
                What are the requirements to partner with FOODEA as a merchant?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                    The requirements to partner with FOODEA as a merchant may vary by location, but typically include compliance with food safety
                     regulations and a willingness to provide high-quality products and customer service.
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