
<?php $__env->startSection('content'); ?>

 <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <?php if($revenue): ?>
                        
                          <h3 class="mb-0">₱ <?php echo e($revenue); ?>.00</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                           
                          </p>
                          <?php else: ?>
                           <h3 class="mb-0">₱ 0.00</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                           
                          </p>
                            <?php endif; ?>
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
                      Revenue
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
                          <?php if($riders): ?>
                          <h3 class="mb-0"><?php echo e($riders); ?></h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                          
                          </p>
                          
                          <?php else: ?>
                          <h3 class="mb-0">0</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                            
                          </p>
                          <?php endif; ?>
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
                          <?php if($merchant): ?>
                          <h3 class="mb-0"><?php echo e($merchant); ?></h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                     
                          </p>
                          
                          <?php else: ?>
                          <h3 class="mb-0">0</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                     
                          </p>
                          <?php endif; ?>
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
                          <?php if($users): ?>
                          <h3 class="mb-0"><?php echo e($users); ?></h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                       
                          </p>
                          <?php else: ?>
                           <h3 class="mb-0">0</h3>
                          <p class="text-success ml-2 mb-0 font-weight-medium">
                       
                          </p>
                          <?php endif; ?>
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
                    <h4 class="card-title">Revenue</h4>
                    <canvas id="areaChart" style="height: 250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"></h4>
                    <canvas id="barChart" style="height:230px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card mb-4">
                  <div class="card-body">
                      <div class="d-flex flex-row justify-content-between my-2">
                        <div class="title">
                    <h4 class="card-title  align-items-center">Top Selling Merchants</h4>
                    </div>
                    
                    </div>
                    
                    <div class="table-responsive">
                    <table id="topSellingMerchant" class="table" style="width:100%">
                        <thead>
                          
                            <tr>
                                <th>ID</th>
                                <th>Business Name</th>
                                <th>Email</th>
                                <th>Business Type</th>
                                <th>Orders</th>
                            </tr>
                          
                            
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $TopSellingMerchant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tops): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($tops->merchant_id); ?></td>
                                <td><?php echo e($tops->business_name); ?></td>
                                <td><?php echo e($tops->store_email); ?></td>
                                <td><?php echo e($tops->business_type); ?></td>
                                <td><?php echo e($tops->totals); ?></td>
                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <th>Product ID</th>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Sales</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                          <?php if($products == 0): ?>
                           <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            
                            </tr>
                        
                          <?php else: ?>
                          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($prod->product_id); ?></td>
                                <td><?php echo e($prod->product_name); ?></td>
                                <td><?php echo e($prod->category_name); ?></td>
                                <td><?php echo e($prod->totals); ?></td>
                            
                            </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php endif; ?>
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
                                <th>Name</th>
                                <th>Vehicle Type</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Date Application</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $Data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <img class="circle mr-2" src="<?php echo e(url(('uploads/'. 'rider_documents'. '/'.$recent->rider_id. '/'). $recent->rider_photo)); ?>" alt="">
                                    <?php echo e($recent->firstname. ' ' .$recent->lastname); ?>

                                </td>
                                <td><?php echo e($recent->vehicle_type); ?></td>
                                <td><?php echo e($recent->email); ?></td>
                                <td>
                                  <i class=" pending mdi mdi-radiobox-marked"></i>
                                  <?php echo e($recent->status); ?></td>
                                <td><?php echo e($recent->date); ?></td>
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

         <script type="text/javascript">
      
      var DateLabel =  <?php echo json_encode($day); ?>;
      var DateData =  <?php echo json_encode($total); ?>;

      var YearLabel =  <?php echo json_encode($year); ?>;
      var YearData =  <?php echo json_encode($barsales); ?>;
    </script>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.superadmin_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/superadmin/superadmin_dashboard.blade.php ENDPATH**/ ?>