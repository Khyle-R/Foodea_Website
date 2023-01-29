@extends('superadmin.superadmin_index')
@section('content')

 <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">₱1300.15</h3>
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
                      Sales
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
                          <h3 class="mb-0">35</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-info">
                          <span
                            class="mdi mdi-account icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">
                      Riders
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
                          <h3 class="mb-0">45</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-info">
                          <span
                            class="mdi mdi-arrow-bottom-left icon-item"
                          ></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Merchant</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">5</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-info">
                          <span
                            class="mdi mdi mdi-account-outline icon-item">
                          </span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">
                     Users
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Sales -->
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sales</h4>
                    <canvas id="areaChart" style="height: 250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                  <h4 class="card-title">Top Selling Merchant</h4>
                  <div class="dropdown">
                    <button
                      class="btn btn-secondary dropdown-toggle py-2 px-3 rounded"
                      type="button"
                      id="dropdownMenuButton"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      Sort
                    </button>
                    <div
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <a class="dropdown-item" href="#">Ascending</a>
                      <a class="dropdown-item" href="#">Descendinng</a>
                    </div>
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
                      Today
                    </button>
                    <div
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <a class="dropdown-item" href="#">Ascending</a>
                      <a class="dropdown-item" href="#">Descendinng</a>
                    </div>
                  </div>
                  </div>
                    <div class="table-responsive">
                    <table class="table table-striped">
                      <thead class="table-danger text-light">
                        <tr>
                          <th>#</th>
                          <th>Business Name</th>
                          <th>Name</th>
                          <th>Sales</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>No Item</td>
                          <td>No Item</td>
                          <td>No Item</td>
                          <td>No Item</td>
                        </tr>
                        <tr>
                          <td>No Item</td>
                          <td>No Item</td>
                          <td>No Item</td>
                          <td>No Item</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
            </div>
          </div>  
         </div>
              </div>

              <!--Recent Applcation-->
              <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title">Recent Application</h4>
                        <div class="dropdown">
                          <button
                            class="btn btn-secondary dropdown-toggle py-2 px-3 rounded"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Sort
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Ascending</a>
                            <a class="dropdown-item" href="#">Descendinng</a>
                          </div>
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
                            Date  
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Yesterday</a>
                          </div>
                        </div>
                          <a class="view mb-1 small">View</a>
                        </div>
                      <canvas id="areaChart" style="height: 250px"></canvas>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title">Top Selling Product</h4>
                    <div class="dropdown">
                      <button
                        class="btn btn-secondary dropdown-toggle py-2 px-3 rounded"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        Sort
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <a class="dropdown-item" href="#">Ascending</a>
                        <a class="dropdown-item" href="#">Descendinng</a>
                      </div>
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
                        Today
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <a class="dropdown-item" href="#">Ascending</a>
                        <a class="dropdown-item" href="#">Descendinng</a>
                      </div>
                    </div>
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