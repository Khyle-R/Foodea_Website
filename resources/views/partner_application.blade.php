<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/partner_application2.css" />
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
            <li class="red">Step 1 &nbsp;&nbsp;&nbsp;Personal Information</li>
            <li>Step 2 &nbsp;&nbsp;&nbsp;Business Information</li>
            <li>Step 3 &nbsp;&nbsp;&nbsp;Verify Email Address</li>
            <li>Step 4 &nbsp; Requirements</li>
            <li>Step 5 &nbsp; Applicataion Status</li>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="right-content">
          <h2>Secure your Account</h2>
          <p>Please fill up the form below</p>
          <form method="post" action="{{ route('partner_application.PersonalInfo') }}">
            @csrf
          <div class="form-container">
               <label>Salutation</label>
            <select name="salutation" id="">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>Mr.</option>
              <option>Ms.</option>
              <option>Mrs.</option>
            </select>
             <span
            style="color:red;">
            @error('salutation') {{ $message }}
            @enderror</span>

            <label>First Name</label>
              <input type="text" name="firstname"/>
              <span
            style="color:red;">
            @error('firstname') {{ $message }}
            @enderror</span>

            <label>Middle Name</label>
            <input type="text" name="middlename"/>
              <span
            style="color:red;">
            @error('middlename') {{ $message }}
            @enderror</span>

            <label>Last Name</label>
            <input type="text" name="lastname"/>
              <span
            style="color:red;">
            @error('lastname') {{ $message }}
            @enderror</span>

            <label>Suffix <a style="color:#FDC55E;font-size: 10px;">(Optional)</a></label>
            <input type="text" name="suffix"/>

            <label>Email Address <a style="color:#FDC55E;font-size: 10px;">(For Email verification)</a></label>
            <input type="text" name="email"/>
            <span
            style="color:red;">
            @error('email') {{ $message }}
            @enderror</span>

            <p class="paragraph"> Password must be at least 6 characters long. 
              Password can contain letters, numbers and punctuation.
            </p>
           
            <label>Password</label>
            <div class="password-container">
              <input type="password" id="password" name="password">
              <i class="fa-solid fa-eye" id="eye"></i>
            </div>
             <span
            style="color:red;">
            @error('password') {{ $message }}
            @enderror</span>

            <label>Confirm Password</label>
            <div class="password-container">
              <input type="password" id="password">
              <i class="fa-solid fa-eye" id="eye"></i>
            </div>
            
             <br><br><br>
             <button class="submit" type="submit" >Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>