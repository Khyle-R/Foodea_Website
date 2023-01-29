@extends('superadmin.superadmin_index')
@section('content')
          <div class="content-wrapper">
          
            <!-- partner table buttons -->
            <div class="row justify-content-sm-start px-3">
              <p  style="color: black; font-weight: bold;">Showing 3 Applicants</p>
              <span>
              <button type="button" class="btn btn-link btn-danger btn-rounded active text-decoration-none  font-weight-normal ml-4">All</button>
              </span>
             </div>
             
              <h4 class="card-title"></h4>
              <div class="row justify-content-sm-between px-2 mb-2">
                <div class="text-dark px-1 small">
                    <label>All</label>
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
                    Newest
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton"
                  >
                    <a class="dropdown-item" href="#">Ascending</a>
                    <a class="dropdown-item" href="#">Descending</a>
                  </div>
                </div>
              </div>
            
           
           <!-- partner table -->
            <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">  
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Activity Description</th>
                              <th>Logged In</th>
                              <th>Logged Out</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <span class="pl-2">bc1qxy2kgdygjrsqtz</span>
                              </td>
                              <td>
                                Accepts Rider
                              </td>
                              <td>2023-02-22 12:51:052</td>
                              <td>2023-02-22 12:51:055</td>
                            </tr>
                            <tr>
                              <td>
                                <span class="pl-1">bc1qxy2kgdygjrsqtz</span>
                              </td>
                              <td>
                                Accepts Partner Merchant
                              </td>
                              <td>2023-02-22 12:51:053</td>
                              <td>2023-02-22 12:51:056</td>
                            </tr>
                            <tr>
                              <td>
                                <span class="pl-2">bc1qxy2kgdygjrsqtz</span>
                              </td>
                              <td>
                                Reject Rider
                              </td>
                              <td>2023-02-22 12:51:054</td>
                              <td>2023-02-22 12:51:057</td>
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