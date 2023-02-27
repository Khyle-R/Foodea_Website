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
              <li class="nav-item nav-category">Merchant Application</li>
              <li>Step 1 &nbsp;&nbsp;&nbsp;Personal Information</li>
              <li>Step 2 &nbsp;&nbsp;&nbsp;Business Information</li>
              <li>Step 3 &nbsp;&nbsp;&nbsp;Verify Email Address</li>
              <li>Step 4 &nbsp;Requirements</li>
              <li class="red">Step 5 &nbsp;Application Status</li>
            </ul>
      </nav>

      <div class="sign-form">
     
           <div class="content-wrapper">
              <div class="right">
               <h2>Application Status</h2>
                 <div class="row px-3">
                          
                        </div>
                    
                         @foreach ($Data as $partner)
                        <div class="row px-3">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">

                                <div class="container-fluid px-5">

                                  <div class="row align-items-center my-5">
                                    <div class="col-md-6 ml-5">
                                      <div class="row align-items-center ">
                                   
                                      <img class="circle img-responsive mr-3" width="170" height="160" src="{{ url('uploads/'. 'merchant_documents'. '/'. $partner->merchant_id. '/'. $partner->logo) }}" alt="">
                                      <div class="col flex-wrap">
                             
                                    
                            
                                      <h2 class="red-name"> {{ $partner->firstname . " ". $partner->lastname  }} </h2>
                                      <h2 class="sub-text">{{ $partner->vehicle_type }}</h2>
                                      </div>
                                      </div>
                                    </div> 
                                       

                                    <div class="col-sm-5">
                                      <div class="card-pending px-3">
                                      <div class="curve card-body text-center">
                                      <h4 class="yellow">{{ $partner->status }}</h4>
                                      </div>
                                      </div>
                                    </div>  
                                  </div>  

                                  <div class="row justify-content-between">
                                    <div class="col-sm-5 ml-sm-5">
                                      <h4 class="title-border flex-wrap mb-4">Personal Information</h4>
                       
                                       <div class="row px-3">
                                        <label class="black width">First Name</label>
                                        <p class="black ml-5">{{ $partner->firstname }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Middle Name</label>
                                        <p class="black ml-5">{{ $partner->middlename }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Last Name</label>
                                        <p class="black ml-5">{{ $partner->lastname }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Email Address</label>
                                        <p class="black ml-5">{{ $partner->email }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Mobile Number</label>
                                        <p class="black ml-5">{{ $partner->store_number }}</p>
                                      </div>
                                     
                                       <div class="row px-3">
                                        <label class="black width">City</label>
                                        <p class="black ml-5">{{ $partner->city }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Barangay</label>
                                        <p class="black ml-5">{{ $partner->barangay }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Address</label>
                                        <p class="black ml-5 spacing">{{ $partner->address }}</p>
                                      </div>
                                    </div>

                                     <div class="col-sm-5 mr-5">
                                      <h4 class="title-border mb-4">Business Information</h4>
                                      <div class="row px-3">

                                        <label class="black width">Business Name</label>
                                        <p class=" black ml-5">{{ $partner->business_name }}</p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Business Type</label>
                                        <p class="black ml-5">{{ $partner->business_type }}</p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Date Founded</label>
                                        <p class="black ml-5">{{ $partner->date_founded }}</p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Country</label>
                                        <p class="black ml-5">{{ $partner->country }}</p>
                                      </div>
                                       
                                      <div class="row px-3">
                                        <label class="black width">City</label>
                                        <p class="black ml-5">{{ $partner->city }}</p>
                                      </div>
                                      <div class="row px-3">
                                        <label class="black width">Registered Barangay</label>
                                        <p class="black ml-5">{{ $partner->barangay }}</p>
                                      </div>
                                      <div class="row px-3">
                                        <label class="black width">Registered Street</label>
                                        <p class="black ml-5">{{ $partner->street }}</p>
                                      </div>
                                      <div class="row px-3">
                                        <label class="black width">Registered Postal Code</label>
                                        <p class="black ml-5">{{ $partner->postal_code }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Store Number</label>
                                        <p class="black ml-5">{{ $partner->store_number }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Store Email</label>
                                        <p class="black ml-5">{{ $partner->store_email }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Business Address</label>
                                        <p class="black ml-5 spacing">{{ $partner->address }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Mission</label>
                                        <p class="black ml-5 spacing">{{ $partner->mission }}</p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Store Vision</label>
                                        <p class="black ml-5 spacing">{{ $partner->vision }}</p>
                                      </div>
                                      
                                    </div>
                                  </div>

                                  <div class="row align-items-center justify-content-between mt-5">
                                    <div class="col-sm-5 ml-sm-5">
                                      <h4 class="title-border flex-wrap mb-4">Uploaded Documents</h4>
                       
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Business Logo</label>
                                             <p class="black ml-5">{{ $partner->logo }}</p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Business Menu</label>
                                          <p class="black ml-5">{{ $partner->menu_photo }}</p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Business Permit</label>
                                          <p class="black ml-5">{{ $partner->business_permit }}</p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">BIR Certificate</label>
                                          <p class="black ml-5">{{ $partner->bir_cert }}</p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Barangay Permit</label>
                                         <p class="black ml-5">{{ $partner->barangay_permit }}</p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">DTI Certificate</label>
                                         <p class="black ml-5">{{ $partner->dti_cert }}</p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Front License ID</label>
                                         <p class="black ml-5">{{ $partner->front_license }}</p>
                                      </div>
                                      <div class="row px-3 mt-2">
                                        <label class="black width">Back License ID</label>
                                         <p class="black ml-5">{{ $partner->back_license }}</p>
                                      </div>
                                       @endforeach

                                    </div>
                                     <div class="col-sm-5 ml-sm-5">
                                   <div class="row px-3 mt-2">
                                    <a href="/" class="button-red btn btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Done</a>
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