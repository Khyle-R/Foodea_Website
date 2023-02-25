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
                                     
                                            <img alt="" src="{{ url(('uploads/'.$rider->rider_id. '_' .$rider->firstname. '_' .$rider->lastname. '/'). $rider->rider_photo) }}">
                                  
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
                                                <div class="staff-msg"><a class="red-btn" href="#">{{ $rider->credit_score }}</a></div>
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
                                <th>Documents</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2x2 image Picture</td>
                                <td>{{ $rider->rider_photo }}</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                             <tr>
                                <td>Vehicle Photo</td>
                                <td>{{ $rider->vehicle_front }}</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                             <tr>
                                <td>Professional Drivers license ID</td>
                                <td>{{ $rider->driver_license }}</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <tr>
                                <td>Certificate of Registration</td>
                                <td>{{ $rider->cert_registration }}</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            @if ($rider->vehicle_ownership == 'Borrowed')
                              <tr>
                                <td>Authorization letter</td>
                                <td>{{ $rider->auth_letter }}</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                              <tr>
                                <td>Valid ID of the owner</td>
                                <td>{{  $rider->owner_id }}</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            @endif
                              @if ($rider->vehicle_ownership == 'Second-hand')
                              <tr>
                                <td>Valid ID of the owner</td>
                                <td>{{  $rider->deed_sale}}</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                              @endif
                            <tr>
                                <td>Official Receipt of Vehicle Registration</td>
                                <td>{{ $rider->official_receipt }}</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <tr>
                                <td>Drug Test Result</td>
                                <td>{{ $rider->drug_test }}</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <tr>
                                <td>NBI Clearance</td>
                                <td>{{ $rider->nbi_clearance }}</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

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
                                         <li>
                                            <div class="title">Vehicle Ownership</div>
                                            <div class="text">{{ $rider->vehicle_ownership }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Plate Number</div>
                                            <div class="text">{{ $rider->plate_number }}</div>
                                        </li>
                                        <li>
                                              <div class="title">Motorcycle Displacement</div>
                                            <div class="text">{{ $rider->displacement }}</div>
                                        </li>
                                        <br>
                                        <li>
                                            <div class="title">Engine Number</div>
                                            <div class="text">{{ $rider->engine_number }}</div>
                                        </li>
                                        <li>
                                            <div class="title">Year Model</div>
                                            <div class="text">{{ $rider->year_model }}</div>
                                        </li>
                                       
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body px-5">
                                    <h3 class="card-title">Vehicle</h3>
                                    <div class="card px-5">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100 px-5" height="500" src="{{ url(('uploads/'.$rider->rider_id. '_' .$rider->firstname. '_' .$rider->lastname. '/'). $rider->vehicle_front) }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100 px-5" height="500" src="{{ url(('uploads/'.$rider->rider_id. '_' .$rider->firstname. '_' .$rider->lastname. '/'). $rider->vehicle_side) }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100 px-5" height="500" src="{{ url(('uploads/'.$rider->rider_id. '_' .$rider->firstname. '_' .$rider->lastname. '/'). $rider->vehicle_back) }}" alt="Third slide">
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
                                <th>Order Number</th>
                                <th>Purchase Date</th>
                                <th>Customer Name</th>
                                <th>Payment Method</th>
                                <th>Order Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                           
                          
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
                            <form method="post" action="">
                                @csrf

                            <div class="form-group">
                            <h5>Primary</h5>
                            </div>

                             <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="first">Name</label>
                            <input type="text" value="{{ $rider->firstname }}" class="form-control input-border" id="first" placeholder="Firstname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="middle">Relationship</label>
                            <input type="text" value="{{ $rider->middlename }}" class="form-control input-border" id="middle" placeholder="Middlename">
                            </div>
                              </div>
                      
                             <div class="form-group">
                            <label for="barang">Contact Number</label>
                            <input type="text" value="{{ $rider->zip_code }}" class="form-control input-border" id="barang">
                            </div>

                                
                            <div class="form-group">
                            <h5>Secondary</h5>
                            </div>

                             <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="first">Name</label>
                            <input type="text" value="{{ $rider->firstname }}" class="form-control input-border" id="first" placeholder="Firstname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="middle">Relationship</label>
                            <input type="text" value="{{ $rider->middlename }}" class="form-control input-border" id="middle" placeholder="Middlename">
                            </div>
                              </div>
                      
                             <div class="form-group">
                            <label for="barang">Contact Number</label>
                            <input type="text" value="{{ $rider->zip_code }}" class="form-control input-border" id="barang">
                            </div>

                    
                       
                            <input type="hidden" name="id" value="{{ $rider->accepted_rider_id }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn red-btn">Confirm</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
           
                
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
            2020</span>
       
    </div>
</footer>
<!-- partial -->
</div>
@endsection