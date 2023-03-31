<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <title>FOODEA rider Requirements</title>
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
    <link rel="stylesheet" href="css/rider_application4.css">
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
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">3</span>
              <span class="nav_name">Vehicle Information</span>
            </div>
            <div href="#" class="nav_link active red py-3 ms-2">
              <span class="nav_linknumber">4</span>
              <span class="nav_name">Requirements</span>
            </div>
            <!-- <div href="#" class="nav_link active py-3 ms-2">
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
              <h2>Welcome</h2>
              <h3>Here are some examples of required documents you have to submit to set up your account. Make sure the documents you upload are clear and readable or else the application process will be delayed.
              </h3>

          <div class="form-container">
            <div class="btn-group">
              <form action="{{ route('rider_application4.SaveDocuments') }}" method="post" enctype="multipart/form-data">
             @csrf
             @if (Session::has('rider_id'))
            <input type="hidden" name="rider_id" value=" {{ Session::get('rider_id') }}">
            @endif

                <div class="requirements-title">
               <p class="text-danger">2x2 image Picture<span> (Required JPG or PNG)</span></p>
               </div>
               <div class="requirements">
                 <img class="pic" src="{{ asset('image/1x1.png')}}" alt="">
                <input type="file" name="image">
                  <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            @error('image') {{ $message }}
            @enderror</span>
                   </div>
              <hr class="new">
              <div class="requirements-title">
              <p class="text-danger">Photo of your vehicle <span>(Required JPG or PNG)</span></p>
              </div>
                <div class="requirements">
              <p>Front view<span> (Required)</span></p>
              <img src="{{ asset('image/front.png')}}" alt="">
              <input type="file" name="vehicle_front">
               <span>File size up to 5mb only</span>
                 <span
              style="color:red;">
              @error('vehicle_front') {{ $message }}
             @enderror</span> 

               <p>Side view<span> (Required)</span></p>
                 <img src="{{ asset('image/side.png')}}" alt="">
                  <input type="file" name="vehicle_side">
                   <span>File size up to 5mb only</span>
                <span
                style="color:red;">
                @error('vehicle_side') {{ $message }}
               @enderror</span>

                <p>Back view<span> (Required)</span></p>
                  <img src="{{ asset('image/back.png')}}" alt="">
                <input type="file" name="vehicle_back">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            @error('vehicle_back') {{ $message }}
            @enderror</span>
                </div>
              
              <!--- BORROWED-->  
              @if(Session::get('vehicle') == 'Borrowed')
                
          
               <div class="requirements-title"> 
            <p>Original Authorization letter <span> (Required PDF)</span></p>
               </div>
                <div class="requirements">
            <img src="{{ asset('image/auth_letter.png') }}" alt="">
              <input type="file" name="auth_letter">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            @error('auth_letter') {{ $message }}
            @enderror</span>
              </div>

                 
           @endif

           @if(Session::get('vehicle') == 'Second-hand')
                  <!--- SECOND HAND-->  
               <div class="requirements-title"> 
            <p>Notarized Deed of Sale <span> (Required PDF)</span></p>
               </div>
                <div class="requirements">
            <img src="{{ asset('image/deed_sale.png')}}" alt="">
              <input type="file" name="deed_sale">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            @error('deed_sale') {{ $message }}
            @enderror</span>
              </div>
          @endif
            <hr class="new">
                <div class="requirements-title">
              <p class="text-danger">Photo of your Professional drivers license ID <span> (Required JPG or PNG)</span></p>
                 </div>
                    <div class="requirements">
                <p>Front<span> (Required)</span></p>
                <img src="{{ asset('image/front_id.png')}}" alt="">
                <input type="file" name="license">
                 <span>File size up to 5mb only</span>
                   <span
               style="color:red;">
               @error('license') {{ $message }}
               @enderror</span>

                 <p>Back<span> (Required)</span></p>
                <img src="{{ asset('image/back_id.png')}}" alt="">
                 <input type="file" name="license_back">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            @error('license_back') {{ $message }}
            @enderror</span>
              </div>

              <hr class="new">
               <div class="requirements-title"> 
            <p class="text-danger">Certificate of Registration <span>(Required PDF)</span></p>
               </div>
                <div class="requirements">
            <img src="{{ asset('image/cr.png')}}" alt="">
              <input type="file" name="cr">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            @error('cr') {{ $message }}
            @enderror</span>
              </div>
              
                <hr class="new">
               <div class="requirements-title">
               <p class="text-danger">Official Receipt of Vehicle Registration <span>(Required PDF)</span></p>
               </div>
                <div class="requirements">
                  <img src="{{ asset('image/or.png')}}" alt="">
                <input type="file" name="or">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            @error('or') {{ $message }}
            @enderror</span>
              </div>

              <hr class="new">
               <div class="requirements-title">    
              <p class="text-danger">Drug Test Result <span>(Optional PDF)</span></p>
               </div>
                <div class="requirements">
               <img src="{{ asset('image/drug-test.png')}}" alt="">
                 <input type="file" name="drug_test">
                  <span>File size up to 5mb only</span>
              </div>
              <hr class="new">
                  <div class="requirements-title">
              <p class="text-danger">NBI Clearance <span>(Required PDF)</span></p>
                  </div>
                   <div class="requirements">
               <img src="{{ asset('image/nbi.png')}}" alt="">
                <input type="file" name="nbi">
                   <span>File size up to 5mb only</span>
               
                 <span
            style="color:red;">
            @error('nbi') {{ $message }}
            @enderror</span>
                 </div>
                 <div class="form-group">
                  <div class="col-sm-10 d-flex justify-content-center">
                    <button Value="submit" type="submit" class="btn btn-danger w-50">Submit</button>
                  </div>
                  </div>
                </div>
              </form>
            </div>
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