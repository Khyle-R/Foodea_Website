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
                                  <i class="fa fa-circle-check fa-2x check"></i>
                                  <h3>Password reset</h3>
                                  <p>Your password has been successfully reset. Click continue to log in
                                </div>
                                <form method="post" action="{{ route('login.LoginMerchant') }}" class="mt-4">
                                   @csrf
                                  
                                        
                                    <div class="text-center">
                                        <button
                                            type="submit"
                                            class="btn btn-primary btn-md btn-block"
                                        >
                                            Continue
                                        </button>
                                        <div
                                            class="d-flex mt-4 justify-content-center"
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
    
</html>
