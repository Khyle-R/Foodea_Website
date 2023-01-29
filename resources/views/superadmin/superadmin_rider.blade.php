@extends('superadmin.superadmin_index')
@section('content')
          <div class="content-wrapper">
          
            <!-- rider table buttons -->
            <div class="row justify-content-sm-between px-3">
              <p style="color: black; font-weight: bold;">Showing 3 Applicants</p>
              <span class="selector">
              <button type="button" class="btn btn-link text-decoration-none  font-weight-normal ">All</button>
              <button type="button" class="btn btn-link text-decoration-none  font-weight-normal ">Pending</button>
              <button type="button" class="btn btn-link text-decoration-none  font-weight-normal ">On-Hold</button>
              <button type="button" class="btn btn-link text-decoration-none  font-weight-normal  ">Accepted</button>
              </span>
              <h4 class="card-title"></h4>

             <!-- Dropwdown Sorting -->
              <div class="template-demo">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ratings </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item" href="#">1 <i class="mdi mdi-star text-warning pt-5"></i></a>
                    <a class="dropdown-item" href="#">2 <i class="mdi mdi-star text-warning pt-5"></i>
                      <i class="mdi mdi-star text-warning pt-5"></i>
                    </a>
                    <a class="dropdown-item" href="#">3 <i class="mdi mdi-star text-warning pt-5"></i>
                      <i class="mdi mdi-star text-warning pt-5"></i><i class="mdi mdi-star text-warning pt-5"></i>
                    </a>
                    <a class="dropdown-item" href="#">4 <i class="mdi mdi-star text-warning pt-5"></i>
                      <i class="mdi mdi-star text-warning pt-5"></i><i class="mdi mdi-star text-warning pt-5"></i>
                      <i class="mdi mdi-star text-warning pt-5"></i>
                    </a>
                    <a class="dropdown-item" href="#">5 <i class="mdi mdi-star text-warning pt-5"></i>
                      <i class="mdi mdi-star text-warning pt-5"></i><i class="mdi mdi-star text-warning pt-5"></i>
                      <i class="mdi mdi-star text-warning pt-5"></i><i class="mdi mdi-star text-warning pt-5"></i>
                    </a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Newest </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item" href="#">Oldest</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Ascending</a>
                    <a class="dropdown-item" href="#">Descending</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-dark px-1 small">
              <label>All</label>
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
                              <th>Riders ID</th>
                              <th>Name</th>
                              <th>Contact</th>
                              <th>Vehicle Type</th>
                              <th>Ratings</th>
                              <th>Status</th>
                              <th>Action</th>
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
                                <span class="pl-2">bc1qxy2kgdygjrsqtz</span>
                              </td>
                              <td>Juan Dela Cruz</td>
                              <td class="text-danger">
                                <i class="mdi mdi-email px-2"></i>
                                <i class="mdi mdi-cellphone px-2"></i>
                              </td>
                              <td>Motorcyle</td>
                              <td>3 <i class="mdi mdi-star text-warning  mt-5"></i>
                                <i class="mdi mdi-star text-warning  mt-5"></i>
                                <i class="mdi mdi-star text-warning  mt-5"></i></td>
                              <td>
                                <div>
                                  <i class="mdi mdi-circle text-success text-small"></i>
                                  Active
                                </div>
                              </td>
                              <td>
                                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#riderdetails">View Details</button>
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
                                <span class="pl-2">bc1qxy2kgdygjrsqtz</span>
                              </td>
                              <td>Pedro Silang</td>
                              <td class="text-danger">
                                <i class="mdi mdi-email px-2"></i>
                                <i class="mdi mdi-cellphone px-2"></i>
                              </td>
                              <td>Bicycle</td>
                              <td>1 <i class="mdi mdi-star text-warning mt-5"></i></td>
                              <td>
                                <div>
                                  <i class="mdi mdi-circle text-success text-small"></i>
                                  Active
                                </div>
                              </td>
                              <td>
                                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#riderdetails">View Details</button>
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
                                <span class="pl-2">bc1qxy2kgdygjrsqtz</span>
                              </td>
                              <td>Billy Jou</td>
                              <td class="text-danger">
                                <i class="mdi mdi-email px-2"></i>
                                <i class="mdi mdi-cellphone px-2"></i>
                              </td>
                              <td>Motorcyle</td>
                              <td>5 <i class="mdi mdi-star text-warning  mt-5"></i>
                                <i class="mdi mdi-star text-warning  mt-5"></i>
                                <i class="mdi mdi-star text-warning  mt-5"></i>
                                <i class="mdi mdi-star text-warning  mt-5"></i>
                                <i class="mdi mdi-star text-warning  mt-5"></i>
                              </td>
                              <td>
                                  <div>
                                    <i class="mdi mdi-circle text-danger text-small"></i>
                                    Inactive
                                  </div>
                                </td>
                              <td>
                                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#riderdetails">View Details</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            <!-- Modal Rider View Details-->
            <div class="modal fade" id="riderdetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                    <!-- Accepted & User -->
                            <img class="rounded-circle mx-auto d-block py-1" src="assets/images/billy.jpg" width="120" height="110"/>
                            <ul class="list-unstyled text-center text-small text-dark">
                              <li class="font-weight-bolder"><i class="mdi mdi-circle text-success pr-1"></i>Billy Jou Nillos</li>
                              <li>5.0
                                 <i class="mdi mdi-star text-warning pt-3" style="font-size: 10px;">
                                 <i class="mdi mdi-star text-warning">
                                 <i class="mdi mdi-star text-warning">
                                 <i class="mdi mdi-star text-warning">
                                 <i class="mdi mdi-star text-warning">
                                 </i></i></i></i></i>
                              </li>
                            </ul>
            
                  <!-- Rider Info -->
                  <form>
                    <div class="form-group text-dark">
                      <label for="inputAddress">Email</label>
                      <input type="email" class="form-control form-control-sm" placeholder="billyjounillos@gmail.com">
                    </div>
                    <div class="form-group text-dark">
                      <label for="inputAddress2">Contact Number</label>
                      <input type="text" class="form-control" placeholder="09123456789">
                    </div>
                    <div class="form-group text-dark">
                      <label for="inputAddress">City</label>
                      <input type="text" class="form-control form-control-sm" placeholder="Caloocan City">
                    </div>
                    <div class="form-group text-dark">
                      <label for="inputAddress">Birthdate</label>
                      <input type="text" class="form-control form-control-sm" placeholder="October 25, 2000">
                    </div>
                    <div class="form-group text-dark">
                      <label for="inputAddress">Barangay</label>
                      <input type="text" class="form-control form-control-sm" placeholder="178">
                    </div>
                    <div class="form-group text-dark">
                      <label for="inputAddress2">Joined in</label>
                      <input type="text" class="form-control form-control-sm" placeholder="November 23, 2022">
                    </div>
                  </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-block btn-rounded " data-dismiss="modal">Back</button>
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