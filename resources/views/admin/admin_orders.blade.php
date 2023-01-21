@extends('admin.index')
@section('content')
    
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
                        <h4 class=" mb-1 mb-sm-0" style="color: #FEEECB;">Want even more features?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">
                          Your account has limited access, please complete the documents needed so you can access all features.
                        </p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="#"
                            class="btn btn-warning btn-rounded get-started-btn text-decoration-none"
                            >Upload documents</a
                          >
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- rider table buttons -->
            <div class="row justify-content-sm-between px-3">
              <h4 class="card-title"></h4>
              <div class="template-demo">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Daily </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item" href="#">Weekly</a>
                    <a class="dropdown-item" href="#">Monthly</a>
                  </div>
                </div>

                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Date </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                    <a class="dropdown-item" href="#">Day</a>
                    <a class="dropdown-item" href="#">Month</a>
                    <a class="dropdown-item" href="#">Year</a>
                  </div>
                </div>

                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Status </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                    <a class="dropdown-item" href="#">Accepted</a>
                    <a class="dropdown-item" href="#">Cancelled</a>
                    <a class="dropdown-item" href="#">Delivered</a>
                    <a class="dropdown-item" href="#">In Delivery</a>
                  </div>
                </div>
              </div>
            </div>
      
           <!-- rider table -->
            <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">  
                      <div class="table-responsive text-center">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Order Number</th>
                              <th>Customer’s ID</th>
                              <th>Product ID</th>
                              <th>Date</th>
                              <th>Total</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                bc1qxy2kgdygjrsqtzq2n0y
                              </td>
                              <td>
                                202223131
                              </td>
                              <td>12387</td>
                              <td>
                                Febraury 23, 2022
                              </td>
                              <td>₱95.00</td>
                              <td>
                                <div class="badge badge-danger">
                                  Cancelled
                                </div>
                              </td>
                              <td>
                                  <button type="button" class="btn btn-outline-danger">View Details</button>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                bc1qxy2kgdygjrsqtzq2n
                              </td>
                              <td>
                                202223131
                              </td>
                              <td>12387</td>
                              <td>
                                Febraury 23, 2022
                              </td>
                              <td>₱95.00</td>
                              <td>
                                <div class="badge badge-warning">
                                  In Delivery
                                </div>
                              </td>
                              <td>
                                  <button type="button" class="btn btn-outline-danger">View Details</button>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                bc1qxy2kgdygjrsqtzq2n0
                              </td>
                              <td>
                                <span class="pl-2">202223131</span>
                              </td>
                              <td>12387</td>
                              <td>
                                Febraury 23, 2022
                              </td>
                              <td>₱95.00</td>
                              <td>
                                <div class="badge badge-success">
                                    Delivered
                                  </div>
                                </td>
                              <td>
                                  <button type="button" class="btn btn-outline-danger">View Details</button>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                bc1qxy2kgdygjrsqtzq2n0
                              </td>
                              <td>
                                <span class="pl-2">202223131</span>
                              </td>
                              <td>12387</td>
                              <td>
                                Febraury 23, 2022
                              </td>
                              <td>₱95.00</td>
                              <td>
                                <div class="badge badge-info">
                                    Accepted
                                  </div>
                                </td>
                              <td>
                                  <button type="button" class="btn btn-outline-danger">View Details</button>
                              </td>
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
@endsection