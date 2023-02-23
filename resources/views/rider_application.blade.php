<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rider_application.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <title>FOODEA Personal Information</title>
  </head>

  <body>

   <div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item back">
            <div class="back-logo">
                <a href="/"> <img src="image/vector.png" alt=""/> </a>
                <h5 class="mb-0">Back to website</h5>
            </div>
        </li>
        <li class="nav-item nav-category">
          <a class="nav-link" href="/">
            <img src="image/foodea.png" style="width: 50px">FOODEA
          </a>
        </li>
        <li class="nav-item nav-category">Rider Application</li>
        <li class="red">Step 1 &nbsp;&nbsp;&nbsp;Personal Information</li>
        <li>Step 2 &nbsp;&nbsp;&nbsp;Verify Phone Number</li>
        <li>Step 3 &nbsp;&nbsp;&nbsp;Vehicle Information</li>
        <li>Step 4 &nbsp;Requirements</li>
        <li>Step 5 &nbsp;Application Status</li>  
      </ul>
    </nav>
    
    <!-- Form -->
    <div class="sign-form">
      <div class="content-wrapper">
        <div class="col-12 col-sm-10 col-md-11 col-lg-9 col-xl-6">
           <div class="right">
            <h2>Create your Account</h2>
            <p>Please fill up the form below.</p>

           <form method="post" action="{{route('rider_application.addPostSubmit')}}">
           @csrf

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
            <label>Suffix <a style="color:#FDC55E;font-size: 10px;">(Optional)</a></label>
            <input name="suffix" type="text"  class="form-control form-control-lg"/>
            </div>

            <div class="form-group">
            <label>Age</label> 
            <input name="age" type="text" value="{{ old('age') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('age') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>Gender</label>
            <select name="gender" id="" class="form-control form-control-lg">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>Male</option>
              <option>Female</option>
            </select>
             <span
            style="color:red;">
            @error('gender') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label for="birthday">Birthdate</label>
           <input class="form-control form-control-lg" type="date" id="birthday" name="birthday">
          <span
            style="color:red;">
            @error('birthday') {{ $message }}
            @enderror</span> 
          </div>

            <div class="form-group">
            <label >Email Address <a style="color:#FDC55E;font-size: 10px;">(For Email verification)</a></label>
            <input name="email" type="text" value="{{ old('email') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('email') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>Mobile Number</label>
            <input name="mobilenumber" type="text" value="{{ old('mobilenumber') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('mobilenumber') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
              <p style="color: #BD9140; padding: 10px;"> <small> Must be at least 6 characters long. 
              Password can contain letters, numbers and punctuation. </small>
              </p>
            </div>
           
            <div class="form-group">
            <label>Password</label>
              <input type="password" id="password" name="password" class="form-control form-control-lg">
             <span
            style="color:red;">
            @error('password') {{ $message }}
            @enderror</span>
            </div>

            <div class="form-group">
            <label>Confirm Password</label>
              <input type="password" id="password" name="password_confirmation" class="form-control form-control-lg">
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
            <input name="zip" type="text" value="{{ old('zip') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('zip') {{ $message }}
            @enderror</span>
            </div>

             <h5 class="mt-4">Emergency Contact</h5>

             <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" value="{{ old('zip') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('name') {{ $message }}
            @enderror</span>
            </div>

             <div class="form-group">
            <label>Relationship</label>
            <input name="relationship" type="text" value="{{ old('zip') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('relationship') {{ $message }}
            @enderror</span>
            </div>

             <div class="form-group">
            <label>Phone</label>
            <input name="phone" type="text" value="{{ old('zip') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('phone') {{ $message }}
            @enderror</span>
            </div>
           <br><br>
           <div class="form-group">
            <div class="col-sm-10 d-flex justify-content-center">
              <button Value="submit" type="submit" class="btn btn-danger w-50">Next</button>
            </div>
           </div>
            </form>
          </div>
        </div>
       </div>
     </div>
      <!-- Scroller -->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>
