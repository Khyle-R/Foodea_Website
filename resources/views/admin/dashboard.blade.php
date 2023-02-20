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
                          <h3 class="mb-0">{{$totalRevenue}}</h3>
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
                      Total Revenue
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
                          <h3 class="mb-0">{{ $totalOrders}}</h3>
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
                          <h3 class="mb-0">{{$productSold}}</h3>
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
                          <h3 class="mb-0">{{$totalProduct}}</h3>
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
@endsection