@extends('superadmin.superadmin_index')
@section('content')
         <div class="content-wrapper">
                 <div class="row">
                          
                        </div>
                        <div class="page-header">
                            <h3 class="black page-title">Merchants</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Menu</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Merchants
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
                                            <h5 class="card-title">
                                                Showing 3 Applicants
                                            </h5>
                                            <div class="d-flex flex-wrap">
                                               
                                                <div class="dropdown">
                                                    <button
                                                        class="but-cat btn btn-secondary dropdown-toggle py-2 px-3 rounded mb-2 mb-sm-0"
                                                        type="button"
                                                        id="dropdownMenuButton"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                    >
                                                        Status
                                                    </button>
                                                    <div
                                                        class="dropdown-menu"
                                                        aria-labelledby="dropdownMenuButton"
                                                    >
                                                        <a
                                                            class="dropdown-item"
                                                            href="#"
                                                            >Pending</a
                                                        >
                                                        <a
                                                            class="dropdown-item"
                                                            href="#"
                                                            >On-hold</a
                                                        >
                                                          <a
                                                            class="dropdown-item"
                                                            href="#"
                                                            >Rejected</a
                                                        >
                                                    </div>
                                                </div>

                                                <div class="dropdown">
                                                    <button
                                                        class="but-cat btn btn-secondary dropdown-toggle py-2 px-3 rounded mx-1 mx-sm-3 mb-3 mb-xs-0"
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
                                                 <div class="dropdown">
                                                    <button
                                                        class="but-cat btn btn-secondary dropdown-toggle py-2 px-3 rounded"
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
                                                        <th>Company ID</th>
                                                        <th>Date Applied</th>
                                                        <th>Business Type</th>
                                                        <th>Contact</th>
                                                        <th>Ratings</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>  
                                                <tbody>
                                                   
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-muted m-0">
                                                                <label class="form-check-label"> <input type="checkbox"class="form-check-input"/></label>
                                                            </div>
                                                        </td>
                                                       
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <a class="red-icon d-flex align-items-center" href="">
                                                            <i class="icons mdi mdi-email"></i>
                                                            <span class="ml-1">Email</span>
                                                            </a></td>
                                                            <td></td>
                                                        <td>
                                                            <div class="row">
                                                                <a href="/superadmin_partnerdetails" class="view-details badge badge-outline-success mr-3">
                                                                    View Details
                                                                </a>

                                                              
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
        @endsection