<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <title>FOODEA Personal Information</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/rider_application.css">
  </head>
  
  <body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <h3 class="header_title pt-2 pt-md-3">Foodea Application</h3>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="/" class="nav_logo">
              <i class="bx bx-log-out nav_icon text-white"></i>
              <span class="nav_logo-name">Back to Website</span>
          </a>
            <div class="nav_list logos">
              <div class="title d-flex pb-3 ps-2 gap-2 align-items-center">
              <img src="image/foodea.png" style="width: 50px">FOODEA
            </div>
            <div class="nav_link active mt-3 py-3 ms-2">
              <i class="bx bx-grid-alt nav_icon"></i>
              <span class="nav_name">Term User</span>
            </div>
            <div href="#" class="nav_link active red py-3 ms-2">
              <span class="nav_linknumber">1</span>
              <span class="nav_name">Personal Information</span>
            <!-- </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">2</span>
              <span class="nav_name">Verify Phone Number</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">3</span>
              <span class="nav_name">Vehicle Information</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">4</span>
              <span class="nav_name">Requirements</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">5</span> 
              <span class="nav_name">Application Status</span>
            </div> -->
          </div>
        </div>
        </div>
      </nav>
    </div>
    <!-- Content Here -->
    <!-- Form -->
    <!-- <div class="container sign-form"> -->
      <div class="content-wrapper container mt-2 px-3 px-md-5 py-2">
        <div class="col-12 col-sm-12 col-md-9 col-lg-7 justify-content-center align-items-center mx-auto px-0">
           <div class="right">
            <div class="right">
            <h2>Create your Account</h2>
            <h3>Please fill up the form below.</h3>
           <form method="post" action="{{route('rider_application.addPostSubmit')}}">
           @csrf
           
            <div class="form-group">
            <label>Account Type</label>
            <select name="account_type" id="" class="form-control form-control-lg">
              <option selected="true" disabled="disabled">- Select -</option>
              <option value="Rider" @if (old('account_type') == 'Rider') selected="selected" @endif>Rider</option>
              <option value="Partner Merchant" @if (old('account_type') == 'Partner Merchant') selected="selected" @endif>Partner Merchant</option>
            </select>
             <span
            style="color:red;">
            @error('account_type') {{ $message }}
            @enderror</span>
            </div>

           <div class="form-group">
            <label>First Name</label>
            <input name="firstname" type="text" value="{{ old('firstname') }}" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('firstname') {{ $message }}
            @enderror</span>
           </div>
      
            
            <div class="form-group">
            <label>Middle Name</label>
            <input name="middlename" type="text" value="{{ old('middlename') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('middlename') {{ $message }}
            @enderror</span>
            </div>
          
            <div class="form-group">
            <label>Last Name</label>
            <input name="lastname" type="text" value="{{ old('lastname') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('lastname') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>Suffix <a style="color:#BD9140;font-size: 12px;"> (Optional)</a></label>
            <input name="suffix" type="text"  value="{{ old('suffix') }}" class="form-control form-control-lg"/>
            </div>

            <div class="form-group">
            <label>Age</label> 
            <input name="age" onkeypress="return event.charCode>=48 && event.charCode<=57" type="text" value="{{ old('age') }}" class="form-control form-control-lg"/>
            @if (Session::has('age'))
              <p style="color:red;">{{ Session::get('age') }}</p>
            @endif 
            <span
            style="color:red;">
            @error('age') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>Gender</label>
            <select name="gender" id="" class="form-control form-control-lg">
              <option selected="true" disabled="disabled">- Select -</option>
              <option value="Male" @if(old('gender') == 'Male') selected="selected" @endif>Male</option>
              <option value="Female" @if(old('gender') == 'Female') selected="selected" @endif>Female</option>
            </select>
             <span
            style="color:red;">
            @error('gender') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label for="birthday">Birthdate</label>
           <input class="form-control form-control-lg" type="date" id="birthday" name="birthday" value="{{ old('birthday') }}">
          <span
            style="color:red;">
            @error('birthday') {{ $message }}
            @enderror</span> 
          </div>

            <div class="form-group">
            <label >Email Address <a style="color:#BD9140;font-size: 13px;">(For Email verification)</a></label>
            <input name="email" type="text" value="{{ old('email') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('email') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>Mobile Number <a style="color:#BD9140;font-size: 13px;">(+63)</a></label>
            <input name="mobilenumber" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode<=57" type="text" value="{{ old('mobilenumber') }}" class="form-control form-control-lg" />
             <span
            style="color:red;">
            @error('mobilenumber') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            
            </div>
           
            <div class="form-group">
            <label>Password<a style="color:#BD9140;font-size: 13px;"> (Must be at least 8 characters long. 
              Password must contain letters, numbers and symbols.)</a></label>
              <input type="password" id="password" name="password" class="form-control form-control-lg">
              <span class="eye mx-2" onclick="myFunction()">
                <i class="fa fa-eye" id="hide1"></i>
                <i class="fa fa-eye-slash" id="hide2"></i>
              </span>
              
             <span
            style="color:red;">
            @error('password') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>Confirm Password</label>
              <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg">
              <span class="eye2 mx-2" onclick="Function()">
                <i class="fa fa-eye" id="hide3"></i>
                <i class="fa fa-eye-slash" id="hide4"></i>
              </span>
             <span
            style="color:red;">
            @error('password_confirmation') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>Address</label>
            <input name="address" type="text" value="{{ old('address') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('address') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>City</label>
            <input name="city" type="text" value="{{ old('city') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('city') {{ $message }}
            @enderror</span>
            </div>


            <div class="form-group">
            <label>Barangay</label>
            <input name="barangay" type="text" value="{{ old('barangay') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('barangay') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>ZIP Code</label>
            <input name="zip" maxlength="4" onkeypress="return event.charCode>=48 && event.charCode<=57" type="text" value="{{ old('zip') }}" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('zip') {{ $message }}
            @enderror</span>
            </div>
            <br>
           <h3 class="notice text-center">Please make sure the details you have entered above is correct before you proceed to the next screen. You will not able to navigate back.</h3>
           <br>
           <div class="form-group">
            <div class="col-sm-12 d-flex justify-content-center">
              <button Value="submit" type="submit" class="btn btn-danger w-50">Next</button>
            </div>
           </div>
            </form>
          </div>
        </div>
       </div>
     <!-- </div> -->
    <!-- End Content Here -->
    <!-- Show Hide Password -->
    <script>
        function myFunction(){
          var a = document.getElementById("password");
          var b = document.getElementById("hide1");
          var c = document.getElementById("hide2");
    
          if(a.type == 'password'){
            a.type = "text";
            b.style.display = "inline";
            c.style.display = "none";
          }
          else{
            a.type = "password";
            b.style.display = "none";
            c.style.display = "inline";
          }
        }
    </script>
    <!-- Show Hide Confirm Password -->
    <script>
      function Function(){
        var x = document.getElementById("password_confirmation");
        var y = document.getElementById("hide3");
        var z = document.getElementById("hide4");

        if(x.type == 'password'){
          x.type = "text";
          y.style.display = "inline";
          z.style.display = "none";
        }
        else{
          x.type = "password";
          y.style.display = "none";
          z.style.display = "inline";
        }
      }
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src = "js/sidebar.js"></script>
  </body>
</html>