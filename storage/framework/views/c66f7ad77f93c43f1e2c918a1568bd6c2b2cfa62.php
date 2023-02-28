
<?php $__env->startSection('content'); ?>
   <style>
      /* Style for Tag inside the add Category modal */
      .wrapper {
         width: 470px;

         border-radius: 10px;


      }

      .wrapper :where(.title, li, li i, .details) {
         display: flex;
         align-items: center;
      }

      .title img {
         max-width: 21px;
      }

      .title h2 {
         font-size: 21px;
         font-weight: 600;
         margin-left: 8px;
      }

      .wrapper .content {
         margin: 10px 0;
      }

      .content p {
         font-size: 15px;
      }

      .content ul {
         display: flex;
         flex-wrap: wrap;
         padding: 7px;
         margin: 12px 0;
         border-radius: 5px;
         border: 1px solid #a6a6a6;
      }

      .content ul li {
         color: #333;
         margin: 4px 3px;
         list-style: none;
         border-radius: 5px;
         background: #F2F2F2;
         padding: 5px 8px 5px 10px;
         border: 1px solid #e3e1e1;
      }

      .content ul li i {
         height: 20px;
         width: 20px;
         color: #808080;
         margin-left: 8px;
         font-size: 12px;
         cursor: pointer;
         border-radius: 50%;
         background: #dfdfdf;
         justify-content: center;
      }

      .content ul input {
         flex: 1;
         padding: 4px;
         border: none;
         outline: none;
         font-size: 16px;
      }

      .wrapper .details {
         justify-content: space-between;
      }
   </style>
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
                                             <input type="text" class="form-control"id="exampleInputName1" placeholder="Name"value="<?php echo e(old('product_name')); ?>"
                                                name="product_name" required/>
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
                                          <div class="row">
                                             <div class="col form-group"><label for="exampleSelectGender" class="blackk">Category</label>
                                                <select class="form-control" id="exampleSelectGender" style="border: 1px solid" name="category" required>
                                                   <option><?php echo e(old('category')); ?></option>
                                                   <option>Chicken</option>
                                                   <option>Pork</option>
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
                                             <div class="col form-group">
                                                
                                                <input type=" text" id="tags_category" value="<?php echo e(old('tags_category')); ?>" name="tags_category">
                                                <div class="wrapper">
                                                   <div class="content">
                                                      <p> Tags</p>
                                                      <ul id="ul"><input id="input" value="<?php echo e(old('tags')); ?>" class="" type="text" name="tags"
                                                            spellcheck="false"></ul>
                                                      <span style="color:red;">
                                                         <?php $__errorArgs = ['tags_category'];
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
                                                      <p class="gray">Press enter or add a comma after
                                                         each tag</p>
                                                   </div>
                                                   <div class="details">
                                                      <p><span>10</span> tags are remaining</p>
                                                      <button class="btn btn-warning btn-sm px-3 mr-3 py-2 px-3 rounded" type="button">Remove All</button>
                                                   </div>
                                                </div>
                                                <span style="color:red;">
                                                   <?php $__errorArgs = ['tags_category'];
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

                                          <div class="form-group">
                                             <label for="exampleTextarea1" class="blackk">Description</label>
                                             <textarea class="form-control"id="exampleTextarea1"rows="4" name="description" required><?php echo e(old('description')); ?></textarea>
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
                                             <textarea class="form-control"id="exampleTextarea1"rows="4" name="ingredients" required><?php echo e(old('ingredients')); ?></textarea>
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
                                                <input type="file" value="<?php echo e(old('product_image')); ?>" name="product_image" />
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
                                                <input type="text"class="form-control" id="exampleInputName1" value="<?php echo e(old('price')); ?>" name="price" required/>
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
                                                <input type="text"class="form-control" id="exampleInputName1" value="<?php echo e(old('stock')); ?>" name="stock" required/>
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
                                    <img src="<?php echo e(asset('product_images/' . $data->product_image)); ?>" alt="image" class="img-fluid"
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
                                                <a data-toggle="modal" data-target="#deleteModal" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-success"></i> Remove Product</a>
                                                <a data-toggle="modal" data-target="#EditModal<?php echo e($data->product_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Edit Product</a>
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
                                                            name="product_name" required/>
                                                         <span class="gray">Do not exceed 20
                                                            characters when entering the product
                                                            name.</span>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col form-group">
                                                            <label for="exampleSelectGender" class="blackk">Category</label>
                                                            <select class="form-control" id="exampleSelectGender" style="border: 1px solid" name="category" required>
                                                               <option>
                                                                  <?php echo e($data->category_name); ?>

                                                               </option>
                                                               <option>Chicken</option>
                                                               <option>Pork</option>
                                                            </select>
                                                         </div>
                                                         <div class="col form-group">
                                                            <input type=" text" id="tags_category" value="<?php echo e($data->tags); ?>" name="tags_category">
                                                            <div class="wrapper">
                                                                <div class="content">
                                                                   <p> Tags</p>
                                                                   <ul id="ul"><input id="input" value="" class="" type="text" name="tags"
                                                                         spellcheck="false"></ul>
                                                                   <span style="color:red;">
                                                                      <?php $__errorArgs = ['tags_category'];
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
                                                                   <p class="gray">Press enter or add a comma after
                                                                      each tag</p>
                                                                </div>
                                                                <div class="details">
                                                                   <p><span>10</span> tags are remaining</p>
                                                                   <button class="btn btn-warning btn-sm px-3 mr-3 py-2 px-3 rounded" type="button">Remove All</button>
                                                                </div>
                                                             </div>
                                                             <span style="color:red;">
                                                                <?php $__errorArgs = ['tags_category'];
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

                                                      <div class="form-group">
                                                         <label for="exampleTextarea1" class="blackk">Description</label>
                                                         <textarea class="form-control"id="exampleTextarea1"rows="4" placeholder="" name="description" required><?php echo e($data->description); ?></textarea>
                                                         <span class="gray">Do not exceed 100
                                                            characters when entering the product
                                                            details.</span>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="exampleTextarea1" class="blackk">Ingredients</label>
                                                        <textarea class="form-control"id="exampleTextarea1"rows="4" placeholder="" name="ingredients" required><?php echo e($data->ingredients); ?></textarea>
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
                                                            <input type="text"class="form-control" id="exampleInputName1" placeholder="" value="<?php echo e($data->price); ?>"
                                                               name="price" required/>
                                                         </div>
                                                         <div class="col-md">
                                                            <label for="exampleInputName1" class="blackk">Stock</label>
                                                            <input type="text"class="form-control" id="exampleInputName1" placeholder="" value="<?php echo e($data->stock); ?>"
                                                               name="stock" required/>
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
                                       <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                                   <a href="product/remove/<?php echo e($data->product_id); ?>" type="button"class="btn btn-danger">Remove
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
         <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
            2020</span>
         <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
            Free
            <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
               templates</a>
            from Bootstrapdash.com</span>
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


      <script>

         const ul = document.querySelector("#ul"),
            input = document.querySelector("#input"), // input of tags
            tagNumb = document.querySelector(".details span"),
            td = document.querySelector("td");
         let maxTags = 10,
            tags = []; // array for tags

         countTags();
         createTag();
         

         function countTags() { // count tags to know the limits of arrays
            input.focus();
            tagNumb.innerText = maxTags - tags.length;

         }

         function gettingTags(gTag) {
            gTag = gTag.replace(/"/g, '');
            gTag = gTag.replace('[', '');
            gTag = gTag.replace(']', '');
            document.getElementById('tags_category').value = gTag; // set the value of the input
            console.log(gTag);
         }

         function createTag() {
            ul.querySelectorAll("li").forEach(li => li.remove());
            tags.slice().reverse().forEach(tag => {
               let liTag = `<li>${tag} <i class="uit uit-multiply" onclick="remove(this, '${tag}')"></i></li>`;
               ul.insertAdjacentHTML("afterbegin", liTag);

               var tagString = JSON.stringify(tags); // convert the array into variable
               gettingTags(tagString);

            });
            countTags();
         }

         function remove(element, tag) { // remove tags
            let index = tags.indexOf(tag);
            tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
            element.parentElement.remove();
            countTags();
         }

         function addTag(e) {
            if (e.key == "Enter") { // when you click space the tag will add
               let tag = e.target.value.replace(/\s+/g, ' ');

               if (tag.length > 1 && !tags.includes(tag)) {
                  if (tags.length < 10) {
                     tag.split(',').forEach(tag => {
                        tags.push(tag);
                        createTag();
                     });
                  }
               }
               e.target.value = "";
            }
         }
         input.addEventListener("keyup", addTag);
         const removeBtn = document.querySelector(".details button");
         removeBtn.addEventListener("click", () => {
            tags.length = 0;
            ul.querySelectorAll("li").forEach(li => li.remove());
            countTags();
         });
      </script>

   </footer>
   <!-- partial -->
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/admin/product.blade.php ENDPATH**/ ?>