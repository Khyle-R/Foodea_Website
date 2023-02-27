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
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/superadmin.css')); ?>" />
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
              <div class="right">
               <h2>Application Status</h2>
                 <div class="row px-3">
                        </div>
                    
                         <?php $__currentLoopData = $Data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row px-3">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">

                                <div class="container-fluid px-5">

                                  <div class="row align-items-center my-5">
                                    <div class="col-md-6 ml-5">
                                      <div class="row align-items-center ">
                                   
                                      <img class="circle img-responsive mr-3" width="170" height="160" src="<?php echo e(url(('uploads/'. 'riders_documents'. '/'.$rider->rider_id. '_' .$rider->firstname. '_' .$rider->lastname. '/'). $rider->rider_photo)); ?>" alt="">
                                      <div class="col flex-wrap">
                             
                                    
                            
                                      <h2 class="red-name"> <?php echo e($rider->firstname . " ". $rider->lastname); ?> </h2>
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
                                      <h4 class="title-border flex-wrap mb-4">Personal Information</h4>
                       
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
                                        <label class="black width">Email Address</label>
                                        <p class="black ml-5"><?php echo e($rider->email); ?></p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Mobile Number</label>
                                        <p class="black ml-5"><?php echo e($rider->mobile_number); ?></p>
                                      </div>
                                     
                                       <div class="row px-3">
                                        <label class="black width">City</label>
                                        <p class="black ml-5"><?php echo e($rider->city); ?></p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Barangay</label>
                                        <p class="black ml-5"><?php echo e($rider->barangay); ?></p>
                                      </div>
                                      <div class="row px-3">
                                        <label class="black width">Zip Code</label>
                                        <p class="black ml-5"><?php echo e($rider->zip_code); ?></p>
                                      </div>
                                       <div class="row px-3">
                                        <label class="black width">Address</label>
                                        <p class="black ml-5 spacing"><?php echo e($rider->address); ?></p>
                                      </div>
                                    </div>

                                     <div class="col-sm-5 mr-5">
                                      <h4 class="title-border mb-4">Vehicle Information</h4>
                                      <div class="row px-3">

                                        <label class="black width">Vehicle Type</label>
                                        <p class=" black ml-5"><?php echo e($rider->vehicle_type); ?></p>
                                      </div>
                                      <div class="row px-3">
                                        <label class="black width">Vehicle Ownership</label>
                                        <p class="black ml-5"><?php echo e($rider->vehicle_ownership); ?></p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Plate Number</label>
                                        <p class="black ml-5"><?php echo e($rider->plate_number); ?></p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Motorcycle Displacement</label>
                                        <p class="black ml-5"><?php echo e($rider->displacement); ?></p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Engine Number</label>
                                        <p class="black ml-5"><?php echo e($rider->engine_number); ?></p>
                                      </div>
                                       
                                      <div class="row px-3">
                                        <label class="black width">Year Model</label>
                                        <p class="black ml-5"><?php echo e($rider->year_model); ?></p>
                                      </div>
                                       <h4 class="title-border mb-4 mt-4">Emergency Contact</h4>
                                      <div class="row px-3">

                                        <label class="black width">Name</label>
                                        <p class=" black ml-5"><?php echo e($rider->emergency_name); ?></p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Relationship</label>
                                        <p class="black ml-5"><?php echo e($rider->relationship); ?></p>
                                      </div>
                                        <div class="row px-3">
                                        <label class="black width">Contact Number</label>
                                        <p class="black ml-5"><?php echo e($rider->contact_number); ?></p>
                                      </div>
                                     
                                    </div>
                                  </div>

                                  <div class="row align-items-center justify-content-between mt-5">
                                    <div class="col-sm-5 ml-sm-5">
                                      <h4 class="title-border flex-wrap mb-4">Uploaded Documents</h4>
                       
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Rider Photo</label>
                                             <p class="black ml-5 spacing"><?php echo e($rider->rider_photo); ?></p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Driver License</label>
                                          <p class="black ml-5"><?php echo e($rider->driver_license); ?></p>
                                      </div>
                                      <div class="row px-3 mt-2">
                                        <label class="black width">Licence back Back</label>
                                         <p class="black ml-5"><?php echo e($rider->license_back); ?></p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Official Receipt</label>
                                          <p class="black ml-5"><?php echo e($rider->official_receipt); ?></p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Certificate of Registration</label>
                                          <p class="black ml-5"><?php echo e($rider->cert_registration); ?></p>
                                      </div>
                                      <?php if($rider->vehicle_ownership == 'Borrowed'): ?>
                                          <div class="row px-3 mt-2">
                                        <label class="black width">Authorization letter</label>
                                         <p class="black ml-5"><?php echo e($rider->auth_letter); ?></p>
                                      </div>
                                        <div class="row px-3 mt-2">
                                        <label class="black width">Valid ID of the owner</label>
                                         <p class="black ml-5"><?php echo e($rider->owner_id); ?></p>
                                      </div>
                                      <?php endif; ?>
                                       <?php if($rider->vehicle_ownership == 'Second-hand'): ?>
                                          <div class="row px-3 mt-2">
                                        <label class="black width">Notarized Deed of Sale</label>
                                         <p class="black ml-5"><?php echo e($rider->deed_sale); ?></p>
                                      </div>
                                        
                                      <?php endif; ?>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">NBI Clearance</label>
                                         <p class="black ml-5"><?php echo e($rider->nbi_clearance); ?></p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Drug Test</label>
                                         <p class="black ml-5"><?php echo e($rider->drug_test); ?></p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Vehicle Front</label>
                                         <p class="black ml-5"><?php echo e($rider->vehicle_front); ?></p>
                                      </div>
                                      <div class="row px-3 mt-2">
                                        <label class="black width ">Vehicle Side</label>
                                         <p class="black ml-5"><?php echo e($rider->vehicle_side); ?></p>
                                      </div>
                                       <div class="row px-3 mt-2">
                                        <label class="black width">Vehicle Back</label>
                                         <p class="black ml-5"><?php echo e($rider->vehicle_back); ?></p>
                                      </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                     <div class="col-sm-5 ml-sm-5">
                                   <div class="row px-2 mt-2">

                                      <?php if(Session::get('registerID')): ?>
                                    <a href="/rider_logout" class="button-red btn btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Sign Out</a>
                                 <?php else: ?>
                                     <a href="/" class="button-red btn btn-lg" data-toggle="modal" data-target="#exampleModalCenter">Done</a>
                                    <?php endif; ?>

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
</html><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/rider_applicationstatus.blade.php ENDPATH**/ ?>