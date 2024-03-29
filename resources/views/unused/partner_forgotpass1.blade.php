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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
           <link rel="stylesheet" type="text/css" href="css/login.css" />
        <title>FOODEA</title>
        <link rel="icon" href="{{ url('image/foodea1.png') }}">
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

        <div class="form_container">
            <div class="container mt-2 pt-5">
                <div class="row">
                     <div class="col-12 col-sm-12 col-md-9 col-lg-6 m-auto">
                        <div class="card border-0 shadow">
                            <div class="card-body px-5 ">
                                <div class="mt-4 text-center">
                                  <i class="fa fa-envelope fa-2x key"></i>
                                  <h3>Check you Email</h3>
                                  <p>We emailed a link for password reset to
                                  <samp style="color:#F54748;">{{ $email->email }}</samp></p>
                                </div>
                                <form method="post" action="{{ route('PartnerForgotVerify') }}" class="mt-4">
                                   @csrf
                                  
                                    <div class="code-container">
                                    <input name="num1" type="number" class="code" placeholder="0" min="0" max="9" required>
                                    <input name="num2" type="number" class="code" placeholder="0" min="0" max="9" required>
                                    <input name="num3" type="number" class="code" placeholder="0" min="0" max="9" required>
                                    <input name="num4" type="number" class="code" placeholder="0" min="0" max="9" required>
                                    </div>   
                                    <div class="text-center">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-md btn-block"
                                        >
                                            Continue
                                        </button>
                                        <div class="d-flex mt-4 justify-content-center">
                                        <p class="mr-2">Didn't recieve the email?</p>
                                        <a class="text-danger text-decoration-none" href="/partner_forgotpassresend">Resend email</a>
                                        </div>
                                        <div
                                            class="d-flex mt-3 justify-content-center"
                                        >
                                            
                                            <a href="/login" class="red"><i class="fa fa-arrow-left mr-2"></i>Back to log in</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                
            </div>

        <div class="bg_image fixed-bottom">
            <img class="" src="image/foodsbgleft.png" alt="">
        </div>
    </body>


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
     <script src="{{ asset('js/verification.js') }}"></script>
</html>
