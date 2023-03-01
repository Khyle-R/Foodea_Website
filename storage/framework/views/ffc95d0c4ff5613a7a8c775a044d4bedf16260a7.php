<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/partner_requirements.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <title>FOODEA Partner Requirements</title>
  </head>

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
              <li class="red">Step 4 &nbsp;Requirements</li>
              <li>Step 5 &nbsp;Application Status</li>
            </ul>
      </nav>


      <div class="sign-form">
        <div class="content-wrapper">
          <div class="col-12 col-sm-10 col-md-11 col-lg-9 col-xl-6">
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
                 <img class="logo" src="image/foodea4.png" alt="">
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
              <div class="col-sm-10 d-flex justify-content-center">
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
      </div>
      <!-- Scroller -->
    </div>  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views//partner_requirements.blade.php ENDPATH**/ ?>