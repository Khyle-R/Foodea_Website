<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"/>

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

        <link rel="stylesheet" type="text/css" href="css/account_type.css" />
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
                    class="d-inline-block align-top ms-1 ms-md-5"
                    alt=""
                />
                <span class="white">FOODEA</span>
            </a>
        </nav>

        <section>
            <div class="container mt-1 pt-4">
                <div class="row">
                     <div class="col-12 col-md-9 col-lg-7 col-xxl-5 m-auto mt-4">
                        <div class="card border-0 shadow">
                            <div class="card-body px-5">
                                <div class="mt-2 text-center">
                                  <img src="image/foodea4.png" alt="">
                                  <h6 class="pt-4 fw-medium title">Choose an account to log in</h6>
                                </div>
                                <div class="radio mb-4 d-flex justify-content-center align-items-center">
                                    <input type="radio"  name="card" id="card_one">
                                    <input type="radio"  name="card" id="card_two">
                                    <!-- <input type="radio" name="card" id="card_three"> -->
                                       <!-- they should all have the same name attr but different ids -->
                                    <label for="card_one">
                                        <div class="cards">
                                            <span class="checks_btn"><i class="fas fa-check"></i></span>
                                            <div class="type">
                                                <img class="imageRider" src="image/rider.png" alt="">
                                            </div>
                                            <h6 class="text-center">Rider</h5>
                                            <ul>
                                            </ul>
                                        </div>
                                    </label>
                                    <label for="card_two">
                                        <div class="cards">
                                            <span class="checks_btn"><i class="fas fa-check"></i></span>
                                            <div class="type">
                                                <img class="imageMerchant" src="image/market.png" alt="">
                                            </div>
                                            <h6 class="text-center">Business Partner</h5>
                                            <ul>
                                            </ul>
                                        </div>
                                    </label>
                                </div>

                                <div class="d-flex flex-column ">
                                    <a href="" class="btn btn-danger" id="submit" onclick='myFunction()'>Continue</a>

                                    <div class="pt-4 mb-3 d-flex flex-column flex-md-row justify-content-center align-items-center">
                                        <div>
                                            <p class="mb-0 pe-2">Dont have an account?</p>
                                        </div>
                                        <div>
                                        <a href="/rider_application_agreement" class="red">Sign Up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    <script>
    function myFunction() {

        if(document.getElementById('card_one').checked) {
            document.getElementById('submit').href = "/rider_login";
        }

      if(document.getElementById('card_two').checked) {
            document.getElementById('submit').href = "/login";
        }

    }
</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>
