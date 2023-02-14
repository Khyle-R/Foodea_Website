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
                    <h6 class="text-muted font-weight-normal"> Merchants</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">80</h3>
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
                      <div class="d-flex flex-row justify-content-between my-2">
                        <div class="title">
                    <h4 class="card-title  align-items-center">Top Selling Merchants</h4>
                    </div>
                    
                    </div>
                    <div class="table-responsive">
                    <table id="example0" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Descriptiong</th>
                                <th>Date Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                       <div class="d-flex flex-row justify-content-between my-2">
                        <div class="title">
                    <h4 class="card-title  align-items-center">Top Selling Products</h4>
                    </div>
                    </div>
                    <div class="table-responsive">
                    <table id="example1" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Description</th>
                                <th>Date Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                          
                        </tbody>
                    
                    </table>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between my-2">
                        <div class="title">
                    <h4 class="card-title  align-items-center">Recent Applications</h4>
                    </div>
                    
                    </div>
                      <div class="table-responsive">
                    <table id="example2" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Description</th>
                                <th>Date Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                          
                        </tbody>
                    
                    </table>
                    </div>
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