
<?php $__env->startSection('content'); ?>

          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img
                          src="../../assets/images/dashboard/Group126@2x.png"
                          class="gradient-corona-img img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="text-light mb-1 mb-sm-0">
                          Want even more features?
                        </h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">
                          Your account has limited access, please complete the
                          documents needed so you can access all features.
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
            <div class="page-header">
              <h3 class="page-title">Product</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Menu</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Product
                  </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card px-3">
                  <div class="card-body">
                    <h4 class="card-title">Add Product</h4>
                    <div class="row justify-content-sm-between px-3 mb-3"></div>
                    <div class="row">
                      
                        <form class="forms-sample"  action="<?php echo e(route('add_product.addProduct')); ?>" method="post" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?> 
                          <div class="form-group">
                            <label for="exampleInputName1" class="blackk">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo e(old('product_name')); ?>" name="product_name"/>
                            <span style="color:red;">
                            <?php $__errorArgs = ['product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            <span class="gray">Do not exceed 20 characters when entering the product name.</span>
                          </div>
                          <div class="row">
                            <div class="col form-group">
                              <label for="exampleSelectGender" class="blackk">Category</label>
                              <select class="form-control"  id="exampleSelectGender" style="border: 1px solid" name="category">
                                <option></option>
                                <option>Chicken</option>
                                <option>Pork</option>
                              </select>
                              <span style="color:red;">
                                <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                            <div class="col form-group">
                              <label for="exampleSelectGender" class="blackk">Type</label>
                              <select class="form-control" id="exampleSelectGender"style="border: 1px solid" name="type">
                                <option></option>
                                <option>Fried Chicken</option>
                                <option>Chicken Soup</option>
                              </select>
                              <span style="color:red;">
                                <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea1" class="blackk">Description</label>
                            <textarea class="form-control"id="exampleTextarea1"rows="4" name="description"></textarea>
                            <span style="color:red;">
                              <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            <span class="gray">Do not exceed 100 characters when entering the product details.</span>
                          </div>
                        
                      
                     

                          <div class="form-group">
                            <div class="file-loading">
                              <input type="file" value="<?php echo e(old('product_image')); ?>" name="product_image"/>
                              <span style="color:red;">
                                <?php $__errorArgs = ['product_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <label for="exampleInputName1" class="blackk">Price</label>
                              <input type="text"class="form-control" id="exampleInputName1" value="<?php echo e(old('price')); ?>" name="price"/>
                              <span style="color:red;">
                                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                            <div class="col-md">
                              <label for="exampleInputName1" class="blackk">Stock</label>
                              <input type="text"class="form-control" id="exampleInputName1" value="<?php echo e(old('stock')); ?>" name="stock"/>
                              <span style="color:red;">
                                <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                            <div class="col-md">
                              <label for="exampleSelectGender" class="blackk">Status</label>
                              <select  class="form-control" id="exampleSelectGender" style="border: 1px solid" name="status">
                                <option></option>
                                <option>Active</option>
                                <option>Disabled</option>
                              </select>
                              <span style="color:red;">
                                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                            </div>
                          </div>
                          <div class="text-lg-left text-center">
                            <button type="submit" class="btn btn-primary btn-lg mr-2 mt-4 py-2 px-5">
                              Submit
                            </button>
                            <button class="btn btn-dark btn-lg mt-4 py-2 px-5">
                              Cancel
                            </button>
                          </div>
                        </form>
                      
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

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/admin/add_product.blade.php ENDPATH**/ ?>