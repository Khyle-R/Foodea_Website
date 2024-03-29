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
           
        <title>Document</title>
    </head>
    <body>
         
        @if (Session::has('fail'))
             <p style="display:none" class="failed"></p>
            <div class="alert hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg">{{ Session::pull('fail') }}</span>
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

        @endif
        <section>
            <br><br><br><br><br><br>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-7 col-lg-6 m-auto">
                        <div class="card border-0 shadow">
                            <div class="card-body px-5 ">
                                <div class="text-center">
                                    <a href="/">
                                  <img src="image/foodea4.png" alt="">
                                  </a>
                                </div>
                                <form method="post" action="{{ route('login.LoginAdmin') }}" class="mt-4">
                                   @csrf

                                    <div class="form-group">

                                  

                                    <label for="email">Email</label>
                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control my-1"
                                        placeholder="example@gmail.com"
                                        value="{{ Cookie::get('superadmin_email') }}"
                                    />
                                       <span
                                        class="error">
                                        @error('email') {{ $message }}
                                        @enderror</span>

                                    <div class="mt-3">
                                        <label for="password">Password</label>
                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control my-1 form-control-lg"
                                            placeholder="example@gmail.com"
                                            id="password"
                                            value="{{ Cookie::get('superadmin_password') }}"
                                        />
                                        <span class="eye" onclick="myFunction()">
                                            <i class="fa fa-eye" id="hide1"></i>
                                            <i class="fa fa-eye-slash" id="hide2"></i>
                                            </span>
                                   <span
                                    class="error">
                                    @error('password') {{ $message }}
                                    @enderror</span>

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
                                        <a href="/superadmin_forgotpass" class="nav-link"
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
                                            class="d-flex flex-sm-wrap mt-3 justify-content-center"
                                        >
                                            {{-- <p class="mr-2">
                                                Don't have an account?
                                            </p>
                                            <a href="#" class="red">Sign Up</a> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                
        </section>

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
