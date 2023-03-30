
<?php $__env->startSection('content'); ?>

          <div class="content-wrapper">
            <div class="row">
              
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0"><?php echo e($totalRevenue); ?></h3>
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
                          <h3 class="mb-0"><?php echo e($totalOrders); ?></h3>
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
                          <h3 class="mb-0"><?php echo e($productSold); ?></h3>
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
                          <h3 class="mb-0"><?php echo e($totalProduct); ?></h3>
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
                    <h4 class="card-title">Product</h4>
                    <div class="table-responsive">
                       <div class="table-responsive">
                     <table id="example" class="table" style="width:100%">
                        <thead class="table-danger">
                           <tr>
                              <th>Product Name</th>
                              <th>Stock</th>
                              <th>Product Cost</th>
                              <th>Category</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                 <td>
                                    <img src="<?php echo e($data->product_image); ?>" alt="image" class="img-fluid"
                                       style=" height: 60px; width: 70px; border-radius: 2px;" />
                                    <span class="pl-2"><?php echo e($data->product_name); ?></span>
                                 </td>
                                 <td><?php echo e($data->stock); ?></td>
                                 <td><?php echo e($data->price); ?></td>
                                 <td><?php echo e($data->category_name); ?></td>
                                
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
             <div class="row">
                 <div class="col-lg-4">
                   
                      </div>
                <div class="col-lg-12">
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
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>