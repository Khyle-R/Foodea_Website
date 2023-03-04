<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
         <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
           <link rel="stylesheet" type="text/css" href="css/login.css" />
        <title>FOODEA</title>
        <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
    </head>
    <body>
         

        <nav class="navbar navbar-light nav-red">
            <a class="navbar-brand" href="/">
                <img
                    src="image/foodea.png"
                    width="30"
                    height="30"
                    class="d-inline-block align-top"
                    alt=""
                />
                <span class="white">FOODEA</span>
            </a>
        </nav>
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

        <section>
            <div class="container mt-2 pt-5">
                <div class="row">
                     <div class="col-12 col-sm-7  col-md-6 m-auto">
                        <div class="card border-0 shadow">
                            <div class="card-body px-5 ">
                                <div class="mt-4 text-center">
                                  <img src="image/foodea4.png" alt="">
                                </div>
                                <form method="post" action="<?php echo e(route('RiderLogIn')); ?>" class="mt-4">
                                   <?php echo csrf_field(); ?>

                                    <div class="form-group">
                                    <label for="email">Email</label>
                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control my-1"
                                        placeholder="example@gmail.com"
                                        value="<?php echo e(Cookie::get('email')); ?>"
                                    />
                                       <span
                                        class="error">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>

                                    <div class="mt-3">
                                        <label for="password">Password</label>
                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control my-1 form-control-lg"
                                            placeholder="Password"
                                            id="password"
                                            value="<?php echo e(Cookie::get('password')); ?>"
                                        />
                                        <span class="eye" onclick="myFunction()">
                                            <i class="fa fa-eye" id="hide1"></i>
                                            <i class="fa fa-eye-slash" id="hide2"></i>
                                            </span>
                                   <span
                                    class="error">
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
                                  
                                    <div class="form-row justify-content-between">
                                        <div class="col-auto form-group my-2">
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" name="remember" id="gridCheck">
                                              <label class="form-check-label" for="gridCheck">
                                                Remember Me
                                              </label>
                                            </div>
                                          </div>
    
                                        <div class="text-right mb-3">
                                            <a href="#" class="nav-link"
                                                >Forgot Password?</a
                                            >
                                        </div>
                                        </div>
                                    <div class="text-center">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-md btn-block"
                                        >
                                            LOG IN
                                        </button>
                                        <div
                                            class="d-flex mt-3 justify-content-center"
                                        >
                                            <p class="mr-2">
                                                Don't have an account?
                                            </p>
                                            <a href="/account_type" class="red">Sign Up</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                
        </section>
        
        <div class="bg_image fixed-bottom">
            <img class="" src="image/foodsbgleft.png" alt="">
        </div>
    </body>
 <script>
            $('.popup').show(function() {
                $('.success').addClass("show");
                $('.success').removeClass("hide");
                $('.success').addClass("showAlert");
                setTimeout(function() {
                    $('.success').removeClass("show");
                    $('.success').addClass("hide");
                }, 5000);
            });
            $('.close-btn').click(function() {
                $('.success').removeClass("show");
                $('.success').addClass("hide");
            });
            </script>
             
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


    <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
    ></script>
    
</html>
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/rider_login.blade.php ENDPATH**/ ?>