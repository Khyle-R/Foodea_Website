<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FOODEA Rider</title>
    <link rel="stylesheet" type="text/css" href="css/rider_landing.css" />
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
          aria-label= "Toggle Navigation">
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
	<!-- SECTION 1 -->
	<div class="context-one mx-auto" data-aos="fade-up">
    <div class="row container mx-auto px-5 align-items-center g-0">
	   <div class="col-12 col-md-7 col-lg-6">
	   		<div class="content text-center text-md-start d-flex flex-column align-items-center align-items-md-start pt-4 pt-md-5">
				<h1>Deliver Food With<span> Foodea</span></h1>
				<p class="text-center text-md-start">Try becoming your own boss with Foodea as an alternative to 
						conventional food delivery professions where the hours are fixed.</p>
				<a href="/rider_application_agreement" class="text-decoration-none">Apply Now</a>
          	</div>
    	</div>
		<div class="col-12 col-md-5 col-lg-6">
				<img class="image1 d-none d-md-block" src="image/pic.png" alt="">
		</div>
    </div>
	</div>
	<!-- SECTION 2 -->
	<div class="context-two mx-auto mt-5" data-aos="fade-up">
    <div class="row container mx-auto px-5 align-items-start g-3 g-md-5">
	   <div class="col-12 col-md-4 col-lg-4">
	   			<div class="rider text-center d-flex flex-column align-items-center justify-content-center">
                    <img class="img-fluid" src="image/rider.PNG" alt="">
                    <h3>Become a Rider</h3>
                    <p class="text-center">As a delivery driver, you'll make reliable money working anytime, anywhere.</p>
                    <a class= "text-decoration-none" href="/rider_application_agreement">Start earning</a>
          		</div>
    	</div>
		<div class="col-12 col-md-4 col-lg-4 align-items-center">
				<div class="market text-center d-flex flex-column align-items-center justify-content-center">
                    <img class="img-fluid" src="image/market.PNG" alt="">
                    <h3>Become a Partner</h3>
                    <p class="text-center">Grow your business and reach new customers by partnering with us.</p>
                    <a class= "text-decoration-none " href="/merchant_application_agreement">Sign up you store</a>
				</div>
		</div>
		<div class="col-12 col-md-4 col-lg-4">
				<div class="phone text-center d-flex flex-column align-items-center justify-content-center">
                    <img class="img-fluid" src="image/phone.PNG" alt="">
                    <h3>Try the App</h3>
                    <p class="text-center" >Experience the best your neighborhood has to offer, all in one app.</p>
                    <a class="text-decoration-none" href="#">Get the app</a>
				</div>
		</div>
    </div>
	</div>

	<!-- SECTION 3 -->
	<div class="context-three mx-auto mt-5 pt-5">
	<div class="container pb-5" data-aos="fade-up">
        <h2 class="text-center text-dark text-md-start fw-bold">You only need a few things to get started</h2>
    </div>
    <div class="row container mx-auto align-items-start g-5" data-aos="fade-up">
	   	<div class="col-12 col-md-6 col-lg-6">
		   <img class="img-fluid py-0" src="image/motorbg.png" alt="" />
    	</div>
		<div class="col-12 col-md-6 col-lg-6" data-aos="fade-up">
			<div class="radio_tabs pt-2">
			<div class="border-bottom border-danger border-3 pb-4">
				<label class="radio_wrap pe-4"  
				 data-radio="radio_1"> 
					<!-- <input type="radio" name="sports" class="input" checked /> -->
					<input class="form-check-input" type="radio" name="sports" id="checkboxNoLabel" value="" aria-label="..." checked>
					<span class="radio_mark fw-semibold"> Motorcycle </span>
				</label>

				<label class="radio_wrap" data-radio="radio_2">
					<!-- <input type="radio" name="sports" class="input" /> -->
					<input class="form-check-input" type="radio" name="sports" id="checkboxNoLabel" value="" aria-label="..." checked>
					<span class="radio_mark fw-semibold"> Motorcycle Bicycle </span>
				</label>
			</div>
			
			<div class="content pt-4" data-aos="fade-up">
			<div class="radio_content radio_1">
				<div class="requirements">
					<p class="text-justify">Please read carefully before submitting your application. 
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
	</div>
	
   <!-- SECTION 4 TIMELINE -->
   <div class="container mx-auto mt-5 pt-5" data-aos="fade-up">
   <div class="timeline-header px-3">
        <h2 class="fw-bold pb-4">How food delivery works</h2>
        <p>If you are new to Foodea, 
            you wll need to sign up to be a Foodea rider, and upload the required documents
             and images. Once your application is accepted, you can now log in and
            start earning using Foodea appllication</p>
    </div>
	<div class="container pt-4 d-flex flex-row align-items-center justify-content-center">
	<div class="timeline">
    <div class="timeline-section">
    <div class="timeline-content">
         <ul>
         <li>
        <div class="d-flex flex-column flex-md-row">
		  <img src="image/install.png" alt="">
			<div>
				<h1>Install Foodea application</h1>
				<p>Once your application is accepted, we will send a link of the Foodea application 
					into your provided Email or just simply go to Playstore and type Foodea
					<a class="text-decoration-none text-danger text-semibold" href="#">
						Tap Install
					</a>
					and you are good to go.</p>
			</div>
        </div>
      </li>
      <li>
        <div class="d-flex flex-column flex-md-row">
			<img src="image/suggestion.png" alt="">
			<div>
				<h1>Log in</h1>
				<p>When you are ready to start being a Foodea delivery rider, 
				you can go online in the Foodea app. The app will show 
				available food delivery suggestions near you. 
				You can tap to accept.</p>
			</div>
        </div>
      </li>
      <li>
        <div class = "d-flex flex-column flex-md-row">
			<img src="image/pick.png" alt="">
			<div>
				<h1>Deliver orders</h1>
				<p>The app provides navigation to your customers location
					and if you need assistance you can call or message your customer
					in the application.
				</p>
			</div>
        </div>
      </li>
      <li>
        <div class = "d-flex flex-column flex-md-row">
			<img src="image/earn.png" alt="">
			<div>
				<h1>Earn money</h1>
				<p>You wll get paid for every pickup and dropoff you complete</p>
			</div>
        </div>
      </li>
    </ul>
    </div>
   </div>
   </div>
</div>
</div>
    <!---ACOORDION-->
    <div class="container2 mb-5 pb-5" data-aos="fade-up">
        <div class="accor-title" data-aos="fade-up">
            <h2>FAQs</h2>
            <p>Frequently Ask Questions</p>
        </div>
        <div class="wrappers" data-aos="fade-up">
            <button class="toggle">
              What is a FOODEA rider?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                  A FOODEA rider is someone who delivers food orders to customers using the FOODEA app.
                </p>
            </div>
        </div>
        <div class="wrappers" data-aos="fade-up">
            <button class="toggle">
              How do I become a FOODEA rider?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                  To become a FOODEA rider, you can visit the Rider Page on the FOODEA
                   website for more information on the application process.
                </p>
            </div>
        </div>
        <div class="wrappers" data-aos="fade-up">
            <button class="toggle">
              What are the requirements to become a FOODEA rider?
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="cont">
                <p>
                  Typically include a valid driver's license, a reliable vehicle, and a smartphone. If you look for the papers and other requirements. 
                  You can view the requirements to get started is in the rider page.
                </p>
            </div>
        </div>
        <div class="wrappers" data-aos="fade-up">
          <button class="toggle">
            What are the benefits of being a FOODEA rider?
              <i class="fas fa-plus icon"></i>
          </button>
          <div class="cont">
              <p>
                FOODEA riders have the opportunity to earn flexible income and connect with local businesses and customers in their area.
              </p>
          </div>
      </div>
    </div>
		<div class="background">
			<img src="../image/bgmotor.png" alt="Nature" style="width:100%;">
			<div class="text-block" data-aos="fade-down">
				<h2 class="start">Start your journey now as a Foodea rider</h2>
				<p class="start-content">Sign up as a new Foodea rider, fill out the personal information and vehicle information, upload the required documents, and submit your application!</p>
				<a class="start-btn text-decoration-none text-reset" href="/rider_application_agreement">Join Us</a>
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
                <a href="/mision" class="text-reset text-decoration-none">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

 </body>
</html><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/rider_landing.blade.php ENDPATH**/ ?>