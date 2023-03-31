<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <title>Partner Business Information</title>
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
    <link rel="stylesheet" href="css/rider_application2.css">
  </head>
  <body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <h3 class="header_title pt-2 pt-md-3">Partner Application</h3>
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
            <div href="#" class="nav_link active red py-3 ms-2">
              <span class="nav_linknumber">2</span>
              <span class="nav_name">Business Information</span>
            </div>
            <!-- <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">3</span>
              <span class="nav_name">Vehicle Information</span>
            </div> -->
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
    </div>
    <!-- Content Here -->
    <!-- Form -->
    <!-- <div class="container sign-form"> -->
        <div class="content-wrapper container mt-2 px-3 py-2">
          <div class="col-12 col-sm-12 col-md-9 col-lg-7 justify-content-center align-items-center mx-auto px-0">
              <div class="right">

                
      <!-- show Modal -->
            <div class="modal fade" id="ShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable  modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Getting latitute and longitude</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  
                  <div class="modal-body">

                    <div class="mt-3">
                  <label>
                    <b>Step 1:</b>
                    <span>  Go to this link</span><a href="https://www.google.com/maps" style="color:red;"> https://www.google.com/maps</a> <span> and search the location of your business</span>
                  </label>
                    </div>

                     <div class="mt-5 mb-5">
                  <label>
                    <b>Step 2:</b>
                    <span>  Right click the pinned location and copy the</span> <br><span>first value which is latitude (ex. 14.72249) and second value longitude (ex. 121.04019)</span>
                  </label>
                  <div class="text-center">
                  <img class="img-fluid mt-3" src="{{ asset('newimage/gmap.png') }}" alt="">
                </div>    
                </div>

                <div class="mt-5">
                  <label>
                    <b>Step 3:</b>
                    <span>  Paste the copied values to given inputs</span>
                  </label>
                  <div class="text-center">
                  <img class="img-fluid mt-3" src="{{ asset('newimage/latitude.png') }}" alt="">
                </div>    
                    </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" data-bs-dismiss="modal" class="red-btn">Close</button>
                  
                  </div>
                </div>
              </div>
            </div>

        <!-- End Content Here -->

              <h2>Secure your Account</h2>
              <p>Please fill out the form below.</p>

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
                <label for="birthday">Date Founded</label>
              <input class="form-control form-control-lg" type="date" id="birthday" name="date_founded">
            <span
                style="color:red;">
                @error('date_founded') {{ $message }}
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

              <div class="form-group row mt-4">
             
               <div class="col-lg-6">
                <label>Longitude  <a href="#" data-bs-toggle="modal" data-bs-target="#ShowModal" style="color:#BD9140;font-size: 13px;"> (Click here for example)</a></label> 
                <input type="text"  name="longitude" class="decimal form-control form-control-lg"/>
                <span
                style="color:red;">
                @error('longitude') {{ $message }}
                @enderror</span>
              </div>
               <div class="col-lg-6">
                <label>Latidute</label> 
                <input  type="text" name="latitude" class="decimal form-control form-control-lg"/>
                <span
                style="color:red;">
                @error('latitude') {{ $message }}
                @enderror</span>
              </div>
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
                <input type="text" maxlength="4" onkeypress="return event.charCode>=48 && event.charCode<=57" name="postal_code" class="form-control form-control-lg"/>
                <span
                style="color:red;">
                @error('postal_code') {{ $message }}
                @enderror</span>
              </div>

              <div class="form-group">
                <label>Store Phone No.</label>
                <input type="text" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode<=57" name="store_number" class="form-control form-control-lg"/>
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

              
              <div class="form-group">
              <label for="exampleFormControlTextarea1">Mission</label>
              <textarea name="mission" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <span
                style="color:red;">
                @error('mission') {{ $message }}
                @enderror</span>
            </div>

                <div class="form-group">
              <label for="exampleFormControlTextarea1">Vision</label>
              <textarea name="vision" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              <span
                style="color:red;">
                @error('vision') {{ $message }}
                @enderror</span>
              </div>
              <br>
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

    <!-- End Content Here -->
        

    <!-- Show Hide Password -->
        <script>
        $('.decimal').keyup(function(){
    var val = $(this).val();
        if(isNaN(val)){
            val = val.replace(/[^0-9\.]/g,'');
            if(val.split('.').length>2) 
                val =val.replace(/\.+$/,"");
        }
        $(this).val(val); 
    });
        </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/verification.js') }}"></script>
    <script src = "js/sidebar.js"></script>
  </body>
</html>
