
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
                                     
                                            <img alt="" src="<?php echo e(url('uploads/merchant_documents/'.$partner->logo)); ?>">
                                  
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
                                                <div class="staff-msg"><a class="red-btn" href="#"><?php echo e($partner->status); ?></a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                               <li>
                                                    <div class="title">Date Founded:</div>
                                                    <div class="text"><?php echo e($partner->date_founded); ?></div>
                                                </li>
                                                <li>
                                                    <div class="title">Store Number:</div>
                                                    <div class="text"><?php echo e($partner->store_number); ?></div>
                                               <li>
                                                        
                                                        <div class="title">Email:</div>
                                                        <div class="text"><?php echo e($partner->email); ?></div>
                                                      
                                                       
                                                    </li>
                                                    <li>
                                                      
                                                        <div class="title">Country:</div>
                                                        <div class="text"><?php echo e($partner->country); ?></div>

                                                  
                                                    </li>
                                                    <li>
                                                      
                                                        <div class="title">Business Type:</div>
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
                                    <h3 class="card-title">Personal Informations</h3>
                                   
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
                                <th>Documents</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2x2 image Picture</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                             <tr>
                                <td>Vehicle Photo</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                             <tr>
                                <td>Professional Drivers license ID</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <tr>
                                <td>Certificate of Registration</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <tr>
                                <td>Official Receipt of Vehicle Registration</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <tr>
                                <td>Drug Test Result</td>
                                <td><a class="red-btn" href=""><i class="download-btn mdi mdi-download mr-2"></i>Download</a> </td>

                            </tr>
                            <tr>
                                <td>NBI Clearance</td>
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
                                    <h3 class="card-title">Business Informations</h3>
                                   
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
                                <div class="card-body px-5">
                                    <h3 class="card-title">Vehicle</h3>
                                    <div class="card px-5">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" height="500" src="<?php echo e(asset('uploads/merchant_documents/menu_sample.png')); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" height="500" src="<?php echo e(asset('uploads/merchant_documents/business_permit.png')); ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" height="500" src="<?php echo e(asset('uploads/merchant_documents/barangay_permit.png')); ?>" alt="Third slide">
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
<?php echo $__env->make('superadmin.superadmin_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/superadmin/superadmin_merchantapplicationprofile.blade.php ENDPATH**/ ?>