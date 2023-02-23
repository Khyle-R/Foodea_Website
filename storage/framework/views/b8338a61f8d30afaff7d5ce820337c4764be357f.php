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
      href="assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link
      rel="stylesheet"
      href="assets/vendors/jvectormap/jquery-jvectormap.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/flag-icon-css/css/flag-icon.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel-2/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel-2/owl.theme.default.min.css"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../user/image/foodea1.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div
          class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
        >
          <a class="sidebar-brand brand-logo" href="index.html"
            ><img src="assets/images/foodea_logo.PNG" alt="logo"
          /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"
            ><img src="../../user/image/foodea.png" class="w-50" alt="logo"
          /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img
                    class="img-xs rounded-circle"
                    src="assets/images/faces/face15.jpg"
                    alt=""
                  />
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
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
                <a href="#" class="dropdown-item preview-item">
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
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">
                      Change Password
                    </p>
                  </div>
                </a>
         
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
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
              <span class="menu-title">Menu</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/product.html"
                    >Product</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/category.html"
                    >Category</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/inventory.html"
                    >Inventory</a
                  >
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-cart"></i>
              </span>
              <span class="menu-title">Orders</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="admin_history.html">
              <span class="menu-icon">
                <i class="mdi mdi-history"></i>
              </span>
              <span class="menu-title">Transaction History</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-cards"></i>
              </span>
              <span class="menu-title">Voucher</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-library-books"></i>
              </span>
              <span class="menu-title">Activity log</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
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
              ><img src="../../user/image/foodea.png" class="w-50" alt="logo"
            /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button
              class="navbar-toggler navbar-toggler align-self-center"
              type="button"
              data-toggle="minimize"
            >
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search products"
                  />
                </form>
              </li>
            </ul>
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
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a
                  class="nav-link count-indicator dropdown-toggle"
                  id="messageDropdown"
                  href="#"
                  data-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="messageDropdown"
                >
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img
                        src="assets/images/faces/face4.jpg"
                        alt="image"
                        class="rounded-circle profile-pic"
                      />
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Mark send you a message
                      </p>
                      <p class="text-muted mb-0">1 Minutes ago</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img
                        src="assets/images/faces/face2.jpg"
                        alt="image"
                        class="rounded-circle profile-pic"
                      />
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Cregh send you a message
                      </p>
                      <p class="text-muted mb-0">15 Minutes ago</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img
                        src="assets/images/faces/face3.jpg"
                        alt="image"
                        class="rounded-circle profile-pic"
                      />
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">
                        Profile picture updated
                      </p>
                      <p class="text-muted mb-0">18 Minutes ago</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a
                  class="nav-link count-indicator dropdown-toggle"
                  id="notificationDropdown"
                  href="#"
                  data-toggle="dropdown"
                >
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="notificationDropdown"
                >
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0">
                        Just a reminder that you have an event today
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0">Update dashboard</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0">New admin wow!</p>
                    </div>
                  </a>
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
                      src="assets/images/faces/face15.jpg"
                      alt=""
                    />
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">
                      Henry Klein
                    </p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                  aria-labelledby="profileDropdown"
                >
                  <h6 class="black p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
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
                  <a class="dropdown-item preview-item">
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
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img
                          src="assets/images/dashboard/Group126@2x.png"
                          class="gradient-corona-img img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="black mb-1 mb-sm-0">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">
                          Your account has limited access, please complete the documents needed so you can access all features.
                        </p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a
                            href="https://www.bootstrapdash.com/product/corona-admin-template/"
                            target="_blank"
                            class="btn btn-outline-warning btn-danger btn-rounded get-started-btn"
                            >Upload documents</a
                          >
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">₱1200.34</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                            +3.5%
                          </p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span
                            class="mdi mdi-arrow-top-right icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">
                      Potential growth
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">₱1700.34</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                            +11%
                          </p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span
                            class="mdi mdi-arrow-top-right icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">
                      Total Orders
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">₱1200.34</h3>
                          <p class="text-danger ml-2 mb-0 font-weight-medium">
                            -2.4%
                          </p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger">
                          <span
                            class="mdi mdi-arrow-bottom-left icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Product Sold</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">₱3100.53</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                            +3.5%
                          </p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span
                            class="mdi mdi-arrow-top-right icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">
                      Total Product
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sales</h4>
                    <canvas id="areaChart" style="height: 250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sales</h4>
                    <canvas id="doughnutChart"></canvas>
                  </div>
                </div>
              </div>
              </div>

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Order Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input
                                    type="checkbox"
                                    class="form-check-input"
                                  />
                                </label>
                              </div>
                            </th>
                            <th>Client Name</th>
                            <th>Order No</th>
                            <th>Product Cost</th>
                            <th>Project</th>
                            <th>Payment Mode</th>
                            <th>Start Date</th>
                            <th>Payment Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input
                                    type="checkbox"
                                    class="form-check-input"
                                  />
                                </label>
                              </div>
                            </td>
                            <td>
                              <img
                                src="assets/images/faces/face1.jpg"
                                alt="image"
                              />
                              <span class="pl-2">Henry Klein</span>
                            </td>
                            <td>02312</td>
                            <td>$14,500</td>
                            <td>Dashboard</td>
                            <td>Credit card</td>
                            <td>04 Dec 2019</td>
                            <td>
                              <div class="badge badge-outline-success">
                                Approved
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input
                                    type="checkbox"
                                    class="form-check-input"
                                  />
                                </label>
                              </div>
                            </td>
                            <td>
                              <img
                                src="assets/images/faces/face2.jpg"
                                alt="image"
                              />
                              <span class="pl-2">Estella Bryan</span>
                            </td>
                            <td>02312</td>
                            <td>$14,500</td>
                            <td>Website</td>
                            <td>Cash on delivered</td>
                            <td>04 Dec 2019</td>
                            <td>
                              <div class="badge badge-outline-warning">
                                Pending
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input
                                    type="checkbox"
                                    class="form-check-input"
                                  />
                                </label>
                              </div>
                            </td>
                            <td>
                              <img
                                src="assets/images/faces/face5.jpg"
                                alt="image"
                              />
                              <span class="pl-2">Lucy Abbott</span>
                            </td>
                            <td>02312</td>
                            <td>$14,500</td>
                            <td>App design</td>
                            <td>Credit card</td>
                            <td>04 Dec 2019</td>
                            <td>
                              <div class="badge badge-outline-danger">
                                Rejected
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input
                                    type="checkbox"
                                    class="form-check-input"
                                  />
                                </label>
                              </div>
                            </td>
                            <td>
                              <img
                                src="assets/images/faces/face3.jpg"
                                alt="image"
                              />
                              <span class="pl-2">Peter Gill</span>
                            </td>
                            <td>02312</td>
                            <td>$14,500</td>
                            <td>Development</td>
                            <td>Online Payment</td>
                            <td>04 Dec 2019</td>
                            <td>
                              <div class="badge badge-outline-success">
                                Approved
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input
                                    type="checkbox"
                                    class="form-check-input"
                                  />
                                </label>
                              </div>
                            </td>
                            <td>
                              <img
                                src="assets/images/faces/face4.jpg"
                                alt="image"
                              />
                              <span class="pl-2">Sallie Reyes</span>
                            </td>
                            <td>02312</td>
                            <td>$14,500</td>
                            <td>Website</td>
                            <td>Credit card</td>
                            <td>04 Dec 2019</td>
                            <td>
                              <div class="badge badge-outline-success">
                                Approved
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
             <div class="row">
                 <div class="col-lg-4">
                   <div class="card mb-4">
                     <div class="card-body">
                       <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">Messages</h4>
                      <a class="text-muted mb-1 small">View all</a>
                    </div>
                     <div class="preview-list">
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img
                            src="assets/images/faces/face6.jpg"
                            alt="image"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div
                              class="d-flex d-md-block d-xl-flex justify-content-between"
                            >
                              <h6 class="preview-subject">Leonard</h6>
                              <p class="text-muted text-small">5 minutes ago</p>
                            </div>
                            <p class="text-muted">
                              Well, it seems to be working now.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img
                            src="assets/images/faces/face8.jpg"
                            alt="image"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div
                              class="d-flex d-md-block d-xl-flex justify-content-between"
                            >
                              <h6 class="preview-subject">Luella Mills</h6>
                              <p class="text-muted text-small">
                                10 Minutes Ago
                              </p>
                            </div>
                            <p class="text-muted">
                              Well, it seems to be working now.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img
                            src="assets/images/faces/face9.jpg"
                            alt="image"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div
                              class="d-flex d-md-block d-xl-flex justify-content-between"
                            >
                              <h6 class="preview-subject">Ethel Kelly</h6>
                              <p class="text-muted text-small">2 Hours Ago</p>
                            </div>
                            <p class="text-muted">Please review the tickets</p>
                          </div>
                        </div>
                      </div>
                      <div class="preview-item border-bottom">
                        <div class="preview-thumbnail">
                          <img
                            src="assets/images/faces/face11.jpg"
                            alt="image"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div
                              class="d-flex d-md-block d-xl-flex justify-content-between"
                            >
                              <h6 class="preview-subject">Herman May</h6>
                              <p class="text-muted text-small">4 Hours Ago</p>
                            </div>
                            <p class="text-muted">
                              Thanks a lot. It was easy to fix it .
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    </div>
                      </div>
                <div class="col-lg-8">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title">Top Selling Products</h4>
                      <a class="text-muted mb-1 small">View Product</a>
                    </div>
                      <div class="table-responsive">
                      <table class="table table-striped">
                        <thead class="table-danger text-light">
                          <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Sales</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Fried Chicken</td>
                            <td>Chicken</td>
                            <td>5000</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Milk Tea</td>
                            <td>Drinks</td>
                            <td>3000</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Milk Tea</td>
                            <td>Drinks</td>
                            <td>2000</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Milk Tea</td>
                            <td>Drinks</td>
                            <td>2000</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>Milk Tea</td>
                            <td>Drinks</td>
                            <td>2000</td>
                          </tr>
                           <tr>
                            <td>6</td>
                            <td>Fried Chicken</td>
                            <td>Chicken</td>
                            <td>5000</td>
                          </tr>
                           <tr>
                            <td>7</td>
                            <td>Fried Chicken</td>
                            <td>Chicken</td>
                            <td>5000</td>
                          </tr>
                           <tr>
                            <td>8</td>
                            <td>Fried Chicken</td>
                            <td>Chicken</td>
                            <td>5000</td>
                          </tr>
                           <tr>
                            <td>9</td>
                            <td>Fried Chicken</td>
                            <td>Chicken</td>
                            <td>5000</td>
                          </tr>
                           <tr>
                            <td>10</td>
                            <td>Fried Chicken</td>
                            <td>Chicken</td>
                            <td>5000</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
              </div>
            </div>  
           </div>
         </div>
             
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted d-block text-center text-sm-left d-sm-inline-block"
                >Copyright © 2022. All Rights Reserved</span
              >
             
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/chart.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views//admin/index.blade.php ENDPATH**/ ?>