
<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <div class="row">
 <!---ALERT BOX --->
                    <?php if(Session::has('success')): ?>
                    <p style="display:none" class="popup"></p>
            <div class="success hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg"><?php echo e(Session::pull('success')); ?></span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
                    <?php endif; ?>
             
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
                                         <?php $__currentLoopData = $Data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                            <img alt="" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'). $rider->rider_photo)); ?>">
                                  
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"></h3>
                                                <h6 class="text-muted"></h6>
                                                <small class="text-muted"></small>
                                               
                                                    
                                                
                                                <div class="staff-id">User ID : <?php echo e($rider->accepted_rider_id); ?></div>
                                                <div class="small doj text-muted">Date Applied : <?php echo e($rider->date); ?></div>
                                                <div class="staff-msg"><a class="red-btn" href="#"><?php echo e($rider->credit_score); ?></a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Phone:</div>
                                                    <div class="text"><?php echo e($rider->mobile_number); ?></div>
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    <div class="text"><?php echo e($rider->email); ?></div>
                                                </li>
                                              
                                                    <li>
                                                        
                                                        <div class="title">Birthday:</div>
                                                        <div class="text">sd</div>
                                                      
                                                       
                                                    </li>
                                                    <li>
                                                      
                                                        <div class="title">Gender:</div>
                                                        <div class="text"><?php echo e($rider->gender); ?></div>

                                                  
                                                    </li>
                                                    <li>
                                                      
                                                        <div class="title">Age:</div>
                                                        <div class="text"><?php echo e($rider->age); ?></div>

                                                  
                                                    </li>
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
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
                                            <div class="text"><?php echo e($rider->firstname); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Middle Name</div>
                                            <div class="text"><?php echo e($rider->middlename); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Last Name</div>
                                            <div class="text"><?php echo e($rider->lastname); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Age</div>
                                            <div class="text"><?php echo e($rider->age); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Address</div>
                                            <div class="text"><?php echo e($rider->address); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">City</div>
                                            <div class="text"><?php echo e($rider->city); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Barangay</div>
                                            <div class="text"><?php echo e($rider->barangay); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">ZIP Code</div>
                                            <div class="text"><?php echo e($rider->zip_code); ?></div>
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
                                            <div class="text"><?php echo e($rider->emergency_name); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Relationship</div>
                                            <div class="text"><?php echo e($rider->relationship); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Phone </div>
                                            <div class="text"><?php echo e($rider->contact_number); ?></div>
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
                                <td><?php echo e($rider->rider_photo); ?></td>
                                 <td><a class="red-btn" href="" data-toggle="modal" data-target="#ViewModal1"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="/download_file/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->rider_photo); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                             <tr>
                                <td>Vehicle Photo</td>
                                <td><?php echo e($rider->vehicle_side); ?></td>
                                 <td><a class="red-btn" href="" data-toggle="modal" data-target="#ViewModal2"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="/download_vehicle/<?php echo e($rider->rider_id); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                             <tr>
                                <td>Professional Drivers license ID</td>
                                <td><?php echo e($rider->driver_license); ?></td>
                                 <td><a class="red-btn" href="" data-toggle="modal" data-target="#ViewModal3"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="/download_license/<?php echo e($rider->rider_id); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <?php if($rider->cert_registration): ?> 
                            <tr>
                                <td>Certificate of Registration</td>
                                <td><?php echo e($rider->cert_registration); ?></td>
                               <td><a class="red-btn" href="/display_pdf/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->cert_registration); ?>"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="/download_file/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->cert_registration); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>
                            </tr>
                            <?php endif; ?>
                            
                            <?php if($rider->vehicle_ownership == 'Borrowed'): ?>
                              <tr>
                                <td>Authorization letter</td>
                                <td><?php echo e($rider->auth_letter); ?></td>
                                <td><a class="red-btn" href="/display_pdf/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->auth_letter); ?>"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="/download_file/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->auth_letter); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
   
                            <?php endif; ?>
                              <?php if($rider->vehicle_ownership == 'Second-hand'): ?>
                              <tr>
                                <td>Deed Of Sale</td>
                                <td><?php echo e($rider->deed_sale); ?></td>
                                 <td><a class="red-btn" href="/display_pdf/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->deed_sale); ?>"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="/download_file/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->deed_sale); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                              <?php endif; ?>
                              <?php if($rider->official_receipt): ?> 
                            <tr>
                                <td>Official Receipt of Vehicle Registration</td>
                                <td><?php echo e($rider->official_receipt); ?></td>
                                 <td><a class="red-btn" href="/display_pdf/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->official_receipt); ?>" ><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="/download_file/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->official_receipt); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <?php endif; ?>
                            <?php if($rider->drug_test): ?> 
                            <tr>
                                <td>Drug Test Result</td>
                                <td><?php echo e($rider->drug_test); ?></td>
                                 <td><a class="red-btn" href="/display_pdf/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->drug_test); ?>" ><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="/download_file/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->drug_test); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <?php endif; ?>
                            <tr>
                                <td>NBI Clearance</td>
                                <td><?php echo e($rider->nbi_clearance); ?></td>
                                <td><a class="red-btn" href="/display_pdf/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->nbi_clearance); ?>" ><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="/download_file/<?php echo e($rider->rider_id); ?>/<?php echo e($rider->nbi_clearance); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

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
                                            <div class="text"><?php echo e($rider->vehicle_type); ?></div>
                                        </li>
                                        <?php if($rider->vehicle_ownership): ?> 
                                        <li>
                                            <div class="title">Vehicle Ownership</div>
                                            <div class="text"><?php echo e($rider->vehicle_ownership); ?></div>
                                        </li>
                                        <?php endif; ?>
                                        <?php if($rider->plate_number): ?> 
                                        <li>
                                            <div class="title">Plate Number</div>
                                            <div class="text"><?php echo e($rider->plate_number); ?></div>
                                        </li>
                                        <?php endif; ?>
                                        <?php if($rider->displacement): ?> 
                                        <li>
                                              <div class="title">Displacement</div>
                                            <div class="text"><?php echo e($rider->displacement); ?></div>
                                        </li>
                                         <?php endif; ?>
                                         <?php if($rider->engine_number): ?> 
                                        <li>
                                            <div class="title">Engine Number</div>
                                            <div class="text"><?php echo e($rider->engine_number); ?></div>
                                        </li>
                                        <?php endif; ?>
                                        <?php if($rider->year_model): ?> 
                                        <li>
                                            <div class="title">Year Model</div>
                                            <div class="text"><?php echo e($rider->year_model); ?></div>
                                        </li>
                                        <?php endif; ?>
                                       
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                       <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body px-5">
                                    <h3 class="card-title">Vehicle</h3>
                                    <div class="card px-5">
                         <?php if($rider->vehicle_front && $rider->vehicle_side && $rider->vehicle_back): ?>                
                        <!--IF EXIST 3-->
                          <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                            <img class="d-block" height="600" width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'.'vehicle/'). $rider->vehicle_front)); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600" width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'.'vehicle/'). $rider->vehicle_side)); ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600" width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'.'vehicle/'). $rider->vehicle_back)); ?>" alt="Third slide">
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
                        <?php endif; ?>
                        <!--IF EXIST 3-->
                        
                         <?php if($rider->vehicle_side && $rider->vehicle_front == null && $rider->vehicle_back == null): ?>                
                         <!--IF EXIST 1-->
                          <div id="carouselExampleControls1sg" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                            <img class="d-block" height="500" width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'.'vehicle/'). $rider->vehicle_side)); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="500" width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'.'vehicle/'). $rider->vehicle_side)); ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="500" width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'.'vehicle/'). $rider->vehicle_back)); ?>" alt="Third slide">
                            </div>
                        </div>
                        
                        </div>
                         <?php endif; ?>
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
                            <form method="post" action="<?php echo e(route('RiderProfileUpdate')); ?>">
                                <?php echo csrf_field(); ?>
                             <div class="form-row">

                            <div class="form-group col-md-6">
                            <label for="first">First Name</label>
                            <input name="firstname" type="text" value="<?php echo e($rider->firstname); ?>" class="form-control input-border" id="first" placeholder="Firstname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="middle">Middle Name</label>
                            <input name="middlename" type="text" value="<?php echo e($rider->middlename); ?>" class="form-control input-border" id="middle" placeholder="Middlename">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="last">Last Name</label>
                           <input name="lastname" type="text" value="<?php echo e($rider->lastname); ?>" class="form-control input-border" id="last" placeholder="Lastname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="inputState">Gender</label>
                            <select id="inputState"  name="gender" class="custom-select">
                                <option selected><?php echo e($rider->gender); ?></option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                            </div>

                            <div class="form-group col-md-6">
                            <label for="suff">Age</label>
                           <input type="text" name="age" value="<?php echo e($rider->age); ?>" class="form-control input-border" id="suff" placeholder="Suffix">
                            </div>

                             <div class="form-group col-md-6">
                            <label for="barang">Zip Code</label>
                            <input type="text" name="zip_code" value="<?php echo e($rider->zip_code); ?>" class="form-control input-border" id="barang">
                            </div>

                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?php echo e($rider->email); ?>" class="form-control input-border" id="email" placeholder="Email">
                        </div>
                         <div class="form-group">
                            <label for="email">Mobile Number</label>
                            <input type="text" name="mobile_number" value="<?php echo e($rider->mobile_number); ?>" class="form-control input-border" id="email" placeholder="Mobile number">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address</label>
                            <input type="text" name="address" value="<?php echo e($rider->address); ?>" class="form-control input-border" id="inputAddress2" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" name="city" value="<?php echo e($rider->city); ?>" class="form-control input-border" id="inputCity">
                            </div>
                           <div class="form-group col-md-6">
                            <label for="barang">Barangay</label>
                            <input type="text" name="barangay" value="<?php echo e($rider->barangay); ?>" class="form-control input-border" id="barang">
                            </div>
                          
                        </div>
                       
                            <input type="hidden" name="accepted_rider_id" value="<?php echo e($rider->accepted_rider_id); ?>">
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
                            <form method="post" action="<?php echo e(route('RiderEmergencyUpdate')); ?>">
                                <?php echo csrf_field(); ?>

                            <div class="form-group">
                            <h5>Primary</h5>
                            </div>

                             <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="first">Name</label>
                            <input name="name" type="text" value="<?php echo e($rider->firstname); ?>" class="form-control input-border" id="first" placeholder="Firstname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="middle">Relationship</label>
                            <input name="relationship" type="text" value="<?php echo e($rider->middlename); ?>" class="form-control input-border" id="middle" placeholder="Middlename">
                            </div>
                              </div>
                      
                             <div class="form-group">
                            <label for="barang">Contact Number</label>
                            <input name="contact_number" type="text" value="<?php echo e($rider->zip_code); ?>" class="form-control input-border" id="barang">
                            </div>

                            <input type="hidden" name="id" value="<?php echo e($rider->accepted_rider_id); ?>">
                             <input type="hidden" name="rider_id" value="<?php echo e($rider->rider_id); ?>">
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
                           <img height="400" width="400" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'). $rider->rider_photo)); ?>" alt="">
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
                        <?php if($rider->vehicle_front && $rider->vehicle_side && $rider->vehicle_back): ?>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block" height="600"  width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'. 'vehicle/'). $rider->vehicle_front)); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600" width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'. 'vehicle/'). $rider->vehicle_side)); ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600"  width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'. 'vehicle/'). $rider->vehicle_back)); ?>" alt="Third slide">
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
                        <?php endif; ?>
                          <?php if($rider->vehicle_side && $rider->vehicle_front == null && $rider->vehicle_back == null): ?>                
                            <div id="carouselExampleControlsassd" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block" height="600"  width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'. 'vehicle/'). $rider->vehicle_side)); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600" width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'. 'vehicle/'). $rider->vehicle_side)); ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="600"  width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'. 'vehicle/'). $rider->vehicle_back)); ?>" alt="Third slide">
                            </div>
                        </div>
                        
                        </div>
                        <?php endif; ?>
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
                            <img class="d-block" height="350"  width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'. $rider->rider_id.  '/'. 'driver license/'). $rider->driver_license)); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="350" width="100%" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$rider->rider_id.  '/'. 'driver license/'). $rider->license_back)); ?>" alt="Second slide">
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
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
            2020</span>
       
    </div>
</footer>
<!-- partial -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.superadmin_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/superadmin/superadmin_riderprofile.blade.php ENDPATH**/ ?>