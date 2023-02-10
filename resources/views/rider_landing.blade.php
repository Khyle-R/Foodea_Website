<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FOODEA Rider</title>
    <link rel="stylesheet" type="text/css" href="css/rider_landing.css" />
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
    <div class="header">
      <nav class="navbar navbar-expand-lg px-2 mx -2 px-xs-3 px-md-4 px-lg-5 mx-xs-3 mx-md-4 mx-lg-5">
      <div class="container-fluid px-3">
        <a href="/" class="navbar-brand  mb-0 h1">
          <img src="image/foodea1.png" alt="" width="45" height="50" />
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
            <div class="content  text-center text-md-start">
                <h1>Deliver Food With <span>Foodea</span></h1>
                <p>Try becoming your own boss with Foodea as an alternative to 
                    conventional food delivery professions where the hours are fixed.</p>
                <a href="/rider_application_agreement">Apply Now </a>
                {{-- <img src="image/vector.png" /> --}}

            </div>
            <div class="image">
                <img src="image/pic.png" alt="">
            </div>
        </div>

 

     <div class="section-3">
            <div class="service">
                <div class="rider">
                    <img src="image/rider.PNG" alt="">
                    <h3>Become a Rider</h3>
                    <p>As a delivery driver, you'll make reliable money working anytime, anywhere.</p>
                    <a href="#">Start earning</a>
                </div>
                <div class="market">
                    <img src="image/market.PNG" alt="">
                    <h3>Become a Partner</h3>
                    <p>Grow your business and reach new customers by partnering with us.</p>
                    <a href="#">Sign up you store</a>
                </div>
                <div class="phone">
                    <img src="image/phone.PNG" alt="">
                    <h3>Try the App</h3>
                    <p>Experience the best your neighborhood has to offer, all in one app.</p>
                    <a href="#">Get the app</a>
                </div>
            </div>
        </div>
      </div>

    <div class="change">
        <div class="change-title">
        <h2>You only need a few things to get started</h2>
        </div>

<div class="section-2">
      <img src="image/motorbg.png" alt="" />
      <div class="wrapper">
        <div class="radio_tabs">
          <label class="radio_wrap" data-radio="radio_1">
            <input type="radio" name="sports" class="input" checked />
            <span class="radio_mark"> Motorcycle </span>
          </label>
          <label class="radio_wrap" data-radio="radio_2">
            <input type="radio" name="sports" class="input" />
            <span class="radio_mark"> Bicycle </span>
          </label>
        </div>
        <div class="content">
          <div class="radio_content radio_1">
             <div class="requirements">
                   <p>Please read carefully before submitting your application. 
                You can find all the needed requirements below to start 
                your journey with Foodea.</p>
            <h3>Motorcycle Rider Requirements</h3>
            <ul class="square">
                <li>Professional Driver’s License (Required)</li>
                <li>Must be 18-55 years old </li>
                <li>Official Receipt (OR) and Certifation of Resgitration (CR) of Motorcycle</ol>
                <li>Professional Driver’s License (Required)</li>
                <li>NBI (Optional)</li>
                <li>Drug Test (Optional)</li>
                <li>Motorcycle year model 2010 above</li>
                <ul class="indent">
                <li>99-160cc Displacement</li>
                <li>Any brands of motorcycle</li>
                </ul>
                <li>Smartphone</li>
                <ul class="indent">
                    <li>Android 5.0 or higher</li>
                </ul>
            </ul>
          </div>
          </div>

          <div class="radio_content radio_2">
              <div class="requirements">
               <p>Please read carefully before submitting your application. 
                You can find all the needed requirements below to start 
                your journey with Foodea.</p>
            <h3>Bicycle Rider Requirements</h3>
             <ul class="square">
                <li>Any valid government ID</li>
                <li>Must be 18-55 Years old </li>
                <li>NBI (Optional)</li>
                <li>Drug Test (Optional)</li>
                <li>Any brands of Bicycle</li>
                 <li>Smartphone</li>
                <ul class="indent">
                    <li>Android 5.0 or higher</li>
                </ul>
                <li>Proper riding protective gear</li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>

   <!-- TIMELINE -->
   <div class="timeline">
    <div class="timeline-title">
        <h2>How food delivery works</h2>
        <p>If you are new to Foodea, 
            you wll need to sign up to be a Foodea rider, and upload the required documents
             and images. Once your application is accepted, you can now log in and
            start earning using Foodea appllication</p>
    </div>
    <div class="timeline-section">
        <div class="timeline-image">
    <img src="image/install.png" alt="">
     <img src="image/suggestion.png" alt="">
      <img src="image/pick.png" alt="">
       <img src="image/earn.png" alt="">
       </div>
        <div class="timeline-content">
         <ul>
         <li>
        <div>
          <h1>Install Foodea application</h1>
          <p>Once your application is accepted, we will send a link of the Foodea application 
            into your provided Email or just simply go to Playstore and type <span>Foodea</span><span> > Tap Install</span>
            and you are good to go.</p>
        </div>
      </li>
      <li>
        <div>
          <h1>Log in</h1>
          <p>When you are ready to start being a Foodea delivery rider, 
            you can go online in the Foodea app. The app will show 
            available food delivery suggestions near you. 
            You can tap to accept.</p>
        </div>
      </li>
      <li>

        <div>
          <h1>Deliver orders</h1>
          <p>The app provides navigation to your customers location
            and if you need assistance you can call or message your customer
            in the applcation.
          </p>
        </div>
      </li>
      <li>
        <div>
          <h1>Earn money</h1>
          <p>You wll get paid for every pickup and dropoff you complete</p>
        </div>
      </li>
    </ul>
    </div>
   </div>
   </div>
    <!---ACOORDION-->
    <div class="container2">
        <div class="accor-title">
            <h2>FAQs</h2>
            <p>Frequently Ask Questions</p>
        </div>
        <div class="wrappers">
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
        <div class="wrappers">
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
        <div class="wrappers">
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
    <div class="bg-img" style="background-image: url(../image/bgmotor.png);">
        <div class="end-container">
                 <div class="end-content">
                  <h2>Start your journey now as a Foodea rider</h2>
                  <p>Sign up as a new Foodea rider, fill out the personal
                  information and vehicle information, upload the required documents, and submit your 
                 application!</p>
                  <a href="#">Join Us</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

 </body>
</html>