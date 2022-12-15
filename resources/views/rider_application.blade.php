<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rider_application.css" />
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
            <a href="/"><img src="image/foodea.png" /></a>
            <h2>FOODEA</h2>
          </div>

          <ul>
            <h1>Merchant Application</h1>
            <li class="red">Step 1 &nbsp;&nbsp;&nbsp; Personal Information</li>
            <li>Step 2 &nbsp;&nbsp; Verify Phone Number</li>
            <li>Step 3 &nbsp;&nbsp;&nbsp; Vehicle Information</li>
            <li>Step 4 &nbsp;&nbsp;&nbsp; Requirements</li>
            <li>Step 5 &nbsp;&nbsp;&nbsp; Application Status</li>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="right-content">
          <h2>Create your Account</h2>
          <p>Please fill up the form below.</p>
          
         <form method="post" action="{{route('rider_application.addPostSubmit')}}">
          @csrf
          <div class="form-container">
        
            <label>Firts Name</label>
            <input name="firstname" type="text" />

            <label>Middle Name</label>
            <input name="middle" type="text" />

            <label>Last Name</label>
            <input name="lastname" type="text" />

            <label>Suffix</label>
            <input name="suffix" type="text" />

            <label>Age</label> 
            <input name="age" type="text" />

            <label>Gender</label>
            <select name="gender" id="">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>MALE</option>
              <option>FEMALE</option>
            </select>

            <label>Email Address</label>
            <input name="email" type="text" />

            <label>Mobile Number <samp style="color:#BD9140;font-size:9px;">(For Verification)</samp></label>
            <input name="mobilenumber" type="text" />

            <label>Address</label>
            <input name="address" type="text" />

            <label>City</label>
            <input name="city" type="text" />
           
            <label>Barangay</label>
            <input name="barangay" type="text" />

            <label>ZIP Code</label>
            <input name="zip" type="text" />
            
           <br><br><br>
           <button Value="submit" type="submit">Next</button>
           {{-- <a class="next" href="/rider_application2">Next</a> --}}
            </form>
          </div>
        </div>
      </div>
    </div>  
  </body>
</html>
