
<?php $__env->startSection('content'); ?>
  
   <div class="content-wrapper">
      <div class="row">

      </div>
      <div class="page-header">
         <h3 class="page-title black">Product</h3>
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item">
                  <a href="#">Menu</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">
                  Product
               </li>
            </ol>
         </nav>
      </div>
      <div class="row">
         <div class="col-12 grid-margin">
            <div class="card">
               <div class="card-body">
                  <div class="row justify-content-sm-between px-3 mb-3">
                     <h4 class="card-title">
                        Order Status
                     </h4>
                     <div class="row">
                        <div>
                           
                           <!-- Button trigger modal -->
                           <button type="button" class="btn btn-danger btn-sm px-3 mr-3 py-2 px-3 rounded" data-toggle="modal" data-target="#AddModal"> Add Product</button>
                           <!-- ADD Modal -->
                           <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h6 class="text-light" class="modal-title fs-5" id="deleteModalLabel">
                                          Add Product
                                       </h6>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <form class="forms-sample" action="<?php echo e(route('add_product')); ?>"method="post" enctype="multipart/form-data">
                                          <?php echo csrf_field(); ?>
                                          <div class="form-group">
                                             <label for="exampleInputName1" class="blackk">Product Name</label>
                                             <input type="text" class="form-control"id="exampleInputName1" placeholder="Name"value="<?php echo e(old('product_name')); ?>" name="product_name"
                                                required />
                                             <span style="color:red;">
                                                <?php $__errorArgs = ['product_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                   <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                             </span>
                                             <span class="gray">Do not exceed 20 characters when entering the product name.</span>
                                          </div>


                                          <div class="col form-group"><label for="exampleSelectGender" class="blackk">Category</label>
                                             <select class="form-control" id="exampleSelectGender" style="border: 1px solid" name="category" required>
                                                
                                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <option <?php echo e(old('category') == $data->main_category ? 'selected' : ''); ?> value="<?php echo e($data->category_id); ?>|<?php echo e($data->main_category); ?>"><?php echo e($data->main_category); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             </select>
                                             <span style="color:red;">
                                                <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                   <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                             </span>
                                          </div>

                                          <div class="form-group">
                                             <label for="" class="blackk">Calories:</label>
                                             <input type="text" class="form-control" id="tags_category" name="calories">
                                          </div>

                                          <div class="form-group">
                                             <label for="exampleTextarea1" class="blackk">Description</label>
                                             <textarea class="form-control"id="exampleTextarea1"rows="4" name="description" maxlength="225" required><?php echo e(old('description')); ?></textarea>
                                             <span style="color:red;">
                                                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                   <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                             </span>
                                             <span class="gray">Do not exceed 100 characters when entering
                                                the product details.</span>
                                          </div>

                                          <div class="form-group">
                                             <label for="exampleTextarea1" class="blackk">Ingredients</label>
                                             <textarea class="form-control"id="exampleTextarea1"rows="4" name="ingredients" maxlength="225" required><?php echo e(old('ingredients')); ?></textarea>
                                             <span style="color:red;">
                                                <?php $__errorArgs = ['ingredients'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                   <?php echo e($message); ?>

                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                             </span>
                                             <span class="gray">Do not exceed 100 characters when entering
                                                the product details.</span>
                                          </div>



                                          
                                          <div class="form-group">
                                             <div class="file-loading">

                                                <input type="file" class="product_image" name="product_image" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="1">
                                                <span style="color:red;">
                                                   <?php $__errorArgs = ['product_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                      <?php echo e($message); ?>

                                                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                             </div>
                                          </div>

                                          <div class="row">
                                             <div class="col-md">
                                                <label for="exampleInputName1" class="blackk">Price</label>
                                                <input type="number"class="form-control" id="exampleInputName1" value="<?php echo e(old('price')); ?>" name="price" required />
                                                <span style="color:red;">
                                                   <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                      <?php echo e($message); ?>

                                                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                             </div>
                                             <div class="col-md">
                                                <label for="exampleInputName1" class="blackk">Stock</label>
                                                <input type="number"class="form-control" id="exampleInputName1" value="<?php echo e(old('stock')); ?>" name="stock" required />
                                                <span style="color:red;">
                                                   <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                      <?php echo e($message); ?>

                                                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                             </div>
                                             <div class="col-md">
                                                <label for="exampleSelectGender" class="blackk">Status</label>
                                                <select class="form-control" id="exampleSelectGender" style="border: 1px solid" name="status" required>
                                                   <option><?php echo e(old('status')); ?></option>
                                                   <option>Active</option>
                                                   <option>Disabled</option>
                                                </select>
                                                <span style="color:red;">
                                                   <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                      <?php echo e($message); ?>

                                                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="text-lg-left text-center">
                                             <button type="button" class="btn btn-primary btn-lg mr-2 mt-4 py-2 px-5 addProduct" id="addProduct">
                                                Submit
                                             </button>
                                             <button type="button" class="btn btn-dark btn-lg mt-4 py-2 px-5 cancelProduct" data-dismiss="modal">
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
                  </div>
                  <div class="table-responsive">
                     <table id="example" class="table" style="width:100%">
                        <thead class="table-danger">
                           <tr>
                              <th>Product Name</th>
                              <th>Stock</th>
                              <th>Product Cost</th>
                              <th>Category</th>
                              <th>Status</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                 <td>
                                    <img src="<?php echo e($data->product_image); ?>" alt="image" class="img-fluid"
                                       style=" height: 60px; width: 70px; border-radius: 2px;" />
                                    <span class="pl-2"><?php echo e($data->product_name); ?></span>
                                 </td>
                                 <td><?php echo e($data->stock); ?></td>
                                 <td><?php echo e($data->price); ?></td>
                                 <td><?php echo e($data->category_name); ?></td>
                                 <td>
                                    <?php if($data->status == 'Active'): ?>
                                       <button class="btn btn-success" data-target="#Cancelled">
                                          Active
                                       </button>
                                    <?php elseif($data->status == 'Disabled'): ?>
                                       <button class="btn btn-warning" data-target="#Cancelled">
                                          Disabled
                                       </button>
                                    <?php else: ?>
                                    <?php endif; ?>
                                 </td>
                                 <td>
                                    <div class="row">
                                       <div class="dropdown action-label">
                                          <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                             <i class=" pending mdi mdi-radiobox-marked"></i> Status
                                          </a>
                                          <div class="bg-white dropdown-menu dropdown-menu-right">
                                             <a data-toggle="modal" data-target="#deleteModal<?php echo e($data->product_id); ?>" class="action-btn dropdown-item black" href="#"><i
                                                   class="fa fa-dot-circle-o text-success"></i> Remove Product</a>
                                             <a data-toggle="modal" data-target="#EditModal<?php echo e($data->product_id); ?>" class="action-btn dropdown-item black" href="#"><i
                                                   class="fa fa-dot-circle-o text-danger"></i> Edit Product</a>
                                          </div>
                                       </div>

                                       <!-- UPDATE Modal -->
                                       <div class="modal fade" id="EditModal<?php echo e($data->product_id); ?>" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h6 class="text-light" class="modal-title fs-5" id="deleteModalLabel">
                                                      Update Product
                                                   </h6>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   <form class="forms-sample" action="<?php echo e(route('product.updateProductInfo')); ?>" method="post" enctype="multipart/form-data">
                                                      <?php echo csrf_field(); ?>
                                                      <input type="hidden" value="<?php echo e($data->product_id); ?>" name="product_id">
                                                      <div class="form-group">
                                                         <label for="exampleInputName1" class="blackk">Product Name</label>
                                                         <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo e($data->product_name); ?>"
                                                            name="product_name" required />
                                                         <span class="gray">Do not exceed 20
                                                            characters when entering the product
                                                            name.</span>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col form-group">
                                                            <label for="exampleSelectGender" class="blackk">Category</label>
                                                            <select class="form-control" id="exampleSelectGender" style="border: 1px solid" name="category" required>
                                                               
                                                               <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys => $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option <?php echo e($data->category_name == $datas->main_category ? 'selected' : ''); ?> value="<?php echo e($datas->category_id); ?>|<?php echo e($datas->main_category); ?>"><?php echo e($datas->main_category); ?></option>
                                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="" class="blackk">Calories:</label>
                                                         <input type="text" class="form-control" id="tags" name="calories" value="<?php echo e($data->calories); ?>">
                                                      </div>


                                                      

                                                      <div class="form-group">
                                                         <label for="exampleTextarea1" class="blackk">Description</label>
                                                         <textarea class="form-control"id="exampleTextarea1"rows="4" placeholder="" name="description" maxlength="225" required><?php echo e($data->description); ?></textarea>
                                                         <span class="gray">Do not exceed 100
                                                            characters when entering the product
                                                            details.</span>
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="exampleTextarea1" class="blackk">Ingredients</label>
                                                         <textarea class="form-control"id="exampleTextarea1"rows="4" placeholder="" name="ingredients" maxlength="225" required><?php echo e($data->ingredients); ?></textarea>
                                                         <span class="gray">Do not exceed 100
                                                            characters when entering the product
                                                            details.</span>
                                                      </div>

                                                      <div class="form-group">
                                                         <div class="file-loading">
                                                            <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1"
                                                               data-theme="fa5" value="<?php echo e($data->product_image); ?>" name="product_image" />
                                                         </div>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-md">
                                                            <label for="exampleInputName1" class="blackk">Price</label>
                                                            <input type="number" min="0" step="0.01" class="form-control" id="exampleInputName1" placeholder=""
                                                               value="<?php echo e($data->price); ?>" name="price" required />
                                                         </div>
                                                         <div class="col-md">
                                                            <label for="exampleInputName1" class="blackk">Stock</label>
                                                            <input type="number"class="form-control" id="exampleInputName1" placeholder="" value="<?php echo e($data->stock); ?>"
                                                               name="stock" required />
                                                         </div>
                                                         <div class="col-md">
                                                            <label for="exampleSelectGender" class="blackk">Status</label>
                                                            <select class="form-control" id="exampleSelectGender" style="border: 1px solid" name="status" required>
                                                               <option><?php echo e($data->status); ?></option>
                                                               <option>Active</option>
                                                               <option>Disabled</option>
                                                            </select>
                                                         </div>
                                                      </div>

                                                      <div class="text-lg-left text-center">
                                                         <button type="button" class="btn btn-primary btn-lg mr-2 mt-4 py-2 px-5 updateButton">
                                                            Update
                                                         </button>
                                                         <button class="btn btn-dark btn-lg mt-4 py-2 px-5" data-dismiss="modal">
                                                            Cancel
                                                         </button>
                                                      </div>

                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>



                                       <!-- Modal -->
                                       <div class="modal fade" id="deleteModal<?php echo e($data->product_id); ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h6 class="text-light" class="modal-title fs-5" id="deleteModalLabel">
                                                      Delete Product
                                                   </h6>
                                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   Are you sure you want to delete this product?
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                      Close
                                                   </button>
                                                   <a href="/product/remove/<?php echo e($data->product_id); ?>" type="button"class="btn btn-danger">Remove
                                                      product</a>
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
                  <div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- content-wrapper ends -->
   <!-- partial:../../partials/_footer.html -->
   <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
         <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022. All Rights Reserved</span>
       
      </div>



      <script>
         $(document).ready(function() { //this Jquery when you click the add button the type of the button become submit
            $('.addProduct').click(function() {
               $('.addProduct').attr('type', 'Submit');
            });
         });
      </script>

      <script>
         $(document).ready(function() { //this Jquery when you click the update button the type of the button become submit
            $('.updateButton').click(function() {
               $('.updateButton').attr('type', 'Submit');
            });
         });
      </script>

   </footer>
   <!-- partial -->
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/admin/product.blade.php ENDPATH**/ ?>