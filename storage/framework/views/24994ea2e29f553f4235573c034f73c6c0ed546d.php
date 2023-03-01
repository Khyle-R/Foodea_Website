
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/partner_application.css" />
    <title>FOODEA</title>
  </head>
  <body>
    <div class="container">
      <div class="left">
        <div class="left-content">
          <div class="back">
            <a href="/"
              ><img src="image/vector.png" />
              <p>Back to website</p></a
            >
          </div>
          <div class="logo">
            <a href="/"><img src="image/foodea.png" /></a>
            <h2>FOODEA</h2>
          </div>

          <ul>
            <h1>Merchant Application</h1>
            <li>Step 1 &nbsp; Profile Information</li>
            <li class="red">Step 2 &nbsp; Business Information</li>
            <li>Step 3 &nbsp; Verify Email Address</li>
            <li>Step 4 &nbsp; Requirements</li>
            <li>Step 5 &nbsp; Applicataion Status</li>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="right-content">
          <h2>Secure your Account</h2>
          <p>Please fill up the form below.</p>

            <!--GET RIDER ID-->
            <?php if(Session::has('merchant_id')): ?>
            <input type="hidden" name="merchant_id" value=" <?php echo e(Session::get('merchant_id')); ?>">
          <?php endif; ?>

          <div class="form-container">
            <label>Business Type</label>
            <select name="" id="">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>Sole proprietorship</option>
              <option>Chorporation</option>
            </select>

            <label>Business Name</label>
            <input type="text" />

              <label>Country</label>
            <select name="" id="">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>Philippines</option>
            </select>


            <label>Business Address</label>
            <input type="text" />

            <label>City</label> 
            <input type="text" />

            <label>Registered Barangay</label>
            <input type="text" />

            <label>Registered Street</label>
            <input type="text" />

            <label>Registered Postal Code</label>
            <input type="text" />

            <label>Store Phone No.</label>
            <input type="text" />

            <label>Store Email Address</label>
            <input type="text" />

           <br><br><br>
           <a class="next" href="/partner_application2">Next</a>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/partner_application2.blade.php ENDPATH**/ ?>