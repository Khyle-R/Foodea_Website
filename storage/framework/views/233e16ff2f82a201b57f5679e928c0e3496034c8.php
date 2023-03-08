<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
   <link rel="stylesheet" type="text/css" href="css/rider_application2.css" />
    <title>FOODEA Verify Account</title>
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
          <li class="red">Step 2 &nbsp;&nbsp;&nbsp;Verify Phone Number</li>

        </ul>
      </nav>

      <div class="sign-form">
        <div class="content-wrapper">
          <div class="col-12 col-sm-10 col-md-11 col-lg-9 col-xl-6">
            <div class="right">
               <div id="loader-wrapper">
            <span id="loader"></span>
              </div>
               <h2>Verify your account</h2>
               <p>We emailed you the six digit code to 
                <samp style="color:#F54748;"><?php echo e($email->email); ?></samp></p>
               <p>Enter the code below to confirm your email address</p>
                <?php if(Session::has('fail')): ?>
             <p style="display:none" class="failed"></p>
            <div class="alert hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg"><?php echo e(Session::get('fail')); ?></span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
            
            <script>
                $(".failed").show(function () {
                    $(".alert").addClass("show");
                    $(".alert").removeClass("hide");
                    $(".alert").addClass("showAlert");
                    setTimeout(function () {
                        $(".alert").removeClass("show");
                        $(".alert").addClass("hide");
                    }, 5000);
                });
                $(".close-btn").click(function () {
                    $(".alert").removeClass("show");
                    $(".alert").addClass("hide");
                });
            </script>

          <?php endif; ?>
                         <!-- Verification -->
                        <form method="post" action="<?php echo e(route('RiderVerify')); ?>">
                          <?php echo csrf_field(); ?>
                          <div class="code-container">
                          <input name="num1" type="number" class="code" placeholder="0" min="0" max="9" required>
                          <input name="num2" type="number" class="code" placeholder="0" min="0" max="9" required>
                          <input name="num3" type="number" class="code" placeholder="0" min="0" max="9" required>
                          <input name="num4" type="number" class="code" placeholder="0" min="0" max="9" required>
                          <input name="num5" type="number" class="code" placeholder="0" min="0" max="9" required>
                          <input name="num6" type="number" class="code" placeholder="0" min="0" max="9" required>
                        </div>
                         <div class="form-group">
                          <div class="col-sm-12 d-flex justify-content-start mb-4">
                            <button value="submit" type="submit" class="btn btn-danger w-50">Verify</button>
                          </div>
                        </div>
                        </form>
         
                 <p class="paragraph">Didn't recieve the code?</p>
                 <a class="veri" href="rider_application2resend">Resend email verification</a>
                 </div>

            </div>
          </div>
        </div> 
      </div> 
  <!-- Scroller -->
  </div>


    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/verification.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
  </body>
</html>
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/rider_application2.blade.php ENDPATH**/ ?>