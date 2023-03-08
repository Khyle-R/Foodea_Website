<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
    <title>FOODEA</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
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
      <h3 class="header_title pt-2 pt-md-3">Partner Application</h3>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="/" class="nav_logo">
              <i class="bx bx-log-out nav_icon text-white"></i>
              <span class="nav_logo-name">Back to Website</span>
          </a>
            <div class="nav_list logos">
              <div class="title d-flex pb-3 ps-2 gap-2 align-items-center">
              <img src="image/foodea.png" style="width: 50px">FOODEA
            </div>
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
              <span class="nav_name">Business Information</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">3</span>
              <span class="nav_name">Verify Phone Number</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">4</span>
              <span class="nav_name">Requirements</span>
            </div>
            <div href="#" class="nav_link active red py-3 ms-2">
              <span class="nav_linknumber">5</span> 
              <span class="nav_name">Application Status</span>
            </div>
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
                    
                         <?php $__currentLoopData = $Data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">

                                <div class="container-fluid px-1 px-md-5">

                                  <div class="row align-items-center my-5">
                                    <div class="col-md-6 ml-5">
                                      <div class="row align-items-center ">
                                   
                                          <div class="text-center">
                                      <img class="circle img-fluid mr-3" src="<?php echo e(url('uploads/'. 'merchant_documents'. '/'. $partner->merchant_id. '/'. $partner->logo)); ?>" alt="">
                                        </div>
                             
                                    
                            
                                      <h2 class="red-name text-center pt-3"> <?php echo e($partner->firstname . " ". $partner->lastname); ?> </h2>
                                      </div>
                                      </div>
                                    

                                    <div class="col-sm-12 col-lg-5">
                                      <div class="card-pending py-4 px-4 mx-0 mx-md-5 rounded">
                                      <div class="">
                                      <h4 class="text-center text-white"><?php echo e($partner->status); ?></h4>
                                      </div>
                                      </div>
                                    </div>  
                                  </div>  

                                  <div class="row justify-content-between">
                                    <div class="col-sm-5 ml-sm-5">
                                      <h4 class="title-border flex-wrap mb-4">Personal Information</h4>
                       
                                       <div class="row px-2">
                                        <label class="black width">First Name</label>
                                        <p class="black ml-5"><?php echo e($partner->firstname); ?></p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Middle Name</label>
                                        <p class="black ml-5"><?php echo e($partner->middlename); ?></p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Last Name</label>
                                        <p class="black ml-5"><?php echo e($partner->lastname); ?></p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Email Address</label>
                                        <p class="black ml-5"><?php echo e($partner->email); ?></p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Mobile Number</label>
                                        <p class="black ml-5"><?php echo e($partner->store_number); ?></p>
                                      </div>
                                     
                                       <div class="row px-2">
                                        <label class="black width">City</label>
                                        <p class="black ml-5"><?php echo e($partner->city); ?></p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Barangay</label>
                                        <p class="black ml-5"><?php echo e($partner->barangay); ?></p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Address</label>
                                        <p class="black ml-5 spacing"><?php echo e($partner->address); ?></p>
                                      </div>
                                    </div>

                                     <div class="col-sm-5 mr-5">
                                      <h4 class="title-border mb-4">Business Information</h4>
                                      <div class="row px-2">

                                        <label class="black width">Business Name</label>
                                        <p class=" black ml-5"><?php echo e($partner->business_name); ?></p>
                                      </div>
                                        <div class="row px-2">
                                        <label class="black width">Business Type</label>
                                        <p class="black ml-5"><?php echo e($partner->business_type); ?></p>
                                      </div>
                                        <div class="row px-2">
                                        <label class="black width">Date Founded</label>
                                        <p class="black ml-5"><?php echo e($partner->date_founded); ?></p>
                                      </div>
                                        <div class="row px-2">
                                        <label class="black width">Country</label>
                                        <p class="black ml-5"><?php echo e($partner->country); ?></p>
                                      </div>
                                       
                                      <div class="row px-2">
                                        <label class="black width">City</label>
                                        <p class="black ml-5"><?php echo e($partner->city); ?></p>
                                      </div>
                                      <div class="row px-2">
                                        <label class="black width">Registered Barangay</label>
                                        <p class="black ml-5"><?php echo e($partner->barangay); ?></p>
                                      </div>
                                      <div class="row px-2">
                                        <label class="black width">Registered Street</label>
                                        <p class="black ml-5"><?php echo e($partner->street); ?></p>
                                      </div>
                                      <div class="row px-2">
                                        <label class="black width">Registered Postal Code</label>
                                        <p class="black ml-5"><?php echo e($partner->postal_code); ?></p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Store Number</label>
                                        <p class="black ml-5"><?php echo e($partner->store_number); ?></p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Store Email</label>
                                        <p class="black ml-5"><?php echo e($partner->store_email); ?></p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Business Address</label>
                                        <p class="black ml-5 spacing"><?php echo e($partner->address); ?></p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Mission</label>
                                        <p class="black ml-5 spacing"><?php echo e($partner->mission); ?></p>
                                      </div>
                                       <div class="row px-2">
                                        <label class="black width">Store Vision</label>
                                        <p class="black ml-5 spacing"><?php echo e($partner->vision); ?></p>
                                      </div>
                                      
                                    </div>
                                  </div>

                                  <div class="row align-items-center justify-content-between mt-2">
                                    <div class="col-sm-5 ml-sm-5">
                                      <h4 class="title-border flex-wrap mb-4">Uploaded Documents</h4>
                       
                                       <div class="row px-2 mt-2">
                                        <label class="black width">Business Logo</label>
                                             <p class="black ml-5"><?php echo e($partner->logo); ?></p>
                                      </div>
                                       <div class="row px-2 mt-2">
                                        <label class="black width">Business Menu</label>
                                          <p class="black ml-5"><?php echo e($partner->menu_photo); ?></p>
                                      </div>
                                       <div class="row px-2 mt-2">
                                        <label class="black width">Business Permit</label>
                                          <p class="black ml-5"><?php echo e($partner->business_permit); ?></p>
                                      </div>
                                       <div class="row px-2 mt-2">
                                        <label class="black width">BIR Certificate</label>
                                          <p class="black ml-5"><?php echo e($partner->bir_cert); ?></p>
                                      </div>
                                       <div class="row px-2 mt-2">
                                        <label class="black width">Barangay Permit</label>
                                         <p class="black ml-5"><?php echo e($partner->barangay_permit); ?></p>
                                      </div>
                                       <div class="row px-2 mt-2">
                                        <label class="black width">DTI Certificate</label>
                                         <p class="black ml-5"><?php echo e($partner->dti_cert); ?></p>
                                      </div>
                                       <div class="row px-2 mt-2">
                                        <label class="black width">Front License ID</label>
                                         <p class="black ml-5"><?php echo e($partner->front_license); ?></p>
                                      </div>
                                      <div class="row px-2 mt-2">
                                        <label class="black width">Back License ID</label>
                                         <p class="black ml-5"><?php echo e($partner->back_license); ?></p>
                                      </div>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                     <div class="col-sm-5 ml-sm-5">
                                   <div class="row px-2 mt-2">
                                    <a href="/" class="button-red btn btn-lg text-white" data-toggle="modal" data-target="#exampleModalCenter">Done</a>
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
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/partner_applicationstatus.blade.php ENDPATH**/ ?>