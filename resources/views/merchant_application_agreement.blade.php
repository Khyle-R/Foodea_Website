<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/rider_application.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <title>FOODEA</title>
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
              <li class="red">Step 1 &nbsp;&nbsp;&nbsp;Personal Information</li>
            <li>Step 2 &nbsp;&nbsp;&nbsp;Business Information</li>
            <li>Step 3 &nbsp;&nbsp;&nbsp;Verify Email Address</li>
            <li>Step 4 &nbsp; Requirements</li>
            <li>Step 5 &nbsp; Applicataion Status</li>
            </ul>
          </nav>

          <div class="sign-form">
            <div class="content-wrapper">
              <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6">
                 <div class="right">
                <form action="/partner_application" method="get">
                    <h2>Terms of Use</h2>
                    <p>These Terms of Use govern your use of the Foodea website and application</p>
                    <section>
                        <h3>Accounts</h3>
                        <p>
                            You may be required
                            to create an account to
                            continue using our services.
                            You are responsible in keeping your account secured,
                            as well as maintaining the accuracy of necessary information
                            required, and all other activities under your account. Hence,
                            Foodea shall not be held liable if the user's account is
                            used by another individual to use/access our services without
                            the account owner's consent. As the account owner, you are solely
                            responsible for safeguarding and maintaining the confidentiality
                            of your username, email address, password, and other information.
                            <br><br>
                            Therefore, you agree not to share or permit others to use your
                            Account or Password; or assign or transfer your Account to any
                            other person or entity. Also, by creating an account to use/access
                            our site and services, you are at least eighteen (18) years old.
                        </p>

                        <h3>Deliveries</h3>
                        <p>
                            Foodea and its riders shall not be held responsible if the goods are
                            delivered to the incorrect address. its
                            riders and its partners try their best to prepare and package the
                            goods for delivery. In any such event, Foodea and its riders
                            shall not be held responsible for damages on decorations or
                            deformation of goods. To avoid incidents involving ruined decorations
                            or deformed goods.
                        </p>
                        <h3>WHAT DATA WE COLLECT</h3>
                        <p>
                            Depending on your User type, we collect several different
                            types of Personal Data for various purposes to provide and
                            improve our Service to you. You provide us with personally
                            identifiable information such as your name, email address,
                            and physical address through various media and/or forms,
                            such as original, notarized, and/or stamped documents in print or
                            copies in accessible, legible, and electronic format, as may
                            be necessary and upon our and/or our Partners’ request. Other
                            Personal Data that we do not expressly require of you but
                            which you willingly provide to us are collected as well.
                            The information we collect depends on the features,
                            functionalities, products, and Services that you request
                            through our Platforms.
                        </p>
                    </section>
                    <div class="check">
                       
                        <br>
                        <input class="checkbox" type="checkbox" id="" name="vehicle2" value="">
                        <label for="vehicle2"> I agree Foodea's Terms and Conditions and Privacy Policy.</label>
                    </div>
                    <div class="form-container">
                        <button Value="submit" type="submit" class="btn btn-danger w-50">Next</button>
                    </div>
                </form>
            </div>
            </div>
            </div>
            </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

</body>
</html>