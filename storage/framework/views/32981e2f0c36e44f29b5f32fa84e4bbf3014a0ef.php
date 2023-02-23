<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rider_application3.css" />
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
            <li class="red">Step 3 &nbsp;&nbsp;&nbsp; Vehicle Information</li>
            <li>Step 4 &nbsp;&nbsp;&nbsp; Requirements</li>
            <li>Step 5 &nbsp;&nbsp;&nbsp; Application Status</li>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="right-content">
            <?php if(Session::has('rider_id')): ?>
           
            <input type="hidden" value=" <?php echo e(Session::get('rider_id')); ?>">
          <?php endif; ?>
          <h2>Create your Account</h2>
          <p>Please fill up the form below.</p>

          <div class="form-container">
            <label>Vehicle Type</label>
            <select name="" id="">
                <option selected="true" disabled="disabled">- Select -</option>
                <option>Motorcycle</option>
                <option>Bicycle</option>
              </select>
        
            <label>Plate Number</label>
            <input type="text" />

            <label>Motorcycle Displacement <samp style="color:#BD9140;font-size: 13px;">(CC)</samp></label>
            <input type="text" />

            <label>Engine Number</label> 
            <input type="text" />

            <label>Year Model</label>
            <input type="text" />
    
            <label>Email Address</label>
            <input type="text" />


           <br><br><br>
           <a class="next" href="/rider_application4">Next</a>

          </div>
        </div>
      </div>
    </div>  
  </body>
</html>
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/rider_application3.blade.php ENDPATH**/ ?>