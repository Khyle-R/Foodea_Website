
<?php $__env->startSection('content'); ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           
          <div class="modal-body">
            <?php $__currentLoopData = $Data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form method="post" action="<?php echo e(route('RiderAccept')); ?>">
              <?php echo csrf_field(); ?>
           <p class="black"> Do you want to accept this rider?</p>
           <input type="text" name="rider_id" value="<?php echo e($rider->rider_id); ?>">
            <input type="text" name="application_id" value="<?php echo e($rider->rider_application_id); ?>">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
            <button type="submit" class="btn red-btn">Confirm</button>
          </div>
          </form>
        </div>
      </div>
    </div>

         <div class="content-wrapper">
                 <div class="row px-3">
                          
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
                        <div class="row px-3">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">

                                <div class="container-fluid px-5">

                                  <div class="row align-items-center my-5">
                                    <div class="col-md-6 ml-5">
                                      <div class="row align-items-center ">
                                   
                                      <img class="circle img-responsive mr-3" width="170" height="160" src="<?php echo e(url('uploads/rider_documents/'. $rider->rider_photo)); ?>" alt="">
                                      <div class="col flex-wrap">
                             
                                    
                            
                                      <h2 class="red-name"> <?php echo e($rider->firstname . " ". $rider->lastname); ?> </h2>
                                      <h2 class="sub-text"><?php echo e($rider->vehicle_type); ?></h2>
                                      </div>
                                      </div>
                                    </div> 
                                       

                                    <div class="col-sm-5">
                                      <div class="card-pending px-3">
                                      <div class="curve card-body text-center">
                                      <h4 class="yellow"><?php echo e($rider->status); ?></h4>
                                      </div>
                                      </div>
                                    </div>  
                                  </div>  

                                  <div class="row justify-content-between">
                                    <div class="col-sm-5 ml-sm-5">
                                      <h4 class="title-border flex-wrap mb-4">Rider Information</h4>
                       
                                       <div class="row px-3">
                                        <label class="black width">First Name</label>
                                        <p class="black ml-5"><?php echo e($rider->firstname); ?></p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Middle Name</label>
                                        <p class="black ml-5"><?php echo e($rider->middlename); ?></p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Last Name</label>
                                        <p class="black ml-5"><?php echo e($rider->lastname); ?></p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Age</label>
                                        <p class="black ml-5"><?php echo e($rider->gender); ?></p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Gender</label>
                                        <p class="black ml-5"><?php echo e($rider->age); ?></p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Email Address</label>
                                        <p class="black ml-5"><?php echo e($rider->email); ?></p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Mobile Number</label>
                                        <p class="black ml-5"><?php echo e($rider->mobile_number); ?></p>
                                      </div>
                                      <div class="row px-3">
                                        <label class="black width">Address</label>
                                        <p class="black ml-5"><?php echo e($rider->address); ?></p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">City</label>
                                        <p class="black ml-5"><?php echo e($rider->city); ?></p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Barangay</label>
                                        <p class="black ml-5"><?php echo e($rider->barangay); ?></p>
                                      </div>
                                      
                                    </div>

                                     <div class="col-sm-5 mr-5">
                                      <h4 class="title-border mb-4">Vehicle Information</h4>
                                      <div class="row px-3">

                                        <label class="black width">Vehicle Type</label>
                                        <p class=" black ml-5"><?php echo e($rider->vehicle_type); ?></p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Plate Number</label>
                                        <p class="black ml-5"><?php echo e($rider->plate_number); ?></p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Motorcycle CC</label>
                                        <p class="black ml-5"><?php echo e($rider->displacement); ?></p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Year Model</label>
                                        <p class="black ml-5"><?php echo e($rider->year_model); ?></p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Engine Number</label>
                                        <p class="black ml-5"><?php echo e($rider->engine_number); ?></p>
                                      </div>
                                      
                                    </div>
                                  </div>

                                  <div class="row align-items-center justify-content-between mt-5">
                                    <div class="col-sm-5 ml-sm-5">
                                      <h4 class="title-border flex-wrap mb-4">Uploaded Documents</h4>
                       
                                       <div class="row px-3 mt-2">
                                        <label class="black space">2x2 Image Picture</label>
                                           <a class="red-link" href=""><i class="red-icon mdi mdi-check-circle mr-2"></i>View</a>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black space">Vehicle Photo</label>
                                        <a class="red-link" href=""><i class="red-icon mdi mdi-check-circle mr-2"></i>View</a>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black space">Certificate of Registration</label>
                                        <a class="red-link" href=""><i class="red-icon mdi mdi-check-circle mr-2"></i>View</a>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black space">Official Receipt of Vehicle Registration</label>
                                         <a class="red-link" href=""><i class="red-icon mdi mdi-check-circle mr-2"></i>View</a>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black space">Professional drivers license ID</label>
                                        <a class="red-link" href=""><i class="red-icon mdi mdi-check-circle mr-2"></i>View</a>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black space">NBI Clearance</label>
                                        <a class="red-link" href=""><i class="red-icon mdi mdi-check-circle mr-2"></i>View</a>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black space">Drugtest Result</label>
                                        <a class="red-link" href=""><i class="red-icon mdi mdi-check-circle mr-2"></i>View</a>
                                      </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                     <div class="col-sm-5">
                                      <div class="row justify-content-start ">
                                     <button type="button" class="button-white btn btn-lg mr-5">Reject</button>
                                    <button type="button" class="button-red btn btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Accept</button>
                                  </div> 
                                  </div>  
                                  </div>

                                </div>      
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <div
                            class="d-sm-flex justify-content-center justify-content-sm-between"
                        >
                            <span
                                class="text-muted d-block text-center text-sm-left d-sm-inline-block"
                                >Copyright © bootstrapdash.com 2020</span
                            >
                            <span
                                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                            >
                                Free
                                <a
                                    href="https://www.bootstrapdash.com/bootstrap-admin-template/"
                                    target="_blank"
                                    >Bootstrap admin templates</a
                                >
                                from Bootstrapdash.com</span
                            >
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.superadmin_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/superadmin/superadmin_riderdetails.blade.php ENDPATH**/ ?>