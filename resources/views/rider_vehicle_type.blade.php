    <!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <title>FOODEA Vehicle Informtion</title>
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
      <h3 class="header_title pt-2 pt-md-3">Rider Application</h3>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="" data-bs-toggle="modal" data-bs-target="#ExitModal" class="nav_logo">
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
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">1</span>
              <span class="nav_name">Personal Information</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">2</span>
              <span class="nav_name">Verify Phone Number</span>
            </div>
            <div href="#" class="nav_link active red py-3 ms-2">
              <span class="nav_linknumber">3</span>
              <span class="nav_name">Vehicle Information</span>
            </div>
            <!-- <div href="#" class="nav_link active py-3 ms-2">
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
      
       <!-- Form -->
    {{-- <div class="sign-form"> --}}
      <div class="content-wrapper container mt-5 pt-3 pt-md-4 px-3 px-md-5 py-2">
        <div class="col-12 col-sm-12 col-md-9 col-lg-7 justify-content-center align-items-center mx-auto px-0">
           <div class="right">
          <h2>Create your Account</h2>
          <p>Please fill up the form below.</p>
          <form method="post" action="{{ route('AddVehicleType') }}">
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
      
            <label>Vehicle Type</label>
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

            <h5 class="mt-4">Emergency Contact</h5>

             <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" value="{{ old('name') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('name') {{ $message }}
            @enderror</span>
            </div>

             <div class="form-group">
            <label>Relationship</label>
            <input name="relationship" type="text" value="{{ old('relationship') }}" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            @error('relationship') {{ $message }}
            @enderror</span>
            </div>

             <div class="form-group">
            <label>Phone</label>
            <input maxlength="10" onkeypress="return event.charCode>=48 && event.charCode<=57" name="phone" type="text" value="{{ old('phone') }}" class="form-control form-control-lg"/>
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
      <!-- Scroller -->
    </div>  

    
  <!-- EXIT Modal -->
        <div class="modal fade" id="ExitModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Exit Signup</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{ route('ExitSignup') }}">
              <div class="modal-body">
                Are you sure to discard your application?
              </div>
              <div class="modal-footer">
                <button type="button" class="white-btn" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="red-btn">Confirm</button>
                </form>
              </div>
            </div>
          </div>
        </div>

 <!-- </div> -->
    <!-- End Content Here -->
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
