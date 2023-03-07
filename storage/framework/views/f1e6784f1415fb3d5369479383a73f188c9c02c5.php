<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" type="text/css" href="css/rider_application4.css" />
    <title>FOODEA Rider Requirements</title>
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
                    <li class="nav-item nav-category">Rider Application</li>
                    <li>Step 1 &nbsp;&nbsp;&nbsp;Personal Information</li>
                    <li>Step 2 &nbsp;&nbsp;&nbsp;Business Information</li>
                    <li>Step 3 &nbsp;&nbsp;&nbsp;Verify Email Address</li>
                    <li class="red">Step 4 &nbsp;Requirements</li>
                  </ul>
            </nav>

      <div class="sign-form">
        <div class="content-wrapper">
          <div class="col-12 col-sm-10 col-md-11 col-lg-9 col-xl-6">
            <div class="right">
              <div class="right">
             <div id="loader-wrapper">
            <span id="loader"></span>
              </div>
              <h2>Welcome, Juan</h2>
              <p>Here are some examples of required documents you have to submit to set up your account. 
                  Make sure the documents you upload are clear
                  and readable or else the application process will be delayed.
                </p>

          <div class="form-container">
            <div class="btn-group">
              <form action="<?php echo e(route('rider_application4.SaveDocuments')); ?>" method="post" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
             <?php if(Session::has('rider_id')): ?>
            <input type="hidden" name="rider_id" value=" <?php echo e(Session::get('rider_id')); ?>">
            <?php endif; ?>

                <div class="requirements-title">
               <p>2x2 image Picture <span>(Required JPG or PNG)</span></p>
               </div>
               <div class="requirements">
                 <img class="pic" src="image/1x1.png" alt="">
                <input type="file" name="image">
                  <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            <?php $__errorArgs = ['image'];
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
              <p>Photo of your vehicle <span>(Required JPG or PNG)</span></p>

               </div>
                <div class="requirements">
              <p>Front view<span> (Required)</span></p>
              <img src="image/front.png" alt="">
              <input type="file" name="vehicle_front">
               <span>File size up to 5mb only</span>
                 <span
              style="color:red;">
              <?php $__errorArgs = ['vehicle_front'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> 

               <p>Side view<span> (Required)</span></p>
                 <img src="image/side.png" alt="">
                  <input type="file" name="vehicle_side">
                   <span>File size up to 5mb only</span>
                <span
                style="color:red;">
                <?php $__errorArgs = ['vehicle_side'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

               <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

                <p>Back view<span> (Required)</span></p>
                  <img src="image/back.png" alt="">
                <input type="file" name="vehicle_back">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            <?php $__errorArgs = ['vehicle_back'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
              
              <!--- BORROWED-->  
              <?php if(Session::get('vehicle') == 'Borrowed'): ?>
                
          
               <div class="requirements-title"> 
            <p>Original Authorization letter <span> (Required PDF)</span></p>
               </div>
                <div class="requirements">
            <img src="image/auth_letter.png" alt="">
              <input type="file" name="auth_letter">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            <?php $__errorArgs = ['auth_letter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
              </div>

                 
           <?php endif; ?>

           <?php if(Session::get('vehicle') == 'Second-hand'): ?>
                  <!--- SECOND HAND-->  
               <div class="requirements-title"> 
            <p>Notarized Deed of Sale <span> (Required PDF)</span></p>
               </div>
                <div class="requirements">
            <img src="image/deed_sale.png" alt="">
              <input type="file" name="deed_sale">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            <?php $__errorArgs = ['deed_sale'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
              </div>
          <?php endif; ?>
                 <div class="requirements-title">
              <p>Photo of your Professional drivers license ID <span> (Required JPG or PNG)</span></p>
                 </div>
                    <div class="requirements">
                <p>Front<span> (Required)</span></p>
                <img src="image/front_id.png" alt="">
                <input type="file" name="license">
                 <span>File size up to 5mb only</span>
                   <span
               style="color:red;">
               <?php $__errorArgs = ['license'];
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
                 <input type="file" name="license_back">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            <?php $__errorArgs = ['license_back'];
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
            <p>Certificate of Registration <span>(Required PDF)</span></p>
               </div>
                <div class="requirements">
            <img src="image/cr.png" alt="">
              <input type="file" name="cr">
               <span>File size up to 5mb only</span>
            <span
            style="color:red;">
            <?php $__errorArgs = ['cr'];
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
               <p>Official Receipt of Vehicle Registration <span>(Required PDF)</span></p>
               </div>
                <div class="requirements">
                  <img src="image/or.png" alt="">
                <input type="file" name="or">
                 <span>File size up to 5mb only</span>
               <span
            style="color:red;">
            <?php $__errorArgs = ['or'];
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
              <p>Drug Test Result <span>(Optional PDF)</span></p>
               </div>
                <div class="requirements">
               <img src="image/drug-test.png" alt="">
                 <input type="file" name="drug_test">
                  <span>File size up to 5mb only</span>
              </div>

                  <div class="requirements-title">
              <p>NBI Clearance <span>(Required PDF)</span></p>
                  </div>
                   <div class="requirements">
               <img src="image/nbi.png" alt="">
                <input type="file" name="nbi">
                   <span>File size up to 5mb only</span>
               
                 <span
            style="color:red;">
            <?php $__errorArgs = ['nbi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                 </div>
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
      <!-- Scroller -->
    </div>  

    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
  </body>
</html><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/rider_application4.blade.php ENDPATH**/ ?>