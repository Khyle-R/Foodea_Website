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
    <title>FOODEA Vehicle Information</title>
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
          <li>Step 1 &nbsp;&nbsp;&nbsp;Personal Information</li>
          <li>Step 2 &nbsp;&nbsp;&nbsp;Verify Phone Number</li>
          <li class="red">Step 3 &nbsp;&nbsp;&nbsp;Vehicle Information</li>
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
          <form method="post" action="{{ route('rider_application3.addVehicle') }}">
              @csrf
            <!--GET RIDER ID-->
            @if (Session::has('rider_id'))
            <input type="hidden" name="rider_id" value=" {{ Session::get('rider_id') }}">
          @endif

          <div class="form-group">
            {{-- <label>Vehicle Type</label>
         
            <select class="form-control" name="vehicle_type">
            <option selected="true" disabled="disabled">- Select -</option>
            <option value="Owner" @if (old('vehicle_type') == 'Owner') selected="selected" @endif>Owner</option>
            <option value="Borrowed Motor" @if (old('vehicle_type') == 'Borrowed Motor') selected="selected" @endif>Borrowed Motor </option>
            <option value="Second hand" @if (old('vehicle_type') == 'Second hand') selected="selected" @endif>Second hand</option>
           <option value="Reacquire Motor" @if (old('vehicle_type') == 'Reacquire Motor') selected="selected" @endif>Reacquire Motor</option>
          </select> --}}
            
            <label>Vehicle</label>
            <select class="form-control form-control-lg" name="vehicle_type">
            <option selected="true" disabled="disabled">- Select -</option>
            <option value="Motorcycle" @if (old('vehicle_type') == 'Motorcycle') selected="selected" @endif>Motorcycle  </option>
            <option value="Bicycle" @if (old('vehicle_type') == 'Bicycle') selected="selected" @endif>Bicycle</option>
            </select>
            <span
            style="color:red;">
            @error('vehicle_type') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Plate Number</label>
            <input type="text" name="plate_number" value="{{ old('plate_number') }}" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('plate_number') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Motorcycle Displacement <samp style="color:#BD9140;font-size: 13px;">(CC 99-160)</samp></label>
            <input type="text" name="displacement" value="{{ old('displacement') }}" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('displacement') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Engine Number</label> 
            <input type="text" name="engine_number" value="{{ old('engine_number') }}" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('engine_number') {{ $message }}
            @enderror</span>
          </div>

          <div class="form-group">
            <label>Year Model</label>
            <input type="text" name="year_model" value="{{ old('year_model') }}" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            @error('year_model') {{ $message }}
            @enderror</span>
          </div>


           <br><br><br>
           <button class="next" type="submit" href="/rider_application4">Next</button>
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
