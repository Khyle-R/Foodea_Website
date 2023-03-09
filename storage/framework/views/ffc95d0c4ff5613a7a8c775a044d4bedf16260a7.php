<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
    <title>FOODEA Partner Requirements</title>
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
    <link rel="stylesheet" href="css/partner_requirements.css">
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
          <a href="" data-bs-toggle="modal" data-bs-target="#ExitModal" class="nav_logo">
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
            <div href="#" class="nav_link active red py-3 ms-2">
              <span class="nav_linknumber">4</span>
              <span class="nav_name">Requirements</span>
            </div>
            <!-- <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">5</span> 
              <span class="nav_name">Application Status</span>
            </div> -->
          </div>
        </div>
        </div>
      </nav>
    </div>
    <!-- Content Here -->
    <!-- Form -->
    <!-- <div class="container sign-form"> -->
      <div class="content-wrapper container mt-2 px-3 px-md-5 py-2">
        <div class="col-12 col-sm-12 col-md-9 col-lg-7 justify-content-center align-items-center mx-auto px-0">
        <div class="right">
          <h2>Welcome, Juan</h2>
          <p>Here's the required steps to set up your account. 
            Make sure the documents you upload matches the sample 
            document or else the application process will be delayed.</p>
          
          <div class="form-container">
            <div class="btn-group">

              <form action="<?php echo e(route('partner_requirements.SaveDocuments')); ?>" method="post" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
                <?php if(Session::has('merchant_id')): ?>
            <input type="hidden" name="merchant_id" value=" <?php echo e(Session::get('merchant_id')); ?>">
          <?php endif; ?>

           <div class="requirements-title">
               <p>Clear image of your logo <span>(Required JPG or PNG)</span></p>
               </div>
               <div class="requirements">
                 <img class="logo img-fluid" src="image/requirement.png" alt="">
                <input type="file" name="logo">
                  <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                   </div>

            <hr class="new">
            <div class="requirements-title"> 
            <p>Clear image of your menu<span> (Required JPG or PNG)</span></p>
               </div>
                <div class="requirements">
            <img src="image/menu_sample.png" alt="">
              <input type="file" name="menu_photo">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            <?php $__errorArgs = ['menu_photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
              </div>

            <hr class="new">
            <div class="requirements-title"> 
            <p>Business Permit<span> (Required PDF)</span></p>
               </div>
                <div class="requirements">
            <img src="image/business_permit.png" alt="">
              <input type="file" name="business_permit">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            <?php $__errorArgs = ['business_permit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
              </div>

              <hr class="new">
                <div class="requirements-title"> 
            <p>BIR Certificate<span> (Required PDF)</span></p>
               </div>
                <div class="requirements">
            <img src="image/BIR.png" alt="">
              <input type="file" name="bir_cert">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            <?php $__errorArgs = ['bir_cert'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
              </div>

              <hr class="new">
               <div class="requirements-title"> 
            <p>Barangay Permit <span>(Required PDF)</span></p>
               </div>
                <div class="requirements">
            <img src="image/barangay_permit.png" alt="">
              <input type="file" name="barangay_permit">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            <?php $__errorArgs = ['barangay_permit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
              </div>

              <hr class="new">
               <div class="requirements-title">
               <p>DTI Certificate <span> (Required PDF)</span></p>
               </div>
                <div class="requirements">
                  <img src="image/DTI.png" alt="">
                <input type="file" name="dti_cert">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            <?php $__errorArgs = ['dti_cert'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
              </div>

              <hr class="new">
                  <div class="requirements-title">
              <p>Valid Government issued ID <span> (Required JPG or PNG)</span></p>
              <br>
               <p>Types of valid ID (Driver's license, Passport, SSS ID, Postal ID, Voter ID)</p>
                </div>
                
                    <div class="requirements">
                <p>Front<span> (Required)</span></p>
                <img src="image/front_id.png" alt="">
                <input type="file" name="front_license">
                 <span>File size up to 5mb only</span>
                   <span
               style="color:red;">
               <?php $__errorArgs = ['front_license'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

               <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

                 <p>Back<span> (Required)</span></p>
                <img src="image/back_id.png" alt="">
                 <input type="file" name="back_license">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            <?php $__errorArgs = ['back_license'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                 <div class="form-group">
              <div class="col-sm-12 d-flex justify-content-center">
                <button Value="submit" type="submit" class="btn btn-danger w-50">Submit</button>
              </div>
              </div>
                 
            </div>
            
              </form>
          </div>
        </div>
      </div>
        </div>
       </div>
     <!-- </div> -->

     <!-- EXIT Modal -->
        <div class="modal fade" id="ExitModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Exit Signup</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?php echo e(route('ExitSignup')); ?>">
              <div class="modal-body">
                Are you sure to discard your application?
              </div>
              <div class="modal-footer">
                <button type="button" class="white-btn" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="red-btn">Confirm</button>
                </form>
              </div>
            </div>
          </div>
        </div>
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
</html><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views//partner_requirements.blade.php ENDPATH**/ ?>