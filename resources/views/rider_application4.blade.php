<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rider_application4.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
            <li>Step 3 &nbsp;&nbsp;&nbsp; Vehicle Information</li>
            <li class="red">Step 4 &nbsp;&nbsp;&nbsp; Requirements</li>
            <li>Step 5 &nbsp;&nbsp;&nbsp; Application Status</li>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="right-content">
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
              <button class="submit" type="submit">Submit</button>
                 </div>
                 
            </div>
            
              </form>
          </div>
        </div>
      </div>
    </div>  
  </body>
</html>