<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
    <title>FOODEA</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="<?php echo e(url('image/foodea1.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/rider_term.css">
  </head>
  
  <body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <h3 class="header_title pt-2 pt-md-3">Foodea Application</h3>
    </header>
    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <a href="/" class="nav_logo">
              <i class="bx bx-log-out nav_icon text-white"></i>
              <span class="nav_logo-name">Back to Website</span>
          </a>
            <div class="nav_list logos">
              <div class="title d-flex pb-3 ps-2 gap-2 align-items-center">
              <img src="image/foodea.png" style="width: 50px">FOODEA
            </div>
            <div class="nav_link active red mt-3 py-3 ms-2">
              <i class="bx bx-grid-alt nav_icon"></i>
              <span class="nav_name">Term User</span>
            </div>
            <!-- <div href="#" class="nav_link active red py-3 ms-2">
              <span class="nav_linknumber">1</span>
              <span class="nav_name">Personal Information</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">2</span>
              <span class="nav_name">Verify Phone Number</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">3</span>
              <span class="nav_name">Vehicle Information</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">4</span>
              <span class="nav_name">Requirements</span>
            </div>
            <div href="#" class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">5</span> 
              <span class="nav_name">Application Status</span>
            </div> -->
          </div>
        </div>
      </nav>
    </div>
    <!-- Content Here -->
    
    <div class="container mt-2 row content-wrapper d-flex flex-column justify-content-center mx-auto px-0">
              <h2 class="pt-4 pb-2">Terms of Use</h2>
              <h3 class="pb-2 pb-md-3">These terms of use govern your use of the Foodea website and application</h3>
              <div class="wrapper-all">
                <div class="wrapper">
                  <div class="terms-and-conditions px-2 px-md-4">
                    <h3 class="pt-3">Accounts</h3>
                    <p>You may be required to create an account to continue using our services.You are responsible in keeping your account secured,as well as maintaining the accuracy of necessary information required, and all other activities under your account. Hence, Foodea shall not be held liable if the user's account is used by another individual to use/access our services without the account owner's consent. As the account owner, you are solely responsible for safeguarding and maintaining the confidentiality of your username, email address, password, and other information. <br><br> Therefore, you agree not to share or permit others to use your Account or Password; or assign or transfer your Account to any other person or entity. Also, by creating an account to use/access our site and services, you are at least eighteen (18) years old.</p>
                    <h3>Deliveries</h3>
                    <p>Foodea and its riders shall not be held responsible if the goods are delivered to the incorrect address. its riders and its partners try their best to prepare and package the goods for delivery. In any such event, Foodea and its riders shall not be held responsible for damages on decorations or deformation of goods. To avoid incidents involving ruined decorations or deformed goods.</p>
                    <h3>WHAT DATA WE COLLECT</h3>
                    <p>Depending on your User type, we collect several different types of Personal Data for various purposes to provide and improve our Service to you. You provide us with personally identifiable information such as your name, email address, and physical address through various media and/or forms, such as original, notarized, and/or stamped documents in print or copies in accessible, legible, and electronic format, as may be necessary and upon our and/or our Partners’ request. Other Personal Data that we do not expressly require of you but which you willingly provide to us are collected as well. The information we collect depends on the features, functionalities, products, and Services that you request through our Platforms..</p>
                    <hr>
                  </div>
                </div>
              </div>
              <form class="pt-1 pt-md-3" action="/account_type">
                <div class="pt-3 pb-2 pt-md-3 pb-md-3">
                <input id="cb1" class="mt-2" type="checkbox" name="checkbox4" value="yes" required><span class="ps-3">I certify that have read the above disclaimers and agree to the rules.</span> 
                </input>
                </div>
                <br>
                <div class="d-grid btnAccept">
                <button class="accept btn btn-danger" type="submit" disabled autocomplete="off">Accept</button>
                </div>
              </form>
        </div>
    <!-- End Content Here -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous">
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/terms.js"></script>
    <script src = "js/sidebar.js"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
  </body>
</html>
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views//rider_application_agreement.blade.php ENDPATH**/ ?>