<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Foodea</title>
    <!-- plugins:css -->
    <link
      rel="stylesheet"
      href="<?php echo e(asset('assets/vendors/mdi/css/materialdesignicons.min.css')); ?>"
    />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/css/vendor.bundle.base.css')); ?>" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="<?php echo e(asset('assets/vendors/jvectormap/jquery-jvectormap.css')); ?>"
    />
    <link
      rel="stylesheet"
      href="<?php echo e(asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')); ?>"
    />
    <link
      rel="stylesheet"
      href="<?php echo e(asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')); ?>"
    />

   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link
      rel="stylesheet"
      href="<?php echo e(asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')); ?>"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />
     <link rel="stylesheet" href="<?php echo e(asset('assets/css/superadmin.css')); ?>" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo e(url('/image/foodea1.png')); ?>" />
  </head>
  <body>
    
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div
          class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
        >
          <a class="sidebar-brand brand-logo" href="index.html"
            ><img src="<?php echo e(asset('assets/images/foodea_logo.PNG')); ?>" alt="logo"
          /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"
            ><img src="<?php echo e(url('/image/foodea.png')); ?>" class="w-50" alt="logo"
          /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile mt-3">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img
                    class="img-xs rounded-circle"
                    src="<?php echo e(url('image/foodea1.png')); ?>"
                    alt=""
                  />
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">


                  <h5 class="mb-0 font-weight-normal white-font">Admin</h5>

                  <span>Verified</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"
                ><i class="mdi mdi-dots-vertical"></i
              ></a>
              <div
                class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                aria-labelledby="profile-dropdown"
              >
                <a href="/superadmin_account" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">
                      Account settings
                    </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                
         
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/superadmin_index">
              <span class="menu-icon">
                <i class="mdi mdi-view-dashboard"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a
              class="nav-link"
              data-toggle="collapse"
              href="#ui-basic"
              aria-expanded="false"
              aria-controls="ui-basic"
            >
              <span class="menu-icon">
                <i class="mdi mdi-book-multiple"></i>
              </span>
              <span class="menu-title">Application</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">

                  <a class="nav-link" href="/superadmin_rider"

                    >Riders</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/superadmin_partnerapplication"
                    >Merchants</a
                  >
                </li>
              </ul>
            </div>
          </li>
      
          <li class="nav-item menu-items">
            <a class="nav-link" href="/superadmin_acceptedrider">
              <span class="menu-icon">
                <i class="mdi mdi-cards"></i>
              </span>
              <span class="menu-title">Riders</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/superadmin_acceptedpartner">
              <span class="menu-icon">
                <i class="mdi mdi-library-books"></i>
              </span>
              <span class="menu-title">Merchants</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="/superadmin_sales">
              <span class="menu-icon">
                <i class="mdi mdi-cash-usd"></i>
              </span>
              <span class="menu-title">Sales</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/superadmin_log">
              <span class="menu-icon">
                <i class="mdi mdi-history"></i>
              </span>
              <span class="menu-title">Activity Log</span>
            </a>
          </li>
          
           <li class="nav-item menu-items">
            <a class="nav-link" href="/superadmin_account">
              <span class="menu-icon">
                <i class="mdi mdi-account-box"></i>
              </span>
              <span class="menu-title">Account</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div
            class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center"
          >
            <a class="navbar-brand brand-logo-mini" href="index.html"
              ><img src="<?php echo e(url('/image/foodea.png')); ?>" class="w-50" alt="logo"
            /></a>
          </div>
          <div class="navbar-menu-wrapper flex-shrink-0 d-flex align-items-stretch">
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-menu"></span>
            </button>
            
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <!-- <a
                  class="nav-link btn btn-success create-new-button"
                  id="createbuttonDropdown"
                  data-toggle="dropdown"
                  aria-expanded="false"
                  href="#"
                  >+ Add Product</a
                > -->
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="createbuttonDropdown"
                >
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Software Development
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        UI Development
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Software Testing
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              
              
              <li class="nav-item dropdown">
                <a
                  class="nav-link count-indicator dropdown-toggle"
                  id="notificationDropdown"
                  href="#"
                  data-toggle="dropdown"
                >
                  <i class="mdi mdi-bell"></i>
                    <?php if($ridercount || $merchantcount): ?>
                        <span class="count bg-success"></span>
                        <?php else: ?>
                         <?php endif; ?>
                  
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="notificationDropdown"
                >
                  <h6 class="p-3 mb-0 white-font">Notifications</h6>
            
                  <div class="dropdown-divider"></div>
                    <?php if($ridercount): ?>
                  <a href="/superadmin_rider" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                  
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">New Rider Applicants</p>
                      <p class="text-muted ellipsis mb-0">
                        
                        There are <?php echo e($ridercount); ?> new applicants
                      
                      </p>
                    </div> 
                  </a>

                  <div class="dropdown-divider"></div>
                    <?php elseif($merchantcount): ?>
                  <a href="/superadmin_partnerapplication" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                  
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">New Partner Applicants</p>
                      <p class="text-muted ellipsis mb-0">
                        
                        There are <?php echo e($merchantcount); ?> new applicants
                      
                      </p>
                    </div> 
                  </a>

                   <?php else: ?>
                     <a class="dropdown-item preview-item">
                    <div class="preview-item-content">
                      <p class="text-muted ellipsis mb-0">
                        You have 0 Notification
                      </p>
                    </div>
                  </a>
                    <?php endif; ?>
                    
                  
                

                  
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link"
                  id="profileDropdown"
                  href="#"
                  data-toggle="dropdown"
                >
                  <div class="navbar-profile">
                    <img
                      class="img-xs rounded-circle"
                      style="background-color: #fff"
                      src="<?php echo e(url('image/foodea1.png')); ?>"
                      alt=""
                    />
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">

                    Admin
                    </p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="profileDropdown"
                >
                  <h6 class="p-3 mb-0 white-font">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a href="/superadmin_account" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>

                  <a href="/superadmin_logout" class="dropdown-item preview-item">

                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                 
                </div>
              </li>
            </ul>
            <button
              class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
              type="button"
              data-toggle="offcanvas"
            >
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <!-- Loader -->
      <div id="loader-wrapper">
        <div id="loader">
          <div class="loader-ellips">
            <span class="loader-ellips__dot"></span>
            <span class="loader-ellips__dot"></span>
            <span class="loader-ellips__dot"></span>
            <span class="loader-ellips__dot"></span>
          </div>
        </div>
      </div>
      <!-- /Loader -->
      
          <?php echo $__env->yieldContent('content'); ?>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo e(asset('assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo e(asset('assets/vendors/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/progressbar.js/progressbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')); ?>"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"> </script>
   <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"> </script>
   
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('assets/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/misc.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/settings.js')); ?>"></script>
 
    <script src="<?php echo e(asset('assets/js/todolist.js')); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo e(asset('assets/js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/chart.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/toast.js')); ?>"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/superadmin/superadmin_index.blade.php ENDPATH**/ ?>