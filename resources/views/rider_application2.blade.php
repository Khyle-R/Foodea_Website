<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rider_application2.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <title>FOODEA</title>
  </head>

  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item back">
              <div class="back-logo">
                  <a href="/"> <img src="image/vector.png" alt=""/> </a>
                  <h5 class="mb-0">Back to website</h5>
              </div>
          </li>
          <li class="nav-item nav-category">
            <a class="nav-link" href="/">
              <img src="image/foodea.png" style="width: 50px">FOODEA
            </a>
          </li>
          <li class="nav-item nav-category">Rider Application</li>
          <li>Step 1 &nbsp;&nbsp;&nbsp;Personal Information</li>
          <li class="red">Step 2 &nbsp;&nbsp;&nbsp;Verify Phone Number</li>
          <li>Step 3 &nbsp;&nbsp;&nbsp;Vehicle Information</li>
          <li>Step 4 &nbsp;Requirements</li>
          <li>Step 5 &nbsp;Application Status</li>  
        </ul>
      </nav>

      <div class="sign-form">
        <div class="content-wrapper">
          <div class="col-12 col-sm-10 col-md-11 col-lg-9 col-xl-6">
            <div class="right">
               <h2>Enter OTP</h2>
               <p>We've sent An 4 digit code to <samp style="color:#F54748;">+639567623212 </samp>Please</p>
               <p>input the code below to verify your mobile number.</p>
               
                         <!-- OTP -->
                        <form>
                           <div class="otp_input text-start mb-2">
                            <div class="d-flex align-items-center justify-content-around mt-2">
                            <input type="text" class="form-control">
                            <input type="text" class="form-control">
                            <input type="text" class="form-control">
                            <input type="text" class="form-control">
                            </div>
                           </div>
                        </form>
         
                 <p class="paragraph">Didn't get an email?</p>
                 <a class="veri" href="/rider_application3">Resend email verification</a>
                 </div>

            </div>
          </div>
        </div> 
      </div> 
  <!-- Scroller -->
  </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
