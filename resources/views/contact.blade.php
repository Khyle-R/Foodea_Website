<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FOODEA</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet" />
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="header">
    <!--- NAVBAR -->
    <nav class="navbar navbar-expand-lg px-5 mx-5">
      <div class="container-fluid px-3">
        <a href="#" class="navbar-brand">
          <img src="image/foodea1.png" alt="" />
          FOODEA
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

          <section class="tittle pb-5">
            <div class="container">
              <div class="card">
                <div class="card-body">
                  <h1>Contact Us</h1>
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                      <!-- Location -->
                      <div class="row pt-3">
                        <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-1">
                        </div>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-10">
                          <span><i class="fa fa-map-marker-alt"></i>
                          <p>Caloocan City,<br> Philippines</p>
                        </span>
                        </div>
                      </div>
                      <!-- Email -->
                      <div class="row pt-3">
                        <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-1">
                        </div>
                        <div class="col-9 col-sm-9 col-md-9 col-lg-8">
                          <span><i class="fa fa-envelope"></i>
                          <p>foodea@gmail.com</p>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                      <form class="form-row">
                        <div class="form-group p-2">
                          <label class="p-1">Your Name</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="form-group p-2">
                          <label  class="p-1">Email Address</label>
                          <input type="email" class="form-control">
                        </div>
                        <div class="form-group p-2">
                          <label  class="p-1">Message</label>
                          <textarea class="form-control mb-3" rows="8"></textarea>
                        </div>
                        <div class="form-group p-2">
                        <button class="btn btn-danger w-50">Send</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

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