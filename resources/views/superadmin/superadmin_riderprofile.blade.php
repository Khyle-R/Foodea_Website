@extends('superadmin.superadmin_index')
@section('content')

<div class="content-wrapper">
    <div class="row">
 <!---ALERT BOX --->
                    @if (Session::has('success'))
                    <p style="display:none" class="popup"></p>
            <div class="success hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg">{{ Session::pull('success') }}</span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
                    @endif
             
              <!---/ALERT BOX --->
    </div>
    <div class="page-header">
        <h3 class="page-title black">Rider Application</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Menu</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Rider Application
                </li>
           
            </ol>
        </nav>
    </div>
    <div class="card mb-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                         @foreach ($Data as $rider)
                                     
                                            <img alt="" src="{{ $rider->rider_photo }}">
                                  
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"></h3>
                                                <h6 class="text-muted"></h6>
                                                <small class="text-muted"></small>
                                               
                                                    
                                                
                                                <div class="staff-id">User ID : {{ $rider->accepted_rider_id }}</div>
                                                <div class="small doj text-muted">Date Applied : {{ $rider->date }}</div>
                                                <div class="staff-msg"><a class="red-btn" href="#">{{ $rider->credit_score }}</a>
                                                <a class="red-btn" href="#" data-toggle="modal" data-target="#Contact_modal">Message</a></div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Phone:</div>
                                                    <div class="text">{{ $rider->mobile_number }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    <div class="text">{{ $rider->email }}</div>
                                                </li>
                                              
                                                    <li>
                                                        
                                                        <div class="title">Birthday:</div>
                                                        <div class="text">sd</div>
                                                      
                                                       
                                                    </li>
                                                    <li>
                                                      
                                                        <div class="title">Gender:</div>
                                                        <div class="text">{{ $rider->gender }}</div>

                                                  
                                                    </li>
                                                    <li>
                                                      
                                                        <div class="title">Age:</div>
                                                        <div class="text">{{ $rider->age }}</div>

                                                  
                                                    </li>
                                                   @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="mdi mdi-grease-pencil"></i></a></div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card tab-box">
                <div class="row user-tabs">
                    <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                        <ul class="nav nav-tabs nav-tabs-bottom">
                            <li class="nav-item"><a href="#emp_profile" data-toggle="tab" class="nav-link tab-font active">Profile</a></li>
                            <li class="nav-item"><a href="#emp_vehicle" data-toggle="tab" class="nav-link tab-font">Vehicle</a></li>
                            <li class="nav-item"><a href="#emp_documents" data-toggle="tab" class="nav-link tab-font">Documents </a></li>
                             <li class="nav-item"><a href="#emp_history" data-toggle="tab" class="nav-link tab-font">Order History </a></li>
                        </ul>
                    </div>
                </div>
            </div>

             <div class="tab-content">
                <!-- Profile Info Tab -->
                <div id="emp_profile" class="pro-overview tab-pane fade show active">
                    <div class="row">
                        <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#personal_info_modal"><i class="mdi mdi-pencil"></i></a></h3>
                                   
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Firstname</div>
                                            <div class="text">{{ $rider->firstname }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Middle Name</div>
                                            <div class="text">{{ $rider->middlename }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Last Name</div>
                                            <div class="text">{{ $rider->lastname }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Age</div>
                                            <div class="text">{{ $rider->age }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Address</div>
                                            <div class="text">{{ $rider->address }}</div>
                                        </li>
                                        <li>
                                            <div class="title">City</div>
                                            <div class="text">{{ $rider->city }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Barangay</div>
                                            <div class="text">{{ $rider->barangay }}</div>
                                        </li>
                                        <li>
                                            <div class="title">ZIP Code</div>
                                            <div class="text">{{ $rider->zip_code }}</div>
                                        </li>
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Emergency Contact<a href="#" class="edit-icon" data-toggle="modal" data-target="#Emergeny_contact_modal"><i class="mdi mdi-pencil"></i></a></h3>
                                    <h5 class="section-title">Primary</h5>
                                    <ul class="personal-info">
                                       <li>
                                            <div class="title">Name</div>
                                            <div class="text">{{ $rider->emergency_name }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Relationship</div>
                                            <div class="text">{{ $rider->relationship }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Phone </div>
                                            <div class="text">{{  $rider->contact_number  }}</div>
                                        </li>
                                    </ul>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Profile Info Tab -->


                  <!-- Documents Info Tab -->
                 <div class="tab-pane fade" id="emp_documents">
                  
                        <div class="col-md-12 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                 
                                <div class="card-body">
                                     <h3 class="card-title">Documents</h3>
                                   <div class="table-responsive">
                   <table id="example2" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>File name</th>
                                <th>View</th>
                                <th>Documents</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2x2 image Picture</td>
                                <td>{{ $rider->rider_photo }}</td>
                                 <td><a class="red-btn" href="" data-toggle="modal" data-target="#ViewModal1"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="{{ $rider->rider_photo }}"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                             <tr>
                                <td>Vehicle Photo</td>
                                <td>{{ $rider->vehicle_side }}</td>
                                 <td><a class="red-btn" href="" data-toggle="modal" data-target="#ViewModal2"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="{{ $rider->rider_id }}"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                             <tr>
                                <td>Professional Drivers license ID</td>
                                <td>{{ $rider->driver_license }}</td>
                                 <td><a class="red-btn" href="" data-toggle="modal" data-target="#ViewModal3"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="{{ $rider->rider_id }}"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            @if($rider->cert_registration) 
                            <tr>
                                <td>Certificate of Registration</td>
                                <td>{{ $rider->cert_registration }}</td>
                               <td><a class="red-btn" href="{{ $rider->cert_registration }}"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="{{ $rider->cert_registration }}"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>
                            </tr>
                            @endif
                            
                            @if ($rider->vehicle_ownership == 'Borrowed')
                              <tr>
                                <td>Authorization letter</td>
                                <td>{{ $rider->auth_letter }}</td>
                                <td><a class="red-btn" href="{{ $rider->auth_letter }}"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="{{ $rider->auth_letter }}"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
   
                            @endif
                              @if ($rider->vehicle_ownership == 'Second-hand')
                              <tr>
                                <td>Deed Of Sale</td>
                                <td>{{ $rider->deed_sale}}</td>
                                 <td><a class="red-btn" href="{{ $rider->deed_sale }}"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="{{ $rider->deed_sale }}"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                              @endif
                              @if($rider->official_receipt) 
                            <tr>
                                <td>Official Receipt of Vehicle Registration</td>
                                <td>{{ $rider->official_receipt }}</td>
                                 <td><a class="red-btn" href="/display_pdf/{{ $rider->rider_id }}/{{ $rider->official_receipt }}" ><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="{{ $rider->official_receipt }}"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            @endif
                            @if($rider->drug_test) 
                            <tr>
                                <td>Drug Test Result</td>
                                <td>{{ $rider->drug_test }}</td>
                                 <td><a class="red-btn" href="{{ $rider->drug_test }}" ><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="{{ $rider->drug_test }}"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            @endif
                            <tr>
                                <td>NBI Clearance</td>
                                <td>{{ $rider->nbi_clearance }}</td>
                                <td><a class="red-btn" href="{{ $rider->nbi_clearance }}" ><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="{{ $rider->nbi_clearance }}" ><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                          
                        </tbody>
                    
                    </table>
                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        
                </div>
                
                 <!-- /Documents Info Tab -->

                <!-- Vehicle Info Tab -->
                 <div class="tab-pane fade" id="emp_vehicle">
                    <div class="row">
                        <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Vehicle Informations </h3>
                                   
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Vehicle Type</div>
                                            <div class="text">{{ $rider->vehicle_type }}</div>
                                        </li>
                                        @if($rider->vehicle_ownership) 
                                        <li>
                                            <div class="title">Vehicle Ownership</div>
                                            <div class="text">{{ $rider->vehicle_ownership }}</div>
                                        </li>
                                        @endif
                                        @if($rider->plate_number) 
                                        <li>
                                            <div class="title">Plate Number</div>
                                            <div class="text">{{ $rider->plate_number }}</div>
                                        </li>
                                        @endif
                                        @if($rider->displacement) 
                                        <li>
                                              <div class="title">Displacement</div>
                                            <div class="text">{{ $rider->displacement }}</div>
                                        </li>
                                         @endif
                                         @if($rider->engine_number) 
                                        <li>
                                            <div class="title">Engine Number</div>
                                            <div class="text">{{ $rider->engine_number }}</div>
                                        </li>
                                        @endif
                                        @if($rider->year_model) 
                                        <li>
                                            <div class="title">Year Model</div>
                                            <div class="text">{{ $rider->year_model }}</div>
                                        </li>
                                        @endif
                                       
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                       <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body px-5">
                                    <h3 class="card-title">Vehicle</h3>
                                    <div class="card px-5">
                         @if($rider->vehicle_front && $rider->vehicle_side && $rider->vehicle_back)                
                        <!--IF EXIST 3-->
                          <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                            <img class="d-block" height="600" width="100%" src="{{ $rider->vehicle_front }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600" width="100%" src="{{ $rider->vehicle_side }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600" width="100%" src="{{ $rider->vehicle_back }}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                        @endif
                        <!--IF EXIST 3-->
                        
                         @if($rider->vehicle_side && $rider->vehicle_front == null && $rider->vehicle_back == null)                
                         <!--IF EXIST 1-->
                          <div id="carouselExampleControls1sg" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                            <img class="d-block" height="500" width="100%" src="{{ $rider->vehicle_side }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="500" width="100%" src="{{ $rider->vehicle_side }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="500" width="100%" src="{{ $rider->vehicle_back }}" alt="Third slide">
                            </div>
                        </div>
                        {{-- <a class="carousel-control-prev" href="#carouselExampleControls1dds" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls1Dd" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> --}}
                        </div>
                         @endif
                        <!--IF EXIST 1-->
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Vehicle Info Tab -->

                  <!-- History Info Tab -->
                 <div class="tab-pane fade" id="emp_history">
                  
                        <div class="col-md-12 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                 
                                <div class="card-body">
                                     <h3 class="card-title">Order History</h3>
                                   <div class="table-responsive">
                    <table id="example" class="table" style="width:100%">
                        <thead>
                        
                            <tr>
                                <th>Rider ID</th>
                                <th>Name</th>
                                <th>Customer ID</th>
                                <th>Status</th>
                                 <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($RiderOrder as $rider)
                            <tr>
                                <td>{{ $rider->rider_id }}</td>
                                <td>{{ $rider->firstname }} {{ $rider->lastname }}</td>
                                <td>{{ $rider->customer_id }} </td>
                                <td>{{ $rider->order_status }}</td>
                                 <td>{{ $rider->date }}</td>
                            </tr>
                            @endforeach
                       
                           
                          
                        </tbody>
                    
                    </table>
                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        
                </div>
                 <!-- /History Info Tab -->
               
             </div>
</div>
                 <!-- Personal Information Modal -->
                    <div class="modal fade" id="personal_info_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Personal Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('RiderProfileUpdate') }}">
                                @csrf
                             <div class="form-row">

                            <div class="form-group col-md-6">
                            <label for="first">First Name</label>
                            <input name="firstname" type="text" value="{{ $rider->firstname }}" class="form-control input-border" id="first" placeholder="Firstname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="middle">Middle Name</label>
                            <input name="middlename" type="text" value="{{ $rider->middlename }}" class="form-control input-border" id="middle" placeholder="Middlename">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="last">Last Name</label>
                           <input name="lastname" type="text" value="{{ $rider->lastname }}" class="form-control input-border" id="last" placeholder="Lastname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="inputState">Gender</label>
                            <select id="inputState"  name="gender" class="custom-select">
                                <option selected>{{ $rider->gender }}</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                            </div>

                            <div class="form-group col-md-6">
                            <label for="suff">Age</label>
                           <input type="text" name="age" value="{{ $rider->age }}" class="form-control input-border" id="suff" placeholder="Suffix">
                            </div>

                             <div class="form-group col-md-6">
                            <label for="barang">Zip Code</label>
                            <input type="text" name="zip_code" value="{{ $rider->zip_code }}" class="form-control input-border" id="barang">
                            </div>

                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="{{ $rider->email }}" class="form-control input-border" id="email" placeholder="Email">
                        </div>
                         <div class="form-group">
                            <label for="email">Mobile Number</label>
                            <input type="text" name="mobile_number" value="{{ $rider->mobile_number }}" class="form-control input-border" id="email" placeholder="Mobile number">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address</label>
                            <input type="text" name="address" value="{{ $rider->address }}" class="form-control input-border" id="inputAddress2" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" name="city" value="{{ $rider->city }}" class="form-control input-border" id="inputCity">
                            </div>
                           <div class="form-group col-md-6">
                            <label for="barang">Barangay</label>
                            <input type="text" name="barangay" value="{{ $rider->barangay }}" class="form-control input-border" id="barang">
                            </div>
                          
                        </div>
                       
                            <input type="hidden" name="accepted_rider_id" value="{{ $rider->accepted_rider_id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn red-btn">Confirm</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Contact  Modal -->
                    <div class="modal fade" id="Contact_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('RiderMessage') }}">
                                @csrf
                             
                        
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" value="" class="form-control input-border" id="email">
                        </div>
                         <div class="form-group">
                            <textarea  name="message" placeholder="Message" value="" class="form-control input-border" rows="6" cols="50"></textarea>
                        </div>   
                            <input type="hidden" name="accepted_rider_id" value="{{ $rider->accepted_rider_id }}">
                             <input type="hidden" name="rider_id" value="{{ $rider->rider_id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn red-btn">Confirm</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>

                 <!-- Emergency Contact Modal -->
                    <div class="modal fade" id="Emergeny_contact_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Emergency Contact</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('RiderEmergencyUpdate') }}">
                                @csrf

                            <div class="form-group">
                            <h5>Primary</h5>
                            </div>

                             <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="first">Name</label>
                            <input name="name" type="text" value="{{ $rider->firstname }}" class="form-control input-border" id="first" placeholder="Firstname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="middle">Relationship</label>
                            <input name="relationship" type="text" value="{{ $rider->middlename }}" class="form-control input-border" id="middle" placeholder="Middlename">
                            </div>
                              </div>
                      
                             <div class="form-group">
                            <label for="barang">Contact Number</label>
                            <input name="contact_number" type="text" value="{{ $rider->zip_code }}" class="form-control input-border" id="barang">
                            </div>

                            <input type="hidden" name="id" value="{{ $rider->accepted_rider_id }}">
                             <input type="hidden" name="rider_id" value="{{ $rider->rider_id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn red-btn">Confirm</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
           
            <!-- Modal 2x2 -->
                    <div class="modal fade" id="ViewModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content px-2 py-2">
                        <div class="">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="image text-center">
                           <img height="400" width="400" src="{{ $rider->rider_photo }}" alt="">
                       </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <!-- Modal vehicle -->
                    <div class="modal fade" id="ViewModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content px-2 py-2">
                        <div class="">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="image text-center">
                        @if($rider->vehicle_front && $rider->vehicle_side && $rider->vehicle_back)
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block" height="600"  width="100%" src="{{ $rider->vehicle_front }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600" width="100%" src="{{ $rider->vehicle_side }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600"  width="100%" src="{{ $rider->vehicle_back }}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                        @endif
                          @if($rider->vehicle_side && $rider->vehicle_front == null && $rider->vehicle_back == null)                
                            <div id="carouselExampleControlsassd" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block" height="600"  width="100%" src="{{ $rider->vehicle_side }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600" width="100%" src="{{ $rider->vehicle_side }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600"  width="100%" src="{{ $rider->vehicle_back }}" alt="Third slide">
                            </div>
                        </div>
                        {{-- <a class="carousel-control-prev" href="#carouselExampleControlssdx" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControlsdsd" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> --}}
                        </div>
                        @endif
                       </div>
                        </div>
                        </div>
                    </div>
                    </div>
                       <!-- Modal vehicle -->
                    <div class="modal fade" id="ViewModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content px-2 py-2">
                        <div class="">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="image text-center">
                            <div id="carouselExampleControlss" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block" height="350"  width="100%" src="{{ $rider->driver_license }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="350" width="100%" src="{{ $rider->license_back }}" alt="Second slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControlss" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControlss" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                           
                       </div>
                        </div>
                        </div>
                    </div>
                    </div>
                
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022. All Rights Reserved</span>
       
    </div>
</footer>
<!-- partial -->
</div>
@endsection