<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <title>FOODEA Partner Application Status</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="icon" href="{{ url('image/foodea1.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="css/partner_application4.css" />
  </head>
  
  <body id="body-pd">
    <header class="header" id="header">
      <div class="header_toggle">
        <i class="bx bx-menu" id="header-toggle"></i>
      </div>
      <h3 class="header_title pt-2 pt-md-3">Partner Application</h3>
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
            <div class="nav_link active mt-3 py-3 ms-2">
              <i class="bx bx-grid-alt nav_icon"></i>
              <span class="nav_name">Term User</span>
            </div>
            <div class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">1</span>
              <span class="nav_name">Personal Information</span>
            </div>
            <div class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">2</span>
              <span class="nav_name">Business Information</span>
            </div>
            <div class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">3</span>
              <span class="nav_name">Verify Phone Number</span>
            </div>
            <div class="nav_link active py-3 ms-2">
              <span class="nav_linknumber">4</span>
              <span class="nav_name">Requirements</span>
            </div>
            <div class="nav_link active red py-3 ms-2">
              <span class="nav_linknumber">5</span> 
              <span class="nav_name">Application Status</span>
            </div>
          </div>
        </div>
        </div>
      </nav>
    </div>
    <!-- Content Here -->
    <!-- Form -->
    <!-- <div class="container sign-form"> -->
      <div class="content-wrapper container mt-5 pt-3 pt-md-4 px-3 px-md-5 py-2">
          <div class="row justify-content-center align-items-center">
          <div class="col-12 col-sm-10 col-md-11 col-lg-10 col-xl-6 ">
            <div class="right"> 
              <div class="d-flex flex-content-center align-items-center mx-auto flex-column">
                <img src="image/cashier.png" class="img-fluid"/>
                <h2 class="text-center">Thank you for trusting Foodea</h2>
                <p class="px-5 text-center">We have recieved your documents and we will be processing your application.</p>
                <br>
                <div class="form-group">
                <div class="col-auto d-flex justify-content-center">
                  <a href="/partner_applicationstatus" class="btn btn-danger w-100 px-2">Application Status</a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- </div> -->
    <!-- End Content Here -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src = "js/sidebar.js"></script>
  </body>
</html>