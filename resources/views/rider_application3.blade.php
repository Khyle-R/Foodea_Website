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
            <a href="/"><img src="image/vector.png" /></a>
            <p>Back to website</p>
          </div>
          <div class="logo">
            <a href="#"><img src="image/foodea.png" /></a>
            <h2>FOODEA</h2>
          </div>

          <ul>
            <h1>Rider Application</h1>
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
            
          <h2>Create your Account</h2>
          <p>Please fill up the form below.</p>
          <form method="post" action="{{ route('rider_application3.addVehicle') }}">
              @csrf
            <!--GET RIDER ID-->
            @if (Session::has('rider_id'))
            <input type="hidden" name="rider_id" value=" {{ Session::get('rider_id') }}">
          @endif

          <div class="form-container">
            {{-- <label>Vehicle Type</label>
         
            <select class="form-control" name="vehicle_type">
            <option selected="true" disabled="disabled">- Select -</option>
            <option value="Owner" @if (old('vehicle_type') == 'Owner') selected="selected" @endif>Owner</option>
            <option value="Borrowed Motor" @if (old('vehicle_type') == 'Borrowed Motor') selected="selected" @endif>Borrowed Motor </option>
            <option value="Second hand" @if (old('vehicle_type') == 'Second hand') selected="selected" @endif>Second hand</option>
           <option value="Reacquire Motor" @if (old('vehicle_type') == 'Reacquire Motor') selected="selected" @endif>Reacquire Motor</option>
          </select> --}}
            
             <label>Vehicle</label>
         
            <select class="form-control" name="vehicle_type">
            <option selected="true" disabled="disabled">- Select -</option>
            <option value="Motorcycle" @if (old('vehicle_type') == 'Motorcycle') selected="selected" @endif>Motorcycle  </option>
            <option value="Bicycle" @if (old('vehicle_type') == 'Bicycle') selected="selected" @endif>Bicycle</option>
            </select>


            <span
            style="color:red;">
            @error('vehicle_type') {{ $message }}
            @enderror</span>

            <label>Plate Number</label>
            <input type="text" name="plate_number" value="{{ old('plate_number') }}"/>
            <span
            style="color:red;">
            @error('plate_number') {{ $message }}
            @enderror</span>

            <label>Motorcycle Displacement <samp style="color:#BD9140;font-size: 13px;">(CC 99-160)</samp></label>
            <input type="text" name="displacement" value="{{ old('displacement') }}"/>
            <span
            style="color:red;">
            @error('displacement') {{ $message }}
            @enderror</span>

            <label>Engine Number</label> 
            <input type="text" name="engine_number" value="{{ old('engine_number') }}"/>
            <span
            style="color:red;">
            @error('engine_number') {{ $message }}
            @enderror</span>

            <label>Year Model</label>
            <input type="text" name="year_model" value="{{ old('year_model') }}"/>
            <span
            style="color:red;">
            @error('year_model') {{ $message }}
            @enderror</span>


           <br><br><br>
           <button class="next" type="submit" href="/rider_application4">Next</button>
            </form>
          </div>
        </div>
      </div>
    </div>  
  </body>
</html>
