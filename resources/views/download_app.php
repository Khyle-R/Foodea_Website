<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FOODEA Rider</title>
    <link rel="stylesheet" type="text/css" href="css/rider_landing.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet" />
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>


</head>

<body>
    <div class="main-container">
        <!--- NAVBAR -->
        <nav class="navbar navbar-expand-lg px-2 mx -2 px-xs-3 px-md-4 px-lg-5 mx-xs-3 mx-md-4 mx-lg-5">
            <div class="container-fluid px-3">
                <a href="/" class="navbar-brand mb-0 h1">
                    <img src="image/foodea1.png" alt="" />
                    <span>FOODEA</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false"
                    aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Foodea</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" role="button"
                                    data-bs-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/rider_landing" class="dropdown-item">Rider</a></li>
                                    <li><a href="/partner_landing" class="dropdown-item">Partner</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link">Contact Us</a>
                            </li>
                        </ul>
                        <a href="/rider_login" class="btn btn-danger btn-sm py-2 px-5 rounded">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </nav>


        <!-- Download App -->
        <div class="context-app mx-5 mb-5 pb-5 my-5" data-aos="fade-up">
            <div class="row flex-container mx-4 mb-5 align-items-start gx-5">
                <div class="col-12 col-md-7 col-lg-6">
                    <img class="image2 d-none d-md-block" src="image/pic.png" alt="">
                </div>

                <div class="col-12 col-md-5 col-lg-6">
                    <div
                        class="content-app text-center text-md-start d-flex flex-column align-items-center align-items-md-start ">
                        <h1>Download The<span> Foodea</span> Rider App Now!</h1>
                        <div class="row flex-container align-items-start gx-5 mt-5">
                            <div class="col-auto col-md-6 col-lg-6">
                                <img class="imageqr" src="image/frame.png" alt="">
                            </div>
                            <div class="col-auto col-md-6 col-lg-6 align-items-center">
                               
                                <!-- <a href="#" class="btn btn-link">
                                    <img class="imagedl mt-5" src="image/gplay.png" alt=""></button>
                                </a> -->
                                <a href="https://expo.dev/accounts/kennyyy.023/projects/navigation/builds/76488489-9623-45ca-bd9d-714946b81e7a?fbclid=IwAR20KUUp88V3inKVXFQkHUMMVnab_LhCEaHgzU-igWnKQr9jCyRqW23-aTw"
                                    class="btn btn-link">
                                    <img class="imagedl mt-4" src="image/download_now.png" alt=""></button>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>



        <script src="dist/aos.js"></script>
        <script>
        document.querySelector('html').classList.remove('no-js');
        if (!window.Cypress) {
            const scrollCounter = document.querySelector('.js-scroll-counter');

            AOS.init({
                mirror: true
            });

            document.addEventListener('aos:in', function(e) {
                console.log('in!', e.detail);
            });

            window.addEventListener('scroll', function() {
                scrollCounter.innerHTML = window.pageYOffset;
            });
        }
        </script>



        <div class="footer">
            <div class="footer-content py-4 py-md-5">
                <div class="icon pb-3 pb-md-0">
                    <a href="/" class="icon text-decoration-none">
                        <img src="image/foodea2.png" alt="">
                        <h1 class="text-light">FOODEA</h1>
                    </a>
                    <p class="text-center">Follow Us</p>
                </div>
                <div class="join">
                    <h2>Join Us</h2>
                    <a href="/rider_landing" class="text-reset text-decoration-none">
                        <p>Register as Rider</p>
                    </a>
                    <a href="/partner_landing" class="text-reset text-decoration-none">
                        <p>Be a Partner</p>
                    </a>
                </div>
                <div class="company">
                    <h2>Our Company</h2>
                    <a href="/about" class="text-reset text-decoration-none">
                        <p>About Us</p>
                    </a>
                    <a href="/contact" class="text-reset text-decoration-none">
                        <p>Contact Us</p>
                    </a>
                    <a href="/mission" class="text-reset text-decoration-none">
                        <p>Mission</p>
                    </a>
                    <a href="/vision" class="text-reset text-decoration-none">
                        <p>Vision</p>
                    </a>
                    <a href="/service" class="text-reset text-decoration-none">
                        <p>Services</p>
                    </a>
                </div>
                <div class="footer-section">
                    <div class="inquire">
                        <h2>For inquiries:</h2>
                        <p>foodea@gmail.com</p>
                    </div>
                    <div class="legal">
                        <div class="legal">
                            <h2>Legal:</h2>
                            <a href="/terms_condition" class="text-reset text-decoration-none">
                                <p>Terms and Condition</p>
                            </a>
                            <a href="/privacy" class="text-reset text-decoration-none">
                                <p>Privacy Policy</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dark-footer pt-3">
                <div class="dark-content m-auto text-center">
                    <p class="">Copyright © 2022. All Rights Reserved</p>
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

</body>

</html>