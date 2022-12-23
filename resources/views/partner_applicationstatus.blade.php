<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Rider_ApplicationStatus.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>FOODEA</title>
    <link rel="shortcut icon" href="images/foodea.png" type="image">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  </head>

  <body>
      <div class="container">
        <div class="left">
          <div class="left-content">
            <div class="back">
              <a href="partner_landing.html"><img src="images/vector.png" /></a>
              <p>Back to website</p>
            </div>
            <div class="logo">
              <a href="#"><img src="images/foodea.png" /></a>
              <h2>FOODEA</h2>
            </div>

            <ul>
              <h1>Merchant Application</h1>
            <li><a href="rider_application.html">Step 1 &nbsp;&nbsp;&nbsp; Personal Information</a></li>
            <li><a href="rider_application2.html">Step 2 &nbsp;&nbsp;&nbsp; Verify Phone Number</a></li>
            <li><a href="rider_application3.html">Step 3 &nbsp;&nbsp;&nbsp; Vehicle Information</a></li>
            <li><a href="rider_application4.html">Step 4 &nbsp;&nbsp;&nbsp; Requirements</a></li>
            <li><a href="Rider_ApplicationStatus.html">Step 5 &nbsp;&nbsp;&nbsp; Application Status</a></li>
            </ul>
          </div>
        </div>

        <div class="right">
          <div class="right-content">
              <h2>Application Status</h2>
            <div class="content">
                      <div class="card">
                        <div class="wrapper">
                          {{-- <img src="images/download.jpg"> --}}
                        </div>
                        <span>Juan Dela Cruz<br><samp>Motorcycle</samp></span>
                        <button type="button" class="btn btn-warning">Waiting for Approval</button>
                      </div>
                    <br><br><br>
                    <p>Rider Information</p><br><br>
                    <hr><br><br>
                     @if (Session::has('rider_id'))
                   <input type="hidden" name="rider_id" value=" {{ Session::get('rider_id') }}">
                      
                   @endif

                        <div class="col">
               
                          <label>First Name</label>
                          <div class="col-1"></div>
                          <br><br><br>
                          <label>Middle Name</label>
                          <div class="col-1"></div>
                          <br><br><br>
                          <label>Last Name</label>
                          <div class="col-2"></div>
                          <br><br><br>
                          <label>Email Address</label>
                          <div class="col-3"></div>
                          <br><br><br>
                          <label>Mobile Number</label>
                          <div class="col-4"></div>
                          <label>City</label>
                          <div class="col-3"></div>
                          <br><br><br>
                          <br><br><br><br><br>
                        </div>
                        <div class="form"> 
                        <p>Uploaded Documents</p><br><br>
                        <hr><br><br>                           
                            <label>Photo of your Vehicle</label>
                            <br><br><br>
                            <label>Photo of your drivers license ID</label>
                            <br><br><br>
                            <label>Certificate of Registration and <br>
                              Official Receipt of Vehicle Registration</label>
                            <br><br><br>
                            <label>Drug Test Result</label>
                            {{-- <i class="bi bi-check-circle-fill"></i> --}}
                          </div>
                      <p>Vehicle Information</p><br><br>
                        <hr><br><br>
                          <div class="col">
                            <label>Type</label>
                            <div class="col-5"></div>
                            <br><br><br>
                            <label>Year model</label>
                            <div class="col-6"></div>
                            <br><br><br>
                            <label>Plate Number</label>
                            <div class="col-7"></div>
                            <br><br><br>
                            <label>Engine Number</label>
                            <div class="col-8"></div>
                          </div>
                 
                  <br><br><br>
            </div>
          </div>
        </div>
      </div>

  </body>
</html>