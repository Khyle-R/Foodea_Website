
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" type="text/css" href="css/partner_application2.css" />
    <title>Partner Business Information</title>
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
            <li class="red">Step 2 &nbsp;&nbsp;&nbsp;Business Information</li>
          </ul>
    </nav>

    <div class="sign-form">
      <div class="content-wrapper">
        <div class="col-12 col-sm-10 col-md-11 col-lg-9 col-xl-6">
        
          <h2>Secure your Account</h2>
          <p>Please fill up the form below.</p>

            <!--GET PARTNER ID-->

          <form method="post" action="<?php echo e(route('partner_application2.partner2submit')); ?>">
         <?php echo csrf_field(); ?>
            <?php if(Session::has('merchant_id')): ?>
            <input type="hidden" name="merchant_id" value=" <?php echo e(Session::get('merchant_id')); ?>">
          <?php endif; ?>

          <div class="form-group">
            <label>Business Type</label>
            <select name="business_type" id="" class="form-control form-control-lg">
              <option selected="true" disabled="disabled">- Select -</option>
              <option <?php if(old('business_type') == 'Sole proprietorship'): ?> selected="selected" <?php endif; ?>>Sole proprietorship</option>
              <option <?php if(old('business_type') == 'Corporation'): ?> selected="selected" <?php endif; ?>>Corporation</option>
            </select>
            <span
            style="color:red;">
            <?php $__errorArgs = ['business_type'];
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
            <label>Business Name</label>
            <input type="text" name="business_name" value="<?php echo e(old('business_name')); ?>" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            <?php $__errorArgs = ['business_name'];
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
            <label for="birthday">Date Founded</label>
           <input class="form-control form-control-lg" value="<?php echo e(old('date_founded')); ?>" type="date" id="birthday" name="date_founded">
         <span
            style="color:red;">
            <?php $__errorArgs = ['date_founded'];
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
            <label>Country</label>
             <select name="country" id="" class="form-control form-control-lg">
              <option selected="true" disabled="disabled">- Select -</option>
              <option <?php if(old('country') == 'Philippines'): ?> selected="selected" <?php endif; ?>>Philippines</option>
            </select>
            <span
            style="color:red;">
            <?php $__errorArgs = ['country'];
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
            <label>Business Address</label>
            <input type="text" name="address" value="<?php echo e(old('address')); ?>" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            <?php $__errorArgs = ['address'];
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
            <label>City</label> 
            <input type="text" name="city"  value="<?php echo e(old('city')); ?>" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            <?php $__errorArgs = ['city'];
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
            <label>Registered Barangay</label>
            <input type="text" name="barangay"  value="<?php echo e(old('barangay')); ?>" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            <?php $__errorArgs = ['barangay'];
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
            <label>Registered Street</label>
            <input type="text" name="street"  value="<?php echo e(old('street')); ?>" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            <?php $__errorArgs = ['street'];
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
            <label>Registered Postal Code</label>
            <input type="text" maxlength="4" onkeypress="return event.charCode>=48 && event.charCode<=57" name="postal_code"  value="<?php echo e(old('postal_code')); ?>" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            <?php $__errorArgs = ['postal_code'];
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
            <label>Store Phone No.</label>
            <input type="text" maxlength="10" onkeypress="return event.charCode>=48 && event.charCode<=57" name="store_number" value="<?php echo e(old('store_number')); ?>" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            <?php $__errorArgs = ['store_number'];
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
            <label>Store Email Address</label>
            <input type="text" name="store_email" value="<?php echo e(old('store_email')); ?>" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            <?php $__errorArgs = ['store_email'];
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
          <label for="exampleFormControlTextarea1">Mission</label>
          <textarea name="mission" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo e(old('mission')); ?></textarea>
        <span
            style="color:red;">
            <?php $__errorArgs = ['mission'];
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
          <label for="exampleFormControlTextarea1">Vision</label>
           <textarea name="vision" class="form-control"  id="exampleFormControlTextarea1" rows="3"><?php echo e(old('vision')); ?></textarea>
          <span
            style="color:red;">
            <?php $__errorArgs = ['vision'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
          </div>

            
           
           <br><br><br>
           <div class="form-group">
            <div class="col-sm-10 d-flex justify-content-center">
              <button Value="submit" type="submit" class="btn btn-danger w-50">Next</button>
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
</html>
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views//partner_application2.blade.php ENDPATH**/ ?>