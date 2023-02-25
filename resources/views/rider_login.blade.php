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
        <link rel="icon" href="{{ url('image/foodea1.png') }}">
    </head>
    <body>
         

        <nav class="navbar navbar-light nav-red">
            <a class="navbar-brand" href="#">
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
        @if (Session::has('fail'))
             <p style="display:none" class="failed"></p>
            <div class="alert hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg">{{ Session::get('fail') }}</span>
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
            <div class="container mt-2 pt-5">
                <div class="row">
                     <div class="col-12 col-sm-7  col-md-6 m-auto">
                        <div class="card border-0 shadow">
                            <div class="card-body px-5 ">
                                <div class="mt-4 text-center">
                                  <img src="image/foodea4.png" alt="">
                                </div>
                                <form method="post" action="{{ route('RiderLogIn') }}" class="mt-4">
                                   @csrf

                                    <div class="form-group">
                                    <label for="email">Email</label>
                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control my-1"
                                        placeholder="example@gmail.com"
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
                                            placeholder="Password"
                                        />
                                   <span
                                    class="error">
                                    @error('password') {{ $message }}
                                    @enderror</span>

                                    </div>
                                    <div class="text-right mb-3">
                                        <a href="#" class="nav-link"
                                            >Forgot Password?</a
                                        >
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
