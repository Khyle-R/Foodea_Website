
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
        <h3 class="page-title black">Partner Application</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Menu</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Partner Application
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
                                         <?php $__currentLoopData = $Data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                                          <img alt="" src="<?php echo e($partner->logo); ?>">
                                  
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"></h3>
                                                <h6 class="text-muted"></h6>
                                                <small class="text-muted"></small>
                                               
                                                    
                                                
                                                <div class="staff-id"><?php echo e($partner->business_name); ?></div>
                                                <div class="small doj text-muted">Date Applied : <?php echo e($partner->date); ?></div>
                                                <div class="staff-msg"><a class="red-btn" href="#"><?php echo e($partner->ratings); ?></a>
                                                <a class="red-btn" href="#" data-toggle="modal" data-target="#Contact_modal">Message</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                             <ul class="personal-info">
                                               <li>
                                                    <div class="title">Founded</div>
                                                    <div class="text"><?php echo e($partner->date_founded); ?></div>
                                                </li>
                                                <li>
                                                    <div class="title">Contact</div>
                                                    <div class="text"><?php echo e($partner->store_number); ?></div>
                                               <li>
                                                        
                                                        <div class="title">Email</div>
                                                        <div class="text"><?php echo e($partner->email); ?></div>
                                                      
                                                       
                                                    </li>
                                                    <li>
                                                      
                                                        <div class="title">Country</div>
                                                        <div class="text"><?php echo e($partner->country); ?></div>

                                                  
                                                    </li>
                                                    <li>
                                                      
                                                        <div class="title">Type</div>
                                                        <div class="text"><?php echo e($partner->business_type); ?></div>

                                                  
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
                            <li class="nav-item"><a href="#emp_vehicle" data-toggle="tab" class="nav-link tab-font">Business</a></li>
                            <li class="nav-item"><a href="#emp_documents" data-toggle="tab" class="nav-link tab-font">Documents </a></li>
                            <li class="nav-item"><a href="#emp_products" data-toggle="tab" class="nav-link tab-font">Products </a></li>
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
                                    <h3 class="card-title">Personal Informations<a href="#" class="edit-icon" data-toggle="modal" data-target="#PersonalModal"><i class="mdi mdi-pencil"></i></a></h3>
                                   
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Firstname</div>
                                            <div class="text"><?php echo e($partner->firstname); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Middle Name</div>
                                            <div class="text"><?php echo e($partner->middlename); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Last Name</div>
                                            <div class="text"><?php echo e($partner->lastname); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Age</div>
                                            <div class="text"><?php echo e($partner->age); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Address</div>
                                            <div class="text"><?php echo e($partner->address); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">City</div>
                                            <div class="text"><?php echo e($partner->city); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Barangay</div>
                                            <div class="text"><?php echo e($partner->barangay); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Country</div>
                                            <div class="text"><?php echo e($partner->country); ?></div>
                                        </li>
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">About Company </h3>
                                   <ul class="personal-info">

                                    <h5 class="section-title mb-4">Mission </h5>  
                                    <li>
                                            <div class="text"><?php echo e($partner->mission); ?>

                                            </div>
                                        </li>
                                        
                                    </ul>
                                    <hr>

                                    <ul class="personal-info">
                                         <h5 class="section-title mb-4">Vision </h5>  
                                        <li>
            
                                            <div class="text"><?php echo e($partner->vision); ?></div>
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
                                <td>Business Logo</td>
                                <td><?php echo e($partner->logo); ?></td>
                                 <td><a class="red-btn" href="" data-toggle="modal" data-target="#ViewModal1"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="<?php echo e($partner->logo); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>   
                            <tr>
                                <td>Menu Photo</td>
                                <td><?php echo e($partner->menu_photo); ?></td>
                               <td><a class="red-btn" data-toggle="modal" data-target="#ViewModal2"><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="<?php echo e($partner->menu_photo); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>

                            <tr>
                                <td>Business Permit</td>
                                <td><?php echo e($partner->business_permit); ?></td>
                                 <td><a class="red-btn" href="<?php echo e($partner->business_permit); ?>" ><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="<?php echo e($partner->business_permit); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <tr>
                                <td>BIR Certificate</td>
                                <td><?php echo e($partner->bir_cert); ?></td>
                                 <td><a class="red-btn" href="<?php echo e($partner->bir_cert); ?>" ><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="<?php echo e($partner->bir_cert); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <tr>
                                <td>Barangay Permit</td>
                                <td><?php echo e($partner->barangay_permit); ?></td>
                                <td><a class="red-btn" href="<?php echo e($partner->barangay_permit); ?>" ><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="<?php echo e($partner->barangay_permit); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                           <tr>
                                <td>DTI Certificate</td>
                                <td><?php echo e($partner->dti_cert); ?></td>
                                 <td><a class="red-btn" href="<?php echo e($partner->dti_cert); ?>" ><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="<?php echo e($partner->dti_cert); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <tr>
                                <td>Valid Government ID</td>
                                <td><?php echo e($partner->front_license); ?></td>
                                <td><a class="red-btn" data-toggle="modal" data-target="#ViewModal3" ><i class="download-btn mdi mdi-eye mr-2"></i>View</a> </td>
                                <td><a class="red-btn" href="<?php echo e($partner->merchant_id); ?>"><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                        </tbody>
                    
                    </table>
                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        
                </div>
                 <!-- /Documents Info Tab -->

                <!-- Business Info Tab -->
                 <div class="tab-pane fade" id="emp_vehicle">
                    <div class="row">
                        <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Business Informations<a href="#" class="edit-icon" data-toggle="modal" data-target="#BusinessModal"><i class="mdi mdi-pencil"></i></a></h3>
                                   
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Business Type</div>
                                            <div class="text"><?php echo e($partner->business_type); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Business Name</div>
                                            <div class="text"><?php echo e($partner->business_name); ?></div>
                                        </li>
                                        <li>
                                              <div class="title">Address</div>
                                            <div class="text"><?php echo e($partner->address); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">City</div>
                                            <div class="text"><?php echo e($partner->city); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Barangay</div>
                                            <div class="text"><?php echo e($partner->barangay); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Street</div>
                                            <div class="text"><?php echo e($partner->street); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Postal Code</div>
                                            <div class="text"><?php echo e($partner->postal_code); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Store Number</div>
                                            <div class="text"><?php echo e($partner->store_number); ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Store Email</div>
                                            <div class="text"><?php echo e($partner->store_email); ?></div>
                                        </li>
                                       
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                       <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Menu</h3>
                                    <div class="card">
                                        <div id="carouselExampleControl" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block" height="500" width="100%" src=" <?php echo e($partner->menu_photo); ?> " alt="First slide">
                            </div>
                        </div>
                        
                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Vehicle Info Tab -->
                <!-- Documents Info Tab -->
                 <div class="tab-pane fade" id="emp_products">
                  
                        <div class="col-md-12 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                 
                                <div class="card-body">
                                     <h3 class="card-title">Products</h3>
                                   <div class="table-responsive">
                    <table id="example" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($products->product_name); ?></td>
                                <td><?php echo e($products->stock); ?></td>
                                <td><?php echo e($products->price); ?></td>
                                <td><?php echo e($products->status); ?></td>
                            </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    
                    </table>
                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        
                </div>
                 <!-- /Documents Info Tab -->
             </div>
             
        </div>


        <!-- Profile Modal -->
                    <div class="modal fade" id="PersonalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo e(route('MerchantPersonalUpdate')); ?>">
                                <?php echo csrf_field(); ?>
                             <div class="form-row">

                            <div class="form-group col-md-6">
                            <label for="first">First Name</label>
                            <input name="firstname" type="text" value="<?php echo e($partner->firstname); ?>" class="form-control input-border" id="first" placeholder="First Name">
                            </div>
                            
                             <div class="form-group col-md-6">
                            <label for="first">Middle Name</label>
                            <input name="middlename" type="text" value="<?php echo e($partner->middlename); ?>" class="form-control input-border" id="first" placeholder="Middle Name">
                            </div>
                             <div class="form-group col-md-6">
                            <label for="first">Last Name</label>
                            <input name="lastname" type="text" value="<?php echo e($partner->lastname); ?>" class="form-control input-border" id="first" placeholder="Last Name">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="last">Age</label>
                           <input name="age" type="text" value="<?php echo e($partner->age); ?>" class="form-control input-border" id="last" placeholder="Age">
                            </div>

                            <div class="form-group col">
                            <label for="suff">Address</label>
                           <input name="address" type="text" value="<?php echo e($partner->address); ?>" class="form-control input-border" id="suff" placeholder="City">
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-6">
                            <label for="first">City</label>
                            <input name="city" type="text" value="<?php echo e($partner->city); ?>" class="form-control input-border" id="first" placeholder="First Name">
                            </div>
                            
                             <div class="form-group col-md-6">
                            <label for="first">Barangay</label>
                            <input name="barangay" type="text" value="<?php echo e($partner->barangay); ?>" class="form-control input-border" id="first" placeholder="Middle Name">
                            </div>
                     

                        </div>
                        
                       
                            <input type="hidden" name="accepted_merchant_id" value="<?php echo e($partner->accepted_merchant_id); ?>">
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
                            <form method="post" action="<?php echo e(route('PartnerMessage')); ?>">
                                <?php echo csrf_field(); ?>
                             
                        
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" value="" class="form-control input-border" id="email">
                        </div>
                         <div class="form-group">
                            <textarea  name="message" placeholder="Message" value="" class="form-control input-border" rows="6" cols="50"></textarea>
                        </div>   
                            <input type="hidden" name="accepted_rider_id" value="<?php echo e($partner->accepted_merchant_id); ?>">
                             <input type="hidden" name="merchant_id" value="<?php echo e($partner->merchant_id); ?>">
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
                                <?php echo csrf_field(); ?>

                            <div class="form-group">
                            <h5>Primary</h5>
                            </div>

                             <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="first">Name</label>
                            <input type="text" value="<?php echo e($partner->firstname); ?>" class="form-control input-border" id="first" placeholder="Firstname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="middle">Relationship</label>
                            <input type="text" value="<?php echo e($partner->middlename); ?>" class="form-control input-border" id="middle" placeholder="Middlename">
                            </div>
                              </div>
                      
                             <div class="form-group">
                            <label for="barang">Contact Number</label>
                            <input type="text" value="<?php echo e($partner->zip_code); ?>" class="form-control input-border" id="barang">
                            </div>

                                
                            <div class="form-group">
                            <h5>Secondary</h5>
                            </div>

                             <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="first">Name</label>
                            <input type="text" value="<?php echo e($partner->firstname); ?>" class="form-control input-border" id="first" placeholder="Firstname">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="middle">Relationship</label>
                            <input type="text" value="<?php echo e($partner->middlename); ?>" class="form-control input-border" id="middle" placeholder="Middlename">
                            </div>
                              </div>
                      
                             <div class="form-group">
                            <label for="barang">Contact Number</label>
                            <input type="text" value="<?php echo e($partner->zip_code); ?>" class="form-control input-border" id="barang">
                            </div>

                    
                       
                            <input type="hidden" name="id" value="<?php echo e($partner->accepted_rider_id); ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn red-btn">Confirm</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>

            <!-- Business Modal -->
                    <div class="modal fade" id="BusinessModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo e(route('MerchantBusinessUpdate')); ?>">
                                <?php echo csrf_field(); ?>
                             <div class="form-row">

                            <div class="form-group col-md-6">
                            <label for="first">Business Name</label>
                            <input name="business_name" type="text" value="<?php echo e($partner->business_name); ?>" class="form-control input-border" id="first" placeholder="Business Name">
                            </div>

                             <div class="form-group col-md-6">
                            <label for="inputState">Business Type</label>
                            <select name="business_type" id="inputState" class="custom-select">
                                <option selected><?php echo e($partner->business_type); ?></option>
                                <option>Sole Propietors</option>
                                <option>Corporation</option>
                            </select>
                            </div>
                          

                            <div class="form-group col-md-6">
                            <label for="last">Barangay</label>
                           <input name="barangay" type="text" value="<?php echo e($partner->barangay); ?>" class="form-control input-border" id="last" placeholder="Barangay">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="suff">City</label>
                           <input name="city" type="text" value="<?php echo e($partner->city); ?>" class="form-control input-border" id="suff" placeholder="City">
                            </div>

                        </div>
                        
                        <div class="form-group">
                            <label for="email">Address</label>
                            <input name="address" type="text" value="<?php echo e($partner->address); ?>" class="form-control input-border" id="email" placeholder="Address">
                        </div>
                       <div class="form-row">
                    <div class="form-group col-md-6">
                            <label for="last">Street</label>
                           <input name="street" type="text" value="<?php echo e($partner->street); ?>" class="form-control input-border" id="last" placeholder="Barangay">
                            </div>

                            <div class="form-group col-md-6">
                            <label for="suff">Postal Code</label>
                           <input name="postal_code" type="text" value="<?php echo e($partner->postal_code); ?>" class="form-control input-border" id="suff" placeholder="City">
                            </div>    
                    </div>   
                         <div class="form-group">
                            <label for="email">Store Email</label>
                            <input name="store_email" type="text" value="<?php echo e($partner->store_email); ?>" class="form-control input-border" id="email" placeholder="Store Email">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Store Number</label>
                            <input name="store_number" type="text" value="<?php echo e($partner->store_number); ?>" class="form-control input-border" id="inputAddress2" placeholder="Store Number">
                        </div>
                        
                       
                            <input type="hidden" name="accepted_merchant_id" value="<?php echo e($partner->accepted_merchant_id); ?>">
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
                           <img height="400" width="400" src="<?php echo e($partner->logo); ?>" alt="">
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
                            <div id="carouselExampleContr" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block" height="650"  width="100%" src="<?php echo e($partner->menu_photo); ?>" alt="First slide">
                            </div>
        
                        </div>
                        
                        </div>
                           
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
                            <img class="d-block" height="350"  width="100%" src="<?php echo e($partner->front_license); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block" height="350" width="100%" src="<?php echo e($partner->back_license); ?>" alt="Second slide">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.superadmin_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/superadmin/superadmin_partnerdetails.blade.php ENDPATH**/ ?>