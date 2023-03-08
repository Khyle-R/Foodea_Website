<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>FOODEA</title>
    <link rel="shortcut icon" href="images/foodea.png" type="image">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/superadmin.css') }}" />
      <link rel="stylesheet" type="text/css" href="css/partner_application2.css" />

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
          <li>Step 3 &nbsp;&nbsp;&nbsp;Vehicle Information</li>
          <li>Step 4 &nbsp;Requirements</li>
          <li class="red">Step 5 &nbsp;Application Status</li>  
            </ul>
      </nav>

      <div class="sign-form">
     
           <div class="content-wrapper">  
               <h2>Application Status</h2>
                 <div class="row px-3">
                        </div>
                    
                         @foreach ($Data as $rider)
                        <div class="row px-3">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">

                                <div class="container-fluid px-5">

                                  <div class="row align-items-center my-5">
                                    <div class="col-md-6 ml-5">
                                      <div class="row align-items-center ">
                                   
                                      <img class="circle img-responsive mr-3" width="170" height="160" src="{{ url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id. '/'). $rider->rider_photo) }}" alt="">
                                      <div class="col flex-wrap">
                             
                                    
                            
                                      <h2 class="red-name"> {{ $rider->firstname . " ". $rider->lastname  }} </h2>
                                      </div>
                                      </div>
                                    </div> 
                                       

                                    <div class="col-sm-5">
                                      <div class="card-pending px-3">
                                      <div class="curve card-body text-center">
                                      <h4 class="yellow">{{ $rider->status }}</h4>
                                      </div>
                                      </div>
                                    </div>  
                                  </div>  

                                  <div class="row justify-content-between">
                                    <div class="col-sm-5 ml-sm-5">
                                      <h4 class="title-border flex-wrap mb-4">Personal Information</h4>
                       
                                       <div class="row px-3">
                                        <label class="black width">First Name</label>
                                        <p class="black ml-5">{{ $rider->firstname }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Middle Name</label>
                                        <p class="black ml-5">{{ $rider->middlename }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Last Name</label>
                                        <p class="black ml-5">{{ $rider->lastname }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Email Address</label>
                                        <p class="black ml-5">{{ $rider->email }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Mobile Number</label>
                                        <p class="black ml-5">{{ $rider->mobile_number }}</p>
                                      </div>
                                     
                                       <div class="row px-3">
                                        <label class="black width">City</label>
                                        <p class="black ml-5">{{ $rider->city }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Barangay</label>
                                        <p class="black ml-5">{{ $rider->barangay }}</p>
                                      </div>
                                      <div class="row px-3">
                                        <label class="black width">Zip Code</label>
                                        <p class="black ml-5">{{ $rider->zip_code }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Address</label>
                                        <p class="black ml-5 spacing">{{ $rider->address }}</p>
                                      </div>
                                    </div>

                                     <div class="col-sm-5 mr-5">
                                      <h4 class="title-border mb-4">Vehicle Information</h4>
                                      <div class="row px-3">

                                        <label class="black width">Vehicle Type</label>
                                        <p class=" black ml-5">{{ $rider->vehicle_type }}</p>
                                      </div>
                                      @if($rider->vehicle_ownership) 
                                      <div class="row px-3">
                                        <label class="black width">Vehicle Ownership</label>
                                        <p class="black ml-5">{{ $rider->vehicle_ownership }}</p>
                                      </div>
                                      @endif
                                      @if($rider->plate_number) 
                                        <div class="row px-3">
                                        <label class="black width">Plate Number</label>
                                        <p class="black ml-5">{{ $rider->plate_number }}</p>
                                      </div>
                                      @endif
                                      @if($rider->displacement) 
                                        <div class="row px-3">
                                        <label class="black width">Motorcycle Displacement</label>
                                        <p class="black ml-5">{{ $rider->displacement }}</p>
                                      </div>
                                      @endif
                                      @if($rider->engine_number) 
                                        <div class="row px-3">
                                        <label class="black width">Engine Number</label>
                                        <p class="black ml-5">{{ $rider->engine_number }}</p>
                                      </div>
                                      @endif
                                       @if($rider->year_model) 
                                      <div class="row px-3">
                                        <label class="black width">Year Model</label>
                                        <p class="black ml-5">{{ $rider->year_model }}</p>
                                      </div>
                                      @endif
                                       <h4 class="title-border mb-4 mt-4">Emergency Contact</h4>
                                      <div class="row px-3">

                                        <label class="black width">Name</label>
                                        <p class=" black ml-5">{{ $rider->emergency_name }}</p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Relationship</label>
                                        <p class="black ml-5">{{ $rider->relationship }}</p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Contact Number</label>
                                        <p class="black ml-5">{{ $rider->contact_number }}</p>
                                      </div>
                                     
                                    </div>
                                  </div>

                                  <div class="row align-items-center justify-content-between mt-5">
                                    <div class="col-sm-5 ml-sm-5">
                                      <h4 class="title-border flex-wrap mb-4">Uploaded Documents</h4>
                       
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Rider Photo</label>
                                             <p class="black ml-5 spacing">{{ $rider->rider_photo }}</p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Driver License</label>
                                          <p class="black ml-5">{{ $rider->driver_license }}</p>
                                      </div>
                                      <div class="row px-3 mt-2">
                                        <label class="black width">Licence back Back</label>
                                         <p class="black ml-5">{{ $rider->license_back }}</p>
                                      </div>
                                       @if($rider->official_receipt) 
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Official Receipt</label>
                                          <p class="black ml-5">{{ $rider->official_receipt }}</p>
                                      </div>
                                        @endif
                                         @if($rider->cert_registration) 
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Certificate of Registration</label>
                                          <p class="black ml-5">{{ $rider->cert_registration }}</p>
                                      </div>
                                        @endif
                                      @if ($rider->vehicle_ownership == 'Borrowed')
                                          <div class="row px-3 mt-2">
                                        <label class="black width">Authorization letter</label>
                                         <p class="black ml-5">{{ $rider->auth_letter }}</p>
                                      </div>
                                        
                                      @endif
                                       @if ($rider->vehicle_ownership == 'Second-hand')
                                          <div class="row px-3 mt-2">
                                        <label class="black width">Notarized Deed of Sale</label>
                                         <p class="black ml-5">{{ $rider->deed_sale }}</p>
                                      </div>
                                        
                                      @endif
                                    
                                       <div class="row px-3 mt-2">
                                        <label class="black width">NBI Clearance</label>
                                         <p class="black ml-5">{{ $rider->nbi_clearance }}</p>
                                      </div>
                                       @if($rider->drug_test) 
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Drug Test</label>
                                         <p class="black ml-5">{{ $rider->drug_test }}</p>
                                      </div>
                                      @endif
                                       @if($rider->vehicle_front) 
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Vehicle Front</label>
                                         <p class="black ml-5">{{ $rider->vehicle_front }}</p>
                                      </div>
                                      @endif
                                      <div class="row px-3 mt-2">
                                        <label class="black width ">Vehicle Side</label>
                                         <p class="black ml-5">{{ $rider->vehicle_side }}</p>
                                      </div>
                                       @if($rider->vehicle_back) 
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Vehicle Back</label>
                                         <p class="black ml-5">{{ $rider->vehicle_back }}</p>
                                      </div>
                                      @endif
                                       @endforeach
                                    </div>
                                     <div class="col-sm-5 ml-sm-5">
                                   <div class="row px-2 mt-2">

                                      @if(Session::get('registerID'))
                                    <a href="/rider_logout" class="button-red btn btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Sign Out</a>
                                 @else
                                     <a href="/" class="button-red btn btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Done</a>
                                    @endif

                                  </div>
                                 
                                  </div> 
                                  
                                  </div>

                                </div>      
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
    <!-- Scroller -->
    </div>

  </body>
</html>