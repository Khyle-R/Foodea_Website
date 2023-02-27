<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rider_application4.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <title>FOODEA Rider Requirements</title>
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
                    <li>Step 2 &nbsp;&nbsp;&nbsp;Business Information</li>
                    <li>Step 3 &nbsp;&nbsp;&nbsp;Verify Email Address</li>
                    <li class="red">Step 4 &nbsp;Requirements</li>
                    <li>Step 5 &nbsp;Application Status</li>
                  </ul>
            </nav>

      <div class="sign-form">
        <div class="content-wrapper">
          <div class="col-12 col-sm-10 col-md-11 col-lg-9 col-xl-6">
            <div class="right">
              <h2>Welcome, Juan</h2>
              <p>Here's the required steps to set up your account. 
                  Make sure the documents you upload matches the sample 
                  document or else the application process will be delayed.</p>

          <div class="form-container">
            <div class="btn-group">
              <form action="{{ route('rider_application4.SaveDocuments') }}" method="post" enctype="multipart/form-data">
             @csrf
             @if (Session::has('rider_id'))
            <input type="hidden" name="rider_id" value=" {{ Session::get('rider_id') }}">
            @endif

                <div class="requirements-title">
               <p>2x2 image Picture <span>(Required)</span></p>
               </div>
               <div class="requirements">
                 <img class="pic" src="image/1x1.png" alt="">
                <input type="file" name="image">
                  <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            @error('image') {{ $message }}
            @enderror</span>
                   </div>

              <div class="requirements-title">
              <p>Photo of your vehicle <span>(Required)</span></p>

               </div>
                <div class="requirements">
              <p>Front view<span> (Required)</span></p>
              <img src="image/front.png" alt="">
              <input type="file" name="vehicle_front">
               <span>File size up to 5mb only</span>
                 <span
              style="color:red;">
              @error('vehicle_front') {{ $message }}
             @enderror</span> 

               <p>Side view<span> (Required)</span></p>
                 <img src="image/side.png" alt="">
                  <input type="file" name="vehicle_side">
                   <span>File size up to 5mb only</span>
                <span
                style="color:red;">
                @error('vehicle_side') {{ $message }}
               @enderror</span>

                <p>Back view<span> (Required)</span></p>
                  <img src="image/back.png" alt="">
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
            <p>Original Authorization letter <span> (Required)</span></p>
               </div>
                <div class="requirements">
            <img src="image/cr.png" alt="">
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
            <p>Notarized Deed of Sale <span> (Required)</span></p>
               </div>
                <div class="requirements">
            <img src="image/cr.png" alt="">
              <input type="file" name="deed_sale">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            @error('deed_sale') {{ $message }}
            @enderror</span>
              </div>
          @endif
                 <div class="requirements-title">
              <p>Photo of your Professional drivers license ID <span> (Required)</span></p>
                 </div>
                    <div class="requirements">
                <p>Front<span> (Required)</span></p>
                <img src="image/front_id.png" alt="">
                <input type="file" name="license">
                 <span>File size up to 5mb only</span>
                   <span
               style="color:red;">
               @error('license') {{ $message }}
               @enderror</span>

                 <p>Back<span> (Required)</span></p>
                <img src="image/back_id.png" alt="">
                 <input type="file" name="license_back">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            @error('license_back') {{ $message }}
            @enderror</span>
              </div>

               <div class="requirements-title"> 
            <p>Certificate of Registration <span>(Required)</span></p>
               </div>
                <div class="requirements">
            <img src="image/cr.png" alt="">
              <input type="file" name="cr">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            @error('cr') {{ $message }}
            @enderror</span>
              </div>

               <div class="requirements-title">
               <p>Official Receipt of Vehicle Registration <span>(Required)</span></p>
               </div>
                <div class="requirements">
                  <img src="image/or.png" alt="">
                <input type="file" name="or">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            @error('or') {{ $message }}
            @enderror</span>
              </div>

               <div class="requirements-title">    
              <p>Drug Test Result <span>(Optional)</span></p>
               </div>
                <div class="requirements">
               <img src="image/drug-test.png" alt="">
                 <input type="file" name="drug_test">
                  <span>File size up to 5mb only</span>
              </div>

                  <div class="requirements-title">
              <p>NBI Clearance <span>(Required)</span></p>
                  </div>
                   <div class="requirements">
               <img src="image/nbi.png" alt="">
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
      <!-- Scroller -->
    </div>  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>