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
            <h1>Merchant Application</h1>
           <li>Step 1 &nbsp;&nbsp;&nbsp;Profile Information</li>
            <li>Step 2 &nbsp;&nbsp;&nbsp;Business Information</li>
             <li>Step 3 &nbsp; Verify Email Address</li>
            <li class="red">Step 4 &nbsp; Requirements</li>
            <li>Step 5 &nbsp; Applicataion Status</li>
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

              <form action="{{ route('partner_requirements.SaveDocuments') }}" method="post" enctype="multipart/form-data">
             @csrf
                @if (Session::has('merchant_id'))
            <input type="hidden" name="merchant_id" value=" {{ Session::get('merchant_id') }}">
          @endif

                  <div class="requirements-title"> 
            <p>Clear image of your menu<span> (Required)</span></p>
               </div>
                <div class="requirements">
            <img src="image/menu_sample.png" alt="">
              <input type="file" name="menu_photo">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            @error('menu_photo') {{ $message }}
            @enderror</span>
              </div>


                <div class="requirements-title"> 
            <p>Business Permit<span> (Required)</span></p>
               </div>
                <div class="requirements">
            <img src="image/business_permit.png" alt="">
              <input type="file" name="business_permit">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            @error('business_permit') {{ $message }}
            @enderror</span>
              </div>

                <div class="requirements-title"> 
            <p>BIR Certificate<span> (Required)</span></p>
               </div>
                <div class="requirements">
            <img src="image/BIR.png" alt="">
              <input type="file" name="bir_cert">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            @error('bir_cert') {{ $message }}
            @enderror</span>
              </div>

               <div class="requirements-title"> 
            <p>Barangay Permit <span>(Required)</span></p>
               </div>
                <div class="requirements">
            <img src="image/barangay_permit.png" alt="">
              <input type="file" name="barangay_permit">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            @error('barangay_permit') {{ $message }}
            @enderror</span>
              </div>

               <div class="requirements-title">
               <p>DTI Certificate <span> (Required)</span></p>
               </div>
                <div class="requirements">
                  <img src="image/DTI.png" alt="">
                <input type="file" name="dti_cert">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            @error('dti_cert') {{ $message }}
            @enderror</span>
              </div>

           
                  <div class="requirements-title">
              <p>Valid Government issued ID <span> (Required)</span></p>
              <br>
               <p>Types of valid ID (Driver's license, Passport, SSS ID, Postal ID, Voter ID)</p>
            
            </div>
                    <div class="requirements">
                <p>Front<span> (Required)</span></p>
                <img src="image/front_id.png" alt="">
                <input type="file" name="front_license">
                 <span>File size up to 5mb only</span>
                   <span
               style="color:red;">
               @error('front_license') {{ $message }}
               @enderror</span>

                 <p>Back<span> (Required)</span></p>
                <img src="image/back_id.png" alt="">
                 <input type="file" name="back_license">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            @error('back_license') {{ $message }}
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