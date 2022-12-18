<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rider_application4.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>FOODEA</title>
  </head>

  <body>
    <div class="container">
      <div class="left">
        <div class="left-content">
          <div class="back">
            <a href="#"><img src="image/vector.png" /></a>
            <p>Back to website</p>
          </div>
          <div class="logo">
            <a href="#"><img src="image/foodea.png" /></a>
            <h2>FOODEA</h2>
          </div>

          <ul>
            <h1>Merchant Application</h1>
            <li>Step 1 &nbsp;&nbsp;&nbsp; Personal Information</li>
            <li>Step 2 &nbsp;&nbsp; Verify Phone Number</li>
            <li>Step 3 &nbsp;&nbsp;&nbsp; Vehicle Information</li>
            <li class="red">Step 4 &nbsp;&nbsp;&nbsp; Requirements</li>
            <li>Step 5 &nbsp;&nbsp;&nbsp; Application Status</li>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="right-content">
          <h2>Welcome, Juan</h2>
          <p>Here's the required steps to set up your account</p>

          <div class="form-container">
            <div class="btn-group">
              <form action="{{ route('rider_application4.SaveDocuments') }}" method="post" enctype="multipart/form-data">
             @csrf
             @if (Session::has('rider_id'))
            <input type="hidden" name="rider_id" value=" {{ Session::get('rider_id') }}">
            @endif
              <button>Photo of your vehicle
                <input type="file" name="vehicle_photo">
                <br>
                <samp>Required Steps</samp>
              </button>
              
              <button>1x1 Picture 
                <input type="file" name="image">
                <br>
                <samp>Required Steps</samp>
              </button>

              <button>Photo of your drivers license ID
                 <input type="file" name="license">
                <br>
                <samp>Required Steps</samp>
              </button>

              <button>Certificate of Registration
                 <input type="file" name="cr">
                <br>
                <samp>Required Steps</samp>
              </button>

               <button>Official Receipt of Vehicle Registration
                <input type="file" name="or">
                <br>
                <samp>Required Steps</samp>
              </button>

              <button>Drug Test Result 
                 <input type="file" name="drug_test">
                <br>
                <samp>Optional</samp>
              </button>

              <button>NBI Clearance
                <input type="file" name="nbi">
                  </i>
                  <br>
                  <samp>Optional</samp>
                </button>
            </div>
              <button class="submit" type="submit">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>  
  </body>
</html>
