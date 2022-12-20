
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

          <form method="post" action="{{ route('partner_application2.partner2submit') }}">
         @csrf
            @if (Session::has('merchant_id'))
            <input type="hidden" name="merchant_id" value=" {{ Session::get('merchant_id') }}">
          @endif

            <div class="form-container">
            <label>Business Type</label>
            <select name="business_type" id="">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>Sole proprietorship</option>
              <option>Corporation</option>
            </select>
            <span
            style="color:red;">
            @error('business_type') {{ $message }}
            @enderror</span>

            <label>Business Name</label>
            <input type="text" name="business_name"/>
            <span
            style="color:red;">
            @error('business_name') {{ $message }}
            @enderror</span>

            <label>Country</label>
             <select name="country" id="">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>Philippines</option>
            </select>
            <span
            style="color:red;">
            @error('country') {{ $message }}
            @enderror</span>

            <label>Business Address</label>
            <input type="text" name="address"/>
            <span
            style="color:red;">
            @error('address') {{ $message }}
            @enderror</span>

            <label>City</label> 
            <input type="text" name="city"/>
            <span
            style="color:red;">
            @error('city') {{ $message }}
            @enderror</span>

            <label>Registered Barangay</label>
            <input type="text" name="barangay"/>
            <span
            style="color:red;">
            @error('barangay') {{ $message }}
            @enderror</span>

            <label>Registered Street</label>
            <input type="text" name="street"/>
            <span
            style="color:red;">
            @error('street') {{ $message }}
            @enderror</span>

            <label>Registered Postal Code</label>
            <input type="text" name="postal_code"/>
            <span
            style="color:red;">
            @error('postal_code') {{ $message }}
            @enderror</span>

            <label>Store Phone No.</label>
            <input type="text" name="store_number"/>
            <span
            style="color:red;">
            @error('store_number') {{ $message }}
            @enderror</span>

            <label>Store Email Address</label>
            <input type="text" name="store_email"/>
            <span
            style="color:red;">
            @error('store_email') {{ $message }}
            @enderror</span>

           <br><br><br>
           <button class="next" type="submit">Next</button>
      </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
