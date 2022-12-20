<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>Corona Admin</title>
        <!-- plugins:css -->
        <link
            rel="stylesheet"
            href="../../assets/vendors/mdi/css/materialdesignicons.min.css"
        />
        <link
            rel="stylesheet"
            href="../../assets/vendors/css/vendor.bundle.base.css"
        />
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End Plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="../../assets/css/style.css" />
        <!-- End layout styles -->
        <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    </head>
    <body>
        <div class="container-scroller">
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div
                    class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
                >
                    <a class="sidebar-brand brand-logo" href="index.html"
                        ><img src="assets/images/foodea_logo.PNG" alt="logo"
                    /></a>
                    <a class="sidebar-brand brand-logo-mini" href="index.html"
                        ><img
                            src="../../user/image/foodea.png"
                            class="w-50"
                            alt="logo"
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
                                    <h5 class="mb-0 font-weight-normal">
                                        Henry Klein
                                    </h5>
                                    <span>Verified</span>
                                </div>
                            </div>
                            <a
                                href="#"
                                id="profile-dropdown"
                                data-toggle="dropdown"
                                ><i class="mdi mdi-dots-vertical"></i
                            ></a>
                            <div
                                class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                                aria-labelledby="profile-dropdown"
                            >
                                <a href="#" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div
                                            class="preview-icon bg-dark rounded-circle"
                                        >
                                            <i
                                                class="mdi mdi-settings text-primary"
                                            ></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p
                                            class="preview-subject ellipsis mb-1 text-small"
                                        >
                                            Account settings
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div
                                            class="preview-icon bg-dark rounded-circle"
                                        >
                                            <i
                                                class="mdi mdi-onepassword text-info"
                                            ></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p
                                            class="preview-subject ellipsis mb-1 text-small"
                                        >
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
                        <a class="nav-link" href="/index">
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
                                    <a
                                        class="nav-link"
                                        href="pages/ui-features/product.html"
                                        >Product</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="pages/ui-features/category.html"
                                        >Category</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="pages/ui-features/inventory.html"
                                        >Inventory</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item menu-items">
                        <a
                            class="nav-link"
                            href="pages/forms/basic_elements.html"
                        >
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
                        <a
                            class="navbar-brand brand-logo-mini"
                            href="index.html"
                            ><img
                                src="../../user/image/foodea.png"
                                class="w-50"
                                alt="logo"
                        /></a>
                    </div>
                    <div
                        class="navbar-menu-wrapper flex-grow d-flex align-items-stretch"
                    >
                        <button
                            class="navbar-toggler navbar-toggler align-self-center"
                            type="button"
                            data-toggle="minimize"
                        >
                            <span class="mdi mdi-menu"></span>
                        </button>
                        <ul class="navbar-nav w-100">
                            <li class="nav-item w-100">
                                <form
                                    class="nav-link mt-2 mt-md-0 d-none d-lg-flex search"
                                >
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
                                            <div
                                                class="preview-icon bg-dark rounded-circle"
                                            >
                                                <i
                                                    class="mdi mdi-file-outline text-primary"
                                                ></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p
                                                class="preview-subject ellipsis mb-1"
                                            >
                                                Software Development
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div
                                                class="preview-icon bg-dark rounded-circle"
                                            >
                                                <i
                                                    class="mdi mdi-web text-info"
                                                ></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p
                                                class="preview-subject ellipsis mb-1"
                                            >
                                                UI Development
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div
                                                class="preview-icon bg-dark rounded-circle"
                                            >
                                                <i
                                                    class="mdi mdi-layers text-danger"
                                                ></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p
                                                class="preview-subject ellipsis mb-1"
                                            >
                                                Software Testing
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <p class="p-3 mb-0 text-center">
                                        See all projects
                                    </p>
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
                                            <p
                                                class="preview-subject ellipsis mb-1"
                                            >
                                                Mark send you a message
                                            </p>
                                            <p class="text-muted mb-0">
                                                1 Minutes ago
                                            </p>
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
                                            <p
                                                class="preview-subject ellipsis mb-1"
                                            >
                                                Cregh send you a message
                                            </p>
                                            <p class="text-muted mb-0">
                                                15 Minutes ago
                                            </p>
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
                                            <p
                                                class="preview-subject ellipsis mb-1"
                                            >
                                                Profile picture updated
                                            </p>
                                            <p class="text-muted mb-0">
                                                18 Minutes ago
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <p class="p-3 mb-0 text-center">
                                        4 new messages
                                    </p>
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
                                            <div
                                                class="preview-icon bg-dark rounded-circle"
                                            >
                                                <i
                                                    class="mdi mdi-calendar text-success"
                                                ></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject mb-1">
                                                Event today
                                            </p>
                                            <p class="text-muted ellipsis mb-0">
                                                Just a reminder that you have an
                                                event today
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div
                                                class="preview-icon bg-dark rounded-circle"
                                            >
                                                <i
                                                    class="mdi mdi-settings text-danger"
                                                ></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject mb-1">
                                                Settings
                                            </p>
                                            <p class="text-muted ellipsis mb-0">
                                                Update dashboard
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div
                                                class="preview-icon bg-dark rounded-circle"
                                            >
                                                <i
                                                    class="mdi mdi-link-variant text-warning"
                                                ></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject mb-1">
                                                Launch Admin
                                            </p>
                                            <p class="text-muted ellipsis mb-0">
                                                New admin wow!
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <p class="p-3 mb-0 text-center">
                                        See all notifications
                                    </p>
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
                                        <p
                                            class="mb-0 d-none d-sm-block navbar-profile-name"
                                        >
                                            Henry Klein
                                        </p>
                                        <i
                                            class="mdi mdi-menu-down d-none d-sm-block"
                                        ></i>
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
                                            <div
                                                class="preview-icon bg-dark rounded-circle"
                                            >
                                                <i
                                                    class="mdi mdi-settings text-success"
                                                ></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject mb-1">
                                                Settings
                                            </p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div
                                                class="preview-icon bg-dark rounded-circle"
                                            >
                                                <i
                                                    class="mdi mdi-logout text-danger"
                                                ></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject mb-1">
                                                Log out
                                            </p>
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
                                            <div
                                                class="col-4 col-sm-3 col-xl-2"
                                            >
                                                <img
                                                    src="../../assets/images/dashboard/Group126@2x.png"
                                                    class="gradient-corona-img img-fluid"
                                                    alt=""
                                                />
                                            </div>
                                            <div
                                                class="col-5 col-sm-7 col-xl-8 p-0"
                                            >
                                                <h4 class="black mb-1 mb-sm-0">
                                                    Want even more features?
                                                </h4>
                                                <p
                                                    class="mb-0 font-weight-normal d-none d-sm-block"
                                                >
                                                    Your account has limited
                                                    access, please complete the
                                                    documents needed so you can
                                                    access all features.
                                                </p>
                                            </div>
                                            <div
                                                class="col-3 col-sm-2 col-xl-2 pl-0 text-center"
                                            >
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
                        <div class="page-header">
                            <h3 class="page-title">Product</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Menu</a>
                                    </li>
                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page"
                                    >
                                        Product
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div
                                            class="row justify-content-sm-between px-3 mb-3"
                                        >
                                            <h4 class="card-title">
                                                Order Status
                                            </h4>
                                            <div class="row">
                                                <div>
                                                    <a
                                                        href="add_product.html"
                                                        class="btn btn-danger btn-sm px-3 mr-3 py-2 px-3 rounded"
                                                    >
                                                        Add Product
                                                    </a>
                                                </div>
                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-secondary dropdown-toggle py-2 px-3 rounded"
                                                        type="button"
                                                        id="dropdownMenuButton"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        Select Category
                                                    </button>
                                                    <div
                                                        class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton"
                                                    >
                                                        <a
                                                            class="dropdown-item"
                                                            href="#"
                                                            >Chicken</a
                                                        >
                                                        <a
                                                            class="dropdown-item"
                                                            href="#"
                                                            >Drinks</a
                                                        >
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <button
                                                        class="btn btn-secondary dropdown-toggle py-2 px-3 rounded mx-3"
                                                        type="button"
                                                        id="dropdownMenuButton"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        Select Order
                                                    </button>
                                                    <div
                                                        class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton"
                                                    >
                                                        <a
                                                            class="dropdown-item"
                                                            href="#"
                                                            >Ascending</a
                                                        >
                                                        <a
                                                            class="dropdown-item"
                                                            href="#"
                                                            >Descending</a
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="table-danger">
                                                    <tr>
                                                        <th>
                                                            <div
                                                                class="form-check form-check-muted m-0"
                                                            >
                                                                <label
                                                                    class="form-check-label"
                                                                >
                                                                    <input
                                                                        type="checkbox"
                                                                        class="form-check-input"
                                                                    />
                                                                </label>
                                                            </div>
                                                        </th>
                                                        <th>Product Name</th>
                                                        <th>Stock</th>
                                                        <th>Product Cost</th>
                                                        <th>Category</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="form-check form-check-muted m-0"
                                                            >
                                                                <label
                                                                    class="form-check-label"
                                                                >
                                                                    <input
                                                                        type="checkbox"
                                                                        class="form-check-input"
                                                                    />
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img
                                                                src="../../assets/images/faces/face1.jpg"
                                                                alt="image"
                                                                class="img-fluid"
                                                                style="
                                                                    height: 60px;
                                                                    width: 70px;
                                                                    border-radius: 2px;
                                                                "
                                                            />
                                                            <span class="pl-2"
                                                                >Henry
                                                                Klein</span
                                                            >
                                                        </td>
                                                        <td>02312</td>
                                                        <td>$14,500</td>
                                                        <td>Dashboard</td>
                                                        <td>Credit card</td>
                                                        <td>
                                                            <div class="row">
                                                                <div
                                                                    class="badge badge-outline-success mr-3"
                                                                >
                                                                    Edit Product
                                                                </div>

                                                                <!-- Button trigger modal -->
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-danger"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"
                                                                >
                                                                    Remove
                                                                    Product
                                                                </button>

                                                                <!-- Modal -->
                                                                <div
                                                                    class="modal fade"
                                                                    id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true"
                                                                >
                                                                    <div
                                                                        class="modal-dialog modal-dialog-centered"
                                                                    >
                                                                        <div
                                                                            class="modal-content"
                                                                        >
                                                                            <div
                                                                                class="modal-header"
                                                                            >
                                                                                <h6
                                                                                    class="text-light"
                                                                                    class="modal-title fs-5"
                                                                                    id="exampleModalLabel"
                                                                                >
                                                                                    Delete
                                                                                    Product
                                                                                </h6>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                ></button>
                                                                            </div>
                                                                            <div
                                                                                class="modal-body"
                                                                            >
                                                                                Are
                                                                                you
                                                                                sure
                                                                                you
                                                                                want
                                                                                to
                                                                                delete
                                                                                this
                                                                                product?
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer"
                                                                            >
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal"
                                                                                >
                                                                                    Close
                                                                                </button>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn btn-primary"
                                                                                >
                                                                                    Save
                                                                                    changes
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="form-check form-check-muted m-0"
                                                            >
                                                                <label
                                                                    class="form-check-label"
                                                                >
                                                                    <input
                                                                        type="checkbox"
                                                                        class="form-check-input"
                                                                    />
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img
                                                                src="../../assets/images/faces/face2.jpg"
                                                                alt="image"
                                                                class="img-fluid"
                                                                style="
                                                                    height: 60px;
                                                                    width: 70px;
                                                                    border-radius: 2px;
                                                                "
                                                            />
                                                            <span class="pl-2"
                                                                >Estella
                                                                Bryan</span
                                                            >
                                                        </td>
                                                        <td>02312</td>
                                                        <td>$14,500</td>
                                                        <td>Website</td>
                                                        <td>
                                                            Cash on delivered
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div
                                                                    class="badge badge-outline-success mr-3"
                                                                >
                                                                    Edit Product
                                                                </div>

                                                                <!-- Button trigger modal -->
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-danger"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"
                                                                >
                                                                    Remove
                                                                    Product
                                                                </button>

                                                                <!-- Modal -->
                                                                <div
                                                                    class="modal fade"
                                                                    id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true"
                                                                >
                                                                    <div
                                                                        class="modal-dialog modal-dialog-centered"
                                                                    >
                                                                        <div
                                                                            class="modal-content"
                                                                        >
                                                                            <div
                                                                                class="modal-header"
                                                                            >
                                                                                <h6
                                                                                    class="text-light"
                                                                                    class="modal-title fs-5"
                                                                                    id="exampleModalLabel"
                                                                                >
                                                                                    Delete
                                                                                    Product
                                                                                </h6>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                ></button>
                                                                            </div>
                                                                            <div
                                                                                class="modal-body"
                                                                            >
                                                                                Are
                                                                                you
                                                                                sure
                                                                                you
                                                                                want
                                                                                to
                                                                                delete
                                                                                this
                                                                                product?
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer"
                                                                            >
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal"
                                                                                >
                                                                                    Close
                                                                                </button>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn btn-primary"
                                                                                >
                                                                                    Save
                                                                                    changes
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="form-check form-check-muted m-0"
                                                            >
                                                                <label
                                                                    class="form-check-label"
                                                                >
                                                                    <input
                                                                        type="checkbox"
                                                                        class="form-check-input"
                                                                    />
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img
                                                                src="../../assets/images/faces/face5.jpg"
                                                                alt="image"
                                                                class="img-fluid"
                                                                style="
                                                                    height: 60px;
                                                                    width: 70px;
                                                                    border-radius: 2px;
                                                                "
                                                            />
                                                            <span class="pl-2"
                                                                >Lucy
                                                                Abbott</span
                                                            >
                                                        </td>
                                                        <td>02312</td>
                                                        <td>$14,500</td>
                                                        <td>App design</td>
                                                        <td>Credit card</td>
                                                        <td>
                                                            <div class="row">
                                                                <div
                                                                    class="badge badge-outline-success mr-3"
                                                                >
                                                                    Edit Product
                                                                </div>

                                                                <!-- Button trigger modal -->
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-danger"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"
                                                                >
                                                                    Remove
                                                                    Product
                                                                </button>

                                                                <!-- Modal -->
                                                                <div
                                                                    class="modal fade"
                                                                    id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true"
                                                                >
                                                                    <div
                                                                        class="modal-dialog modal-dialog-centered"
                                                                    >
                                                                        <div
                                                                            class="modal-content"
                                                                        >
                                                                            <div
                                                                                class="modal-header"
                                                                            >
                                                                                <h6
                                                                                    class="text-light"
                                                                                    class="modal-title fs-5"
                                                                                    id="exampleModalLabel"
                                                                                >
                                                                                    Delete
                                                                                    Product
                                                                                </h6>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                ></button>
                                                                            </div>
                                                                            <div
                                                                                class="modal-body"
                                                                            >
                                                                                Are
                                                                                you
                                                                                sure
                                                                                you
                                                                                want
                                                                                to
                                                                                delete
                                                                                this
                                                                                product?
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer"
                                                                            >
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal"
                                                                                >
                                                                                    Close
                                                                                </button>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn btn-primary"
                                                                                >
                                                                                    Save
                                                                                    changes
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="form-check form-check-muted m-0"
                                                            >
                                                                <label
                                                                    class="form-check-label"
                                                                >
                                                                    <input
                                                                        type="checkbox"
                                                                        class="form-check-input"
                                                                    />
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <img
                                                                src="../../assets/images/faces/face3.jpg"
                                                                alt="image"
                                                                class="img-fluid"
                                                                style="
                                                                    height: 60px;
                                                                    width: 70px;
                                                                    border-radius: 2px;
                                                                "
                                                            />
                                                            <span class="pl-2"
                                                                >Peter
                                                                Gill</span
                                                            >
                                                        </td>
                                                        <td>02312</td>
                                                        <td>$14,500</td>
                                                        <td>Development</td>
                                                        <td>Online Payment</td>
                                                        <td>
                                                            <div class="row">
                                                                <div
                                                                    class="badge badge-outline-success mr-3"
                                                                >
                                                                    Edit Product
                                                                </div>

                                                                <!-- Button trigger modal -->
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-danger"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"
                                                                >
                                                                    Remove
                                                                    Product
                                                                </button>

                                                                <!-- Modal -->
                                                                <div
                                                                    class="modal fade"
                                                                    id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true"
                                                                >
                                                                    <div
                                                                        class="modal-dialog modal-dialog-centered"
                                                                    >
                                                                        <div
                                                                            class="modal-content"
                                                                        >
                                                                            <div
                                                                                class="modal-header"
                                                                            >
                                                                                <h6
                                                                                    class="text-light"
                                                                                    class="modal-title fs-5"
                                                                                    id="exampleModalLabel"
                                                                                >
                                                                                    Delete
                                                                                    Product
                                                                                </h6>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                ></button>
                                                                            </div>
                                                                            <div
                                                                                class="modal-body"
                                                                            >
                                                                                Are
                                                                                you
                                                                                sure
                                                                                you
                                                                                want
                                                                                to
                                                                                delete
                                                                                this
                                                                                product?
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer"
                                                                            >
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal"
                                                                                >
                                                                                    Close
                                                                                </button>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn btn-primary"
                                                                                >
                                                                                    Save
                                                                                    changes
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div
                                                                class="form-check form-check-muted m-0"
                                                            >
                                                                <label
                                                                    class="form-check-label"
                                                                >
                                                                    <input
                                                                        type="checkbox"
                                                                        class="form-check-input"
                                                                    />
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td class="tbl-image">
                                                            <img
                                                                src="../../assets/images/faces/face4.jpg"
                                                                alt="image"
                                                                style="
                                                                    height: 60px;
                                                                    width: 70px;
                                                                    border-radius: 2px;
                                                                "
                                                            />
                                                            <span class="pl-2"
                                                                >Sallie
                                                                Reyes</span
                                                            >
                                                        </td>
                                                        <td>02312</td>
                                                        <td>$14,500</td>
                                                        <td>Website</td>
                                                        <td>Credit card</td>
                                                        <td>
                                                            <div class="row">
                                                                <div
                                                                    class="badge badge-outline-success mr-3"
                                                                >
                                                                    Edit Product
                                                                </div>

                                                                <!-- Button trigger modal -->
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-danger"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"
                                                                >
                                                                    Remove
                                                                    Product
                                                                </button>

                                                                <!-- Modal -->
                                                                <div
                                                                    class="modal fade"
                                                                    id="exampleModal"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true"
                                                                >
                                                                    <div
                                                                        class="modal-dialog modal-dialog-centered"
                                                                    >
                                                                        <div
                                                                            class="modal-content"
                                                                        >
                                                                            <div
                                                                                class="modal-header"
                                                                            >
                                                                                <h6
                                                                                    class="text-light"
                                                                                    class="modal-title fs-5"
                                                                                    id="exampleModalLabel"
                                                                                >
                                                                                    Delete
                                                                                    Product
                                                                                </h6>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                ></button>
                                                                            </div>
                                                                            <div
                                                                                class="modal-body"
                                                                            >
                                                                                Are
                                                                                you
                                                                                sure
                                                                                you
                                                                                want
                                                                                to
                                                                                delete
                                                                                this
                                                                                product?
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer"
                                                                            >
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal"
                                                                                >
                                                                                    Close
                                                                                </button>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn btn-primary"
                                                                                >
                                                                                    Save
                                                                                    changes
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <ul
                                            class="pagination pt-2 align-items-center justify-content-center justify-content-sm-end"
                                        >
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="#"
                                                    aria-label="Previous"
                                                >
                                                    <span aria-hidden="true"
                                                        >&laquo;</span
                                                    >
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >1</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >2</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >3</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a
                                                    class="page-link"
                                                    href="#"
                                                    aria-label="Next"
                                                >
                                                    <span aria-hidden="true"
                                                        >&raquo;</span
                                                    >
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <div
                            class="d-sm-flex justify-content-center justify-content-sm-between"
                        >
                            <span
                                class="text-muted d-block text-center text-sm-left d-sm-inline-block"
                                >Copyright © bootstrapdash.com 2020</span
                            >
                            <span
                                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                            >
                                Free
                                <a
                                    href="https://www.bootstrapdash.com/bootstrap-admin-template/"
                                    target="_blank"
                                    >Bootstrap admin templates</a
                                >
                                from Bootstrapdash.com</span
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
        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../assets/js/off-canvas.js"></script>
        <script src="../../assets/js/hoverable-collapse.js"></script>
        <script src="../../assets/js/misc.js"></script>
        <script src="../../assets/js/settings.js"></script>
        <script src="../../assets/js/todolist.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>
        <!-- endinject -->
    </body>
</html>
