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
            <h1>Rider Application</h1>
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
            <input name="firstname" type="text" value="{{ old('firstname') }}"/>
            <span
            style="color:red;">
            @error('firstname') {{ $message }}
            @enderror</span>

            <label>Middle Name</label>
            <input name="middlename" type="text" value="{{ old('middlename') }}"/>
             <span
            style="color:red;">
            @error('middlename') {{ $message }}
            @enderror</span>

            <label>Last Name</label>
            <input name="lastname" type="text" value="{{ old('lastname') }}"/>
             <span
            style="color:red;">
            @error('lastname') {{ $message }}
            @enderror</span>

            <label>Suffix</label>
            <input name="suffix" type="text" />

            <label>Age</label> 
            <input name="age" type="text" value="{{ old('age') }}"/>
             <span
            style="color:red;">
            @error('age') {{ $message }}
            @enderror</span>

            <label>Gender</label>
            <select name="gender" id="">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>MALE</option>
              <option>FEMALE</option>
            </select>
             <span
            style="color:red;">
            @error('gender') {{ $message }}
            @enderror</span>

            <label>Email Address</label>
            <input name="email" type="text" value="{{ old('email') }}"/>
             <span
            style="color:red;">
            @error('email') {{ $message }}
            @enderror</span>

            <label>Mobile Number <samp style="color:#BD9140;font-size:9px;">(For Verification)</samp></label>
            <input name="mobilenumber" type="text" value="{{ old('mobilenumber') }}"/>
             <span
            style="color:red;">
            @error('mobilenumber') {{ $message }}
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
              <input type="password" id="password" name="password_confirmation">
              <i class="fa-solid fa-eye" id="eye"></i>
            </div>
             <span
            style="color:red;">
            @error('password_confirmation') {{ $message }}
            @enderror</span>

            <label>Address</label>
            <input name="address" type="text" value="{{ old('address') }}"/>
             <span
            style="color:red;">
            @error('address') {{ $message }}
            @enderror</span>

            <label>City</label>
            <input name="city" type="text" value="{{ old('city') }}"/>
             <span
            style="color:red;">
            @error('city') {{ $message }}
            @enderror</span>
           
            <label>Barangay</label>
            <input name="barangay" type="text" value="{{ old('barangay') }}"/>
             <span
            style="color:red;">
            @error('barangay') {{ $message }}
            @enderror</span>

            <label>ZIP Code</label>
            <input name="zip" type="text" value="{{ old('zip') }}"/>
             <span
            style="color:red;">
            @error('zip') {{ $message }}
            @enderror</span>
            
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
