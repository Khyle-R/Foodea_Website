<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rider_application2.css" />
    <title>FOODEA</title>
  </head>

  <body>
    <div class="container">
      <div class="left">
        <div class="left-content">
          <div class="back">
            <a href="/"><img src="image/vector.png" /></a>
            <p>Back to website</p>
          </div>
          <div class="logo">
            <a href="#"><img src="image/foodea.png" /></a>
            <h2>FOODEA</h2>
          </div>

          <ul>
            <h1>Rider Application</h1>
            <li>Step 1 &nbsp;&nbsp;&nbsp; Personal Information</li>
            <li class="red">Step 2 &nbsp;&nbsp; Verify Phone Number</li>
            <li>Step 3 &nbsp;&nbsp;&nbsp; Vehicle Information</li>
            <li>Step 5 &nbsp;&nbsp;&nbsp; Requirements</li>
            <li>Step 5 &nbsp;&nbsp;&nbsp; Application Status</li>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="right-content">
          <h2>Enter OTP</h2>
          <p>We've sent An 4 digit code to <samp style="color:#F54748;">+639567623212 </samp>Please</p>
          <p>input the code below to verify your mobile number.</p>

          <div class="form-container">
              <br>
                <form method="get" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
                <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
                <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
                <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
                </form>

                <p class="paragraph">Didn't get an email?</p>
                <a class="veri" href="/rider_application3">Resend email verification</a>
        </div>
      </div>
    </div>  
  </body>
</html>
