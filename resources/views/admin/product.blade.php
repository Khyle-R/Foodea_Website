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
            @include('admin.sidebar')

            <div class="container-fluid page-body-wrapper">
            @include('admin.navbar')

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
                                    <li class="breadcrumb-item active" aria-current="page">
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
                                                        href="{{route("add_product.addProductView")}}"
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
                                                    @foreach($products as $key => $data)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-muted m-0">
                                                                <label class="form-check-label"> <input type="checkbox"class="form-check-input"/></label>
                                                            </div>
                                                        </td>
                                                       
                                                        <td>
                                                            <img src="../../assets/images/faces/face1.jpg" alt="image" class="img-fluid" style=" height: 60px; width: 70px; border-radius: 2px;"/>
                                                            <span class="pl-2">{{$data ->product_name}}</span>
                                                        </td>
                                                        <td>{{$data ->stock}}</td>
                                                        <td>{{$data ->price}}</td>
                                                        <td>Dashboard</td>
                                                        <td>{{$data ->status}}</td>
                                                        <td>
                                                            <div class="row">
                                                                <a href="product/update/{{ $data ->product_id}}" class="badge badge-outline-success mr-3">
                                                                    Edit Product 
                                                                </a>

                                                                <!-- Button trigger modal -->
                                                                <a href="product/remove/{{ $data ->product_id}}" type="button"class="btn btn-danger">Remove product</a>
                                                                {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Remove Product
                                                                </button> --}}
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div
                                                                        class="modal-dialog modal-dialog-centered">
                                                                        <div
                                                                            class="modal-content">
                                                                            <div
                                                                                class="modal-header">
                                                                                <h6 class="text-light" class="modal-title fs-5" id="exampleModalLabel">
                                                                                    Delete Product
                                                                                </h6>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div
                                                                                class="modal-body">
                                                                                Are you sure you want to delete this product?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                                                    Close
                                                                                </button>
                                                                                <button type="button" class="btn btn-primary">Save changes
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
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
