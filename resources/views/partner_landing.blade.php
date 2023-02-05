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
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg px-2 mx -2 px-xs-3 px-md-4 px-lg-5 mx-xs-3 mx-md-4 mx-lg-5">
      <div class="container-fluid px-3">
        <a href="/" class="navbar-brand mb-0 h1">
          <img src="image/foodea1.png" alt=""/>
          FOODEA
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
                <a href="/landing" class="nav-link">Contact Us</a>
              </li>
            </ul>
            <a
              href="/login"
              class="text-secondary mt-2 mx-5"
              style="text-decoration: none;"
            >
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
        <div class="section">
            <div class="content">
                <h1>Grow your business with <span>Foodea</span></h1>
                <p>Expand your business by bringing your food out and filling up your customers tummy and reach new customers by partnering with us.</p>
                <a href="/merchant_application_agreement">Apply Now </a>
                {{-- <img src="image/vector.png" /> --}}
            </div>
            <div class="image">
                <img src="image/market2.png" alt="">
            </div>
        </div>

        <div class="section-2">
            <div class="service">
                <div class="rider">
                    <img src="image/attract.png" alt="">
                    <h3>Attract customers</h3>
                    <p>Reach people in your local area and grow sales</p>
                </div>
                <div class="market">
                    <img src="image/customer.png" alt="">
                    <h3>Turn customers into regulars</h3>
                    <p>Keep customers ordering again and again and show people you’re listening by responding to reviews</p>
                </div>
                <div class="phone">
                    <img src="image/monitor.png" alt="">
                    <h3>Run your business on your terms</h3>
                    <p>Dig into your data anytime to monitor your performance and customer order trends</p>
                </div>
            </div>
        </div>
    </div>

    <div class="step-bg">
     <div class="step-container">
        <div class="step-title">
          <h2>Get Started</h2>
        </div>
        <div class="step-content">

        <div class="step1">
                <div class="step1-container">
                    <div class="step1-content">
                    <h2>STEP 1:</h2>
                    <p>Sign-Up online to be a Foodea partner.</p>
                </div>
                    <div class="step1-image">
                        <img src="image/signup.png" alt="">
                    </div>
                 </div>

                   <div class="step1-container">
                    <div class="step1-content">
                    <h2>STEP 2:</h2>
                    <p>Submit addiotinal business details and documents.</p>
                </div>
                 <div class="step1-image">
                        <img src="image/hand.png" alt="" >
                    </div>
                </div>
           
        </div>

         <div class="step-image img-fluid">
            <img src="image/phone-circle.png" alt="">
            <p class="number">2000 +</p>
        </div>
    
        <div class="step2">    
            <div class="step2-container">
            <div class="step2-content">
                <h2>STEP 3:</h2>
                <p>Verification of details and final approval.</p>
            </div>
            <div class="step2-image">
                <img src="image/star.png" alt="">
            </div>
            </div>
             <div class="step2-container">
            <div class="step2-content">
                <h2>STEP 4:</h2>
                 <p>Your are now part of Foodea.</p>
                 </div>
                 <div class="step2-image">
                    <img src="image/shake.png" alt="">
                </div>
                 </div>
        </div>

        </div>

      </div>
    </div>
    
    <div class="req-container">
        <div class="req-section">
               <div class="req-image">
                            <img src="/image/requirements.png" alt="">
                        </div>
              <div class="req-content">
                <h2>Get your documents ready</h2>
                <p>You can find the required documents as below. Please ensure that the 
                    following documents are original or else your application will be rejected.
                     Upload only a scanned copy and images of the following documents to avoid document information 
                     being reflective and blurred.</p>
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
                
    <!---Requirements Accordion-->
  

    <!---ACOORDION-->
    <div class="container2">
        <div class="accor-title">
            <h2>FAQs</h2>
            <p>Frequently Ask Questions</p>
        </div>
        <div class="wrapper">
            <button class="toggle">
                What is Foodea?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta
                    aliquam facere adipisci quod mollitia, aut nemo deleniti fugiat et,
                    corrupti sequi. Omnis dolorem quos eligendi placeat soluta sint
                    corrupti quod.
                </p>
            </div>
        </div>
        <div class="wrapper">
            <button class="toggle">
                How to be a Rider in Foodea?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                    error doloremque, quibusdam qui necessitatibus autem aperiam
                    reprehenderit? Ipsum maiores dolore inventore ea. Accusantium fuga
                    eius laboriosam iusto blanditiis doloremque ullam?
                </p>
            </div>
        </div>
        <div class="wrapper">
            <button class="toggle">
                How to be a Foodea Partner?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
                    consectetur officiis labore commodi sunt ex praesentium dolor magnam
                    asperiores reiciendis. Minus magnam nesciunt aliquid eos ipsam sequi
                    recusandae quos incidunt.
                </p>
            </div>
        </div>
    </div>
    <div class="footer">
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
    </div>
    <div class="dark-footer">
        <div class="dark-content">
            <p>Copyright © 2022. All Rights Reserved</p>
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