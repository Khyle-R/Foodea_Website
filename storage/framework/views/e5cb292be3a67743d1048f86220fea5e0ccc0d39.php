
<?php $__env->startSection('content'); ?>

          <div class="content-wrapper">
            <div class="row">
              
            </div>

            <div class="page-header">
               <h3 class="page-title black">Inventory</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Menu</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Inventory
                  </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row justify-content-sm-between px-3 mb-3">
                      <h4 class="card-title">Inventory</h4>
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
                            Select Category
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Chicken</a>
                            <a class="dropdown-item" href="#">Drinks</a>
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
                            <a class="dropdown-item" href="#">Ascending</a>
                            <a class="dropdown-item" href="#">Descending</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table id="example" class="table" style="width:100%">
                        <thead class="table-danger">
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
                            <th>Product Name</th>
                            <th>Product Cost</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $invent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              

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
                                src="<?php echo e(asset('product_images/'.$data->product_image)); ?>"
                                alt="image"
                                class="img-fluid"
                                style="
                                  height: 60px;
                                  width: 70px;
                                  border-radius: 2px;
                                "
                              />
                              <span class="pl-2"><?php echo e($data->product_name); ?></span>
                            </td>
                            <td><?php echo e($data->price); ?></td>
                            <td><?php echo e($data->inventory_id); ?></td>
                            <td><?php echo e($data->status); ?></td>
                            <td>
                              <div class="row">
                         
                                <div class="dropdown action-label">
                                  <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                      <i class=" pending mdi mdi-radiobox-marked"></i> Status
                                  </a>
                                  <div class="bg-white dropdown-menu dropdown-menu-right">
                                        <a data-toggle="modal" data-target="#deleteModal" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-success"></i> Delete</a>
                                        <a data-toggle="modal" data-target="#restoreModal" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Restore</a>
                                  </div>
                               </div>

                                <!-- Modal -->
                              <div class="modal fade" id="restoreModal" tabindex="-1" role="dialog" aria-labelledby="restoreModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="restoreModalLabel">Alert</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Are you sure you want to Resore?
                                    </div>
                                    <div class="modal-footer">
                                      <a class="badge badge-outline-dark" data-dismiss="modal">
                                        Close
                                      </a>
                                      <a class="badge badge-outline-success" href="product/restore/<?php echo e($data->inventory_id); ?>">
                                        Resore
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>



                                  <!-- Modal -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" >
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Are you sure you want to Delete?
                                      </div>
                                      <div class="modal-footer">
                                        <a class="badge badge-outline-dark" data-dismiss="modal">
                                          Close
                                        </a>
                                        <a class="badge badge-outline-danger" href="product/delete/<?php echo e($data->inventory_id); ?>">
                                          Delete
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>



                              </div>
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
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/admin/inventory.blade.php ENDPATH**/ ?>