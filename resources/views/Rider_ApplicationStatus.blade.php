<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    
    <title>FOODEA</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/partner_application2.css">
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
          <a href="/" class="nav_logo">
              <i class="bx bx-log-out nav_icon text-white"></i>
              <span class="nav_logo-name">Back to Website</span>
          </a>
            <div class="nav_list logos">
              <div class="title d-flex pb-3 ps-2 gap-1 align-items-center">
              <img src="image/foodea.png" style="width: 50px">FOODEA
            </div>
              @if(Session::get('registerID'))
            <div href="#" class="nav_link active red py-3 ms-2">
              <span class="nav_linknumber"><i class="mdi mdi-account-circle"></i></span> 
              <span class="nav_name">Application Status</span>
            </div>  
             @else
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
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">4</span>
              <span class="nav_name">Requirements</span>
            </div>
            <div href="#" class="nav_link active red py-3 ms-2">
              <span class="nav_linknumber">5</span> 
              <span class="nav_name">Application Status</span>
            </div>
            @endif
           
          </div>
        </div>
        </div>  
      </nav>
    </div>
    <!-- Content Here -->
    <!-- Form -->
    <!-- <div class="container sign-form"> -->
    <div class="content-wrapper container mt-2">
          <div class="right">
               <h2>Application Status</h2>
                 <div class="row px-2">
                        </div>

                         @foreach ($Data as $rider)
                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">

                                <div class="container-fluid">

                                  <div class="row align-items-center my-5 gap-3">
                                    <div class="col-md-6 ml-5">
                                      <div class="row align-items-center ">
                                   
                                        <div class="text-center">
                                      <img class="circle img-fluid mr-3" src="{{ $rider->rider_photo }}" alt="">
                                     </div>

                                      <h2 class="red-name text-center pt-3"> {{ $rider->firstname . " ". $rider->lastname  }} </h2>
                                  
                                      </div>
                                    </div> 
                                       

                                     <div class="col-sm-12 col-lg-5">
                                      @if($rider->status == 'Pending')
                                      <div class="card-pending py-4 px-4 mx-0 mx-md-5 rounded">
                                         <div class="">
                                      <h4 class="text-center text-white">{{ $rider->status }}</h4>
                                      </div>
                                        @elseif($rider->status == 'Rejected')
                                        <div class="card-rejected py-4 px-4 mx-0 mx-md-5 rounded">
                                           <div class="">
                                      <h4 class="text-center text-white">{{ $rider->status }}</h4>
                                      </div>
                                          @elseif($rider->status == 'Accepted')
                                           <a href="/download_app">
                                        <div class="card-accepted py-4 px-4 mx-0 mx-md-5 rounded">
                                           <div class="">
                                        <h4 class="text-center text-white">
                                       Download App
                                      </h4>
                                      </div>
                                      </a>
                                        @endif
                                     
                                      </div>
                                    </div>  
                                  </div>  
                    
                                  <div class="row justify-content-around">
                                    <div class="col-sm-5 ml-sm-5">
                                      <h4 class="title-border flex-wrap mb-4">Personal Information</h4>
                       
                                       <div class="row px-2">
                                        <label class="black width">First Name</label>
                                        <p class="black ml-5">{{ $rider->firstname }}</p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Middle Name</label>
                                        <p class="black ml-5">{{ $rider->middlename }}</p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Last Name</label>
                                        <p class="black ml-5">{{ $rider->lastname }}</p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Email Address</label>
                                        <p class="black ml-5">{{ $rider->email }}</p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Mobile Number</label>
                                        <p class="black ml-5">{{ $rider->mobile_number }}</p>
                                      </div>
                                     
                                       <div class="row px-2">
                                        <label class="black width">City</label>
                                        <p class="black ml-5">{{ $rider->city }}</p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Barangay</label>
                                        <p class="black ml-5">{{ $rider->barangay }}</p>
                                      </div>
                                      <div class="row px-2">
                                        <label class="black width">Zip Code</label>
                                        <p class="black ml-5">{{ $rider->zip_code }}</p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Address</label>
                                        <p class="black ml-5 spacing">{{ $rider->address }}</p>
                                      </div>
                                    </div>

                                     <div class="col-sm-5">
                                      <h4 class="title-border mb-4">Vehicle Information</h4>
                                      <div class="row px-2">

                                        <label class="black width">Vehicle Type</label>
                                        <p class=" black ml-5">{{ $rider->vehicle_type }}</p>
                                      </div>
                                      @if($rider->vehicle_ownership) 
                                      <div class="row px-2">
                                        <label class="black width">Vehicle Ownership</label>
                                        <p class="black ml-5">{{ $rider->vehicle_ownership }}</p>
                                      </div>
                                      @endif
                                      @if($rider->plate_number) 
                                        <div class="row px-2">
                                        <label class="black width">Plate Number</label>
                                        <p class="black ml-5">{{ $rider->plate_number }}</p>
                                      </div>
                                      @endif
                                      @if($rider->displacement) 
                                        <div class="row px-2">
                                        <label class="black width">Motorcycle Displacement</label>
                                        <p class="black ml-5">{{ $rider->displacement }}</p>
                                      </div>
                                      @endif
                                      @if($rider->engine_number) 
                                        <div class="row px-2">
                                        <label class="black width">Engine Number</label>
                                        <p class="black ml-5">{{ $rider->engine_number }}</p>
                                      </div>
                                      @endif
                                       @if($rider->year_model) 
                                      <div class="row px-2">
                                        <label class="black width">Year Model</label>
                                        <p class="black ml-5">{{ $rider->year_model }}</p>
                                      </div>
                                      @endif
                                       <h4 class="title-border mb-4 mt-4">Emergency Contact</h4>
                                      <div class="row px-2">

                                        <label class="black width">Name</label>
                                        <p class=" black ml-5">{{ $rider->emergency_name }}</p>
                                      </div>
                                        <div class="row px-2">
                                        <label class="black width">Relationship</label>
                                        <p class="black ml-5">{{ $rider->relationship }}</p>
                                      </div>
                                        <div class="row px-2">
                                        <label class="black width">Contact Number</label>
                                        <p class="black ml-5">{{ $rider->contact_number }}</p>
                                      </div>
                                     
                                    </div>
                                  </div>

                                  <div class="row align-items-center justify-content-around mt-5">
                                    <div class="updoc col-sm-5 ml-sm-5">
                                      <h4 class="title-border flex-wrap mb-4">Uploaded Documents</h4>
                       
                              
                                       <div class="row px-2 mt-2">
                                        <label class="black width">Driver License</label>
                                        <img src="{{$rider->driver_license}}" alt="">
                                          <p class="black ml-5">{{ $rider->driver_license }}</p>
                                      </div>
                                      <div class="row px-2 mt-2">
                                        <label class="black width">Licence back Back</label>
                                        <img src="{{$rider->license_back}}" alt=""> 
                                        <p class="black ml-5">{{ $rider->license_back }}</p>
                                      </div>
                                       @if($rider->official_receipt) 
                                       <div class="row px-2 mt-2">
                                        <label class="black width">Official Receipt</label>
                                        <p class="black ml-5">{{ $rider->official_receipt }}</p>
                                        <a href="{{$rider->official_receipt }}"><button>Download</button></a>
                                      </div>
                                        @endif
                                         @if($rider->cert_registration) 
                                       <div class="row px-2 mt-2">
                                        <label class="black width">Certificate of Registration</label>
                                        <p class="black ml-5">{{ $rider->cert_registration }}</p>
                                        <a href="{{$rider->cert_registration}}"><button>Download</button></a> 
                                      </div>
                                        @endif
                                      @if ($rider->vehicle_ownership == 'Borrowed')
                                          <div class="row px-2 mt-2">
                                        <label class="black width">Authorization letter</label>
                                        <p class="black ml-5">{{ $rider->auth_letter }}</p>
                                        <a href="{{$rider->auth_letter}}"><button>Download</button></a>
                                      </div>
                                        
                                      @endif
                                       @if ($rider->vehicle_ownership == 'Second-hand')
                                          <div class="row px-2 mt-2">
                                        <label class="black width">Notarized Deed of Sale</label>
                                        <p class="black ml-5">{{ $rider->deed_sale }}</p>
                                        <a href="{{$rider->deed_sale}}"><button>Download</button></a> 
                                      </div>
                                        
                                      @endif
                                    
                                       <div class="row px-2 mt-2">
                                        <label class="black width">NBI Clearance</label>
                                        <p class="black ml-5">{{ $rider->nbi_clearance }}</p>
                                        <a href="{{$rider->nbi_clearance}}"><button>Download</button></a> 
                                      </div>
                                       @if($rider->drug_test) 
                                       <div class="row px-2 mt-2">
                                        <label class="black width">Drug Test</label>
                                        <p class="black ml-5">{{ $rider->drug_test }}</p>
                                        <a href="{{$rider->drug_test}}"><button>Download</button></a> 
                                      </div>
                                      @endif
                                       @if($rider->vehicle_front) 
                                       <div class="row px-2 mt-2">
                                        <label class="black width">Vehicle Front</label>
                                        <img src="{{$rider->vehicle_front}}" alt="">
                                         <p class="black ml-5">{{ $rider->vehicle_front }}</p>
                                      </div>
                                      @endif
                                      <div class="row px-2 mt-2">
                                        <label class="black width ">Vehicle Side</label>
                                        <img src="{{$rider->vehicle_side}}" alt="">
                                         <p class="black ml-5">{{ $rider->vehicle_side }}</p>
                                      </div>
                                       @if($rider->vehicle_back) 
                                       <div class="row px-2 mt-2">
                                        <label class="black width">Vehicle Back</label>
                                        <img src="{{$rider->vehicle_back}}" alt="">
                                         <p class="black ml-5">{{ $rider->vehicle_back }}</p>
                                      </div>
                                      @endif
                                       @endforeach
                                    </div>
                                     <div class="col-sm-5 ml-sm-5">
                                   <div class="row px-2 mt-2 align-items-center justify-content-center">

                                      @if(Session::get('registerID'))
                                    <a href="/rider_logout" class="button-red btn btn-lg w-75 text-white" data-toggle="modal" data-target="#exampleModalCenter">Sign Out</a>
                                 @else
                                     <a href="/" class="button-red btn btn-lg w-75 text-white" data-toggle="modal" data-target="#exampleModalCenter">Done</a>
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