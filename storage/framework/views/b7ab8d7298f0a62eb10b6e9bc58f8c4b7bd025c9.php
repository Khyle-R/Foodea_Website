
<?php $__env->startSection('content'); ?>
          <div class="content-wrapper">
            <div class="row">
              <h3 class="font-weight-bolder mb-5" style="color: #F54748"> RIDERS </h3>
                <div class="col-12 grid-margin stretch-card">
                  <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                      <div class="row align-items-center">
                        <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                          <div class="btn-group" role="group" >
                            <a class="btn btn-link text-light btn-outline-dark btn-rounded text-decoration-none" href="#" role="button">Riders</a>
                            <a class="btn btn-link text-light btn-outline-dark btn-rounded text-decoration-none" href="superadminapplication_partner.html" role="button">Partners</a>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- partner table -->
            <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">  
                      <div class="row justify-content-sm-between px-3 mb-3">
                        <p style="color: black; font-weight: bold;">Showing 3 Applicants</p>
                        <span class="selector">
                        <button type="button" class="btn btn-link text-decoration-none  font-weight-normal ">All</button>
                        <button type="button" class="btn btn-link text-decoration-none  font-weight-normal ">Pending</button>
                        <button type="button" class="btn btn-link text-decoration-none  font-weight-normal ">On-Hold</button>
                        <button type="button" class="btn btn-link text-decoration-none  font-weight-normal  ">Accepted</button>
                        </span>
                        <h4 class="card-title"></h4>
                        <div class="row">
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
                      </div>
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
                              <th style="color:black;">Applicant ID</th>
                              <th style="color:black;">Date Applied</th>
                              <th style="color:black;">Vehicle Type</th>
                              <th style="color:black;">Documents</th>
                              <th style="color:black;">Status</th>
                              <th style="color:black;">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                       <?php $__currentLoopData = $application; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         
                   
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
                                <span class="pl-2"><?php echo e($Data->vehicle_id); ?></span>
                              </td>
                              <td><?php echo e($Data->date); ?></td>
                              <td><?php echo e($Data->vehicle_type); ?></td>
                              <td class="text-danger"><i class="mdi mdi-file-check text-danger"></i>Review</td>
                              <td>
                                  <div class="badge badge-outline-warning">
                                    Pending
                                  </div>
                                </td>
                              <td>
                                  <button type="button" class="btn btn-outline-danger">View Details</button>
                              </td>
                            </tr>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
       <?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.superadmin_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/superadmin/superadmin_applicationrider.blade.php ENDPATH**/ ?>