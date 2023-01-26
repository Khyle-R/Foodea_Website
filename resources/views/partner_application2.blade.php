
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/partner_application2.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <title>FOODEA</title>
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
            <li class="nav-item nav-category">Merchant Application</li>
            <li>Step 1 &nbsp;&nbsp;&nbsp;Personal Information</li>
            <li class="red">Step 2 &nbsp;&nbsp;&nbsp;Business Information</li>
            <li>Step 3 &nbsp;&nbsp;&nbsp;Verify Email Address</li>
            <li>Step 4 &nbsp; Requirements</li>
            <li>Step 5 &nbsp; Applicataion Status</li>
          </ul>
    </nav>

    <div class="sign-form">
      <div class="content-wrapper">
        <div class="col-12 col-sm-10 col-md-11 col-lg-9 col-xl-6">
           <div class="right">
          <h2>Secure your Account</h2>
          <p>Please fill up the form below.</p>

            <!--GET PARTNER ID-->

          <form method="post" action="{{ route('partner_application2.partner2submit') }}">
         @csrf
            @if (Session::has('merchant_id'))
            <input type="hidden" name="merchant_id" value=" {{ Session::get('merchant_id') }}">
          @endif

          <div class="form-group">
            <label>Business Type</label>
            <select name="business_type" id="" class="form-control form-control-lg">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>Sole proprietorship</option>
              <option>Corporation</option>
            </select>
            <span
            style="color:red;">
            @error('business_type') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Business Name</label>
            <input type="text" name="business_name" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('business_name') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Country</label>
             <select name="country" id="" class="form-control form-control-lg">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>Philippines</option>
            </select>
            <span
            style="color:red;">
            @error('country') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Business Address</label>
            <input type="text" name="address" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('address') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>City</label> 
            <input type="text" name="city" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('city') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Registered Barangay</label>
            <input type="text" name="barangay" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('barangay') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Registered Street</label>
            <input type="text" name="street" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('street') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Registered Postal Code</label>
            <input type="text" name="postal_code" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('postal_code') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Store Phone No.</label>
            <input type="text" name="store_number" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('store_number') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Store Email Address</label>
            <input type="text" name="store_email" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('store_email') {{ $message }}
            @enderror</span>
          </div>

           <br><br><br>
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
