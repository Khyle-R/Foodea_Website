<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rider_application.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <title>FOODEA Personal Information</title>
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
        <li class="nav-item nav-category">Foodea Application</li>
        <li class="red">Step 1 &nbsp;&nbsp;&nbsp;Personal Information</li>
      </ul>
    </nav>
    
    <!-- Form -->
    <div class="sign-form">
      <div class="content-wrapper">
        <div class="col-12 col-sm-12 col-md-9 col-lg-6">
           <div class="right">
            <h2>Create your Account</h2>
            <p>Please fill up the form below.</p>

           <form method="post" action="<?php echo e(route('rider_application.addPostSubmit')); ?>">
           <?php echo csrf_field(); ?>

           
            <div class="form-group">
            <label>Account Type</label>
            <select name="account_type" id="" class="form-control form-control-lg">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>Rider</option>
              <option>Partner Merchant</option>
            </select>
             <span
            style="color:red;">
            <?php $__errorArgs = ['gender'];
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
            <label>First Name</label>
            <input name="firstname" type="text" value="<?php echo e(old('firstname')); ?>" class="form-control form-control-lg"/>
            <span
            style="color:red;">
            <?php $__errorArgs = ['firstname'];
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
            <label>Middle Name</label>
            <input name="middlename" type="text" value="<?php echo e(old('middlename')); ?>" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            <?php $__errorArgs = ['middlename'];
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
            <label>Last Name</label>
            <input name="lastname" type="text" value="<?php echo e(old('lastname')); ?>" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            <?php $__errorArgs = ['lastname'];
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
            <label>Suffix <a style="color:#BD9140;font-size: 12px;"> (Optional)</a></label>
            <input name="suffix" type="text"  class="form-control form-control-lg"/>
            </div>

            <div class="form-group">
            <label>Age</label> 
            <input name="age" type="text" value="<?php echo e(old('age')); ?>" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            <?php $__errorArgs = ['age'];
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
            <label>Gender</label>
            <select name="gender" id="" class="form-control form-control-lg">
              <option selected="true" disabled="disabled">- Select -</option>
              <option>Male</option>
              <option>Female</option>
            </select>
             <span
            style="color:red;">
            <?php $__errorArgs = ['gender'];
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
            <label for="birthday">Birthdate</label>
           <input class="form-control form-control-lg" type="date" id="birthday" name="birthday">
          <span
            style="color:red;">
            <?php $__errorArgs = ['birthday'];
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
            <label >Email Address <a style="color:#BD9140;font-size: 12px;">(For Email verification)</a></label>
            <input name="email" type="text" value="<?php echo e(old('email')); ?>" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            <?php $__errorArgs = ['email'];
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
            <label>Mobile Number</label>
            <input name="mobilenumber" type="text" value="<?php echo e(old('mobilenumber')); ?>" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            <?php $__errorArgs = ['mobilenumber'];
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
              <p style="color: #BD9140; padding: 10px;"> <small> Must be at least 6 characters long. 
              Password can contain letters, numbers and punctuation. </small>
              </p>
            </div>
           
            <div class="form-group">
            <label>Password</label>
              <input type="password" id="password" name="password" class="form-control form-control-lg">
              <span class="eye mx-2" onclick="myFunction()">
                <i class="fa fa-eye" id="hide1"></i>
                <i class="fa fa-eye-slash" id="hide2"></i>
              </span>
              
             <span
            style="color:red;">
            <?php $__errorArgs = ['password'];
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
            <label>Confirm Password</label>
              <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg">
              <span class="eye2 mx-2" onclick="Function()">
                <i class="fa fa-eye" id="hide3"></i>
                <i class="fa fa-eye-slash" id="hide4"></i>
              </span>
             <span
            style="color:red;">
            <?php $__errorArgs = ['password_confirmation'];
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
            <label>Address</label>
            <input name="address" type="text" value="<?php echo e(old('address')); ?>" class="form-control form-control-lg"/>
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
            <input name="city" type="text" value="<?php echo e(old('city')); ?>" class="form-control form-control-lg"/>
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
            <label>Barangay</label>
            <input name="barangay" type="text" value="<?php echo e(old('barangay')); ?>" class="form-control form-control-lg"/>
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
            <label>ZIP Code</label>
            <input name="zip" type="text" value="<?php echo e(old('zip')); ?>" class="form-control form-control-lg"/>
             <span
            style="color:red;">
            <?php $__errorArgs = ['zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
            </div>

           <br><br>
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


      <!-- Show Hide Password -->
      <script>
        function myFunction(){
          var a = document.getElementById("password");
          var b = document.getElementById("hide1");
          var c = document.getElementById("hide2");
    
          if(a.type == 'password'){
            a.type = "text";
            b.style.display = "inline";
            c.style.display = "none";
          }
          else{
            a.type = "password";
            b.style.display = "none";
            c.style.display = "inline";
          }
        }
     </script>
   <!-- Show Hide Confirm Password -->
<script>
  function Function(){
    var x = document.getElementById("password_confirmation");
    var y = document.getElementById("hide3");
    var z = document.getElementById("hide4");

    if(x.type == 'password'){
      x.type = "text";
      y.style.display = "inline";
      z.style.display = "none";
    }
    else{
      x.type = "password";
      y.style.display = "none";
      z.style.display = "inline";
    }
  }
</script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/account_type.blade.php ENDPATH**/ ?>