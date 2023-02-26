<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Corona Admin</title>
    <!-- plugins:css -->

    <link
      rel="stylesheet"
      href="../../assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendors/css/vendor.bundle.base.css"
    />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->

    <link rel="stylesheet" href="../../assets/css/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

    <link rel="stylesheet" href="css/filemodal.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <link
      href="css/fileinput.css"
      media="all"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container-scroller">
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="container-fluid page-body-wrapper">
        <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="main-panel">
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
                    <h4 class="card-title">Update Product</h4>
                    <div class="row justify-content-sm-between px-3 mb-3"></div>
                    <div class="row">
                      
                        <form class="forms-sample" action="<?php echo e(route('product.updateProductInfo')); ?>" method="post" enctype="multipart/form-data">
                          <?php echo csrf_field(); ?> 
                          <input type="hidden" value="<?php echo e($update->product_id); ?>" name="product_id">
                          <div class="form-group">
                            <label for="exampleInputName1" class="blackk">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="<?php echo e($update->product_name); ?>" name="product_name"/>
                            <span class="gray">Do not exceed 20 characters when entering the product name.</span>
                          </div>
                          <div class="row">
                            <div class="col form-group">
                              <label for="exampleSelectGender" class="blackk">Category</label>
                              <select class="form-control"  id="exampleSelectGender" style="border: 1px solid" name="category">
                                <option><?php echo e($update->category_id); ?></option>
                                <option >Chicken</option>
                                <option>Pork</option>
                              </select>
                            </div>
                            <div class="col form-group">
                              <label for="exampleSelectGender" class="blackk">Type</label>
                              <select class="form-control" id="exampleSelectGender"style="border: 1px solid" name="type">
                                <option><?php echo e($update->category_id); ?></option>
                                <option>Fried Chicken</option>
                                <option>Chicken Soup</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="exampleTextarea1" class="blackk">Description</label>
                            <textarea class="form-control"id="exampleTextarea1"rows="4" placeholder="<?php echo e($update->description); ?>" name="description"><?php echo e($update->description); ?></textarea>
                            <span class="gray">Do not exceed 100 characters when entering the product details.</span>
                          </div>
                        
                      
                     

                          <div class="form-group">
                            <div class="file-loading">
                              <input id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1" data-theme="fa5" value="<?php echo e($update->product_image); ?>" name="product_image"/>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md">
                              <label for="exampleInputName1" class="blackk">Price</label>
                              <input type="text"class="form-control" id="exampleInputName1" placeholder="<?php echo e($update->price); ?>" value="<?php echo e($update->price); ?>" name="price"/>
                            </div>
                            <div class="col-md">
                              <label for="exampleInputName1" class="blackk">Stock</label>
                              <input type="text"class="form-control" id="exampleInputName1" placeholder="<?php echo e($update->stock); ?>" value="<?php echo e($update->stock); ?>" name="stock"/>
                            </div>
                            <div class="col-md">
                              <label for="exampleSelectGender" class="blackk">Status</label>
                              <select  class="form-control" id="exampleSelectGender" style="border: 1px solid" name="status">
                                <option><?php echo e($update->status); ?></option>
                                <option>Active</option>
                                <option>Disabled</option>
                              </select>
                            </div>
                          </div>
                          <div class="text-lg-left text-center">
                            <button type="submit" class="btn btn-primary btn-lg mr-2 mt-4 py-2 px-5">
                              Update
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
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/plugins/buffer.min.js" type="text/javascript"></script>
    <script src="js/plugins/filetype.min.js" type="text/javascript"></script>
    <script src="js/plugins/piexif.js" type="text/javascript"></script>
    <script src="js/plugins/sortable.js" type="text/javascript"></script>
    <script src="js/fileinput.js" type="text/javascript"></script>
    <script src="js/locales/fr.js" type="text/javascript"></script>
    <script src="js/locales/es.js" type="text/javascript"></script>
    <script src="themes/gly/theme.js" type="text/javascript"></script>
    <script src="themes/fa5/theme.js" type="text/javascript"></script>
    <script src="themes/explorer-fa5/theme.js" type="text/javascript"></script>
    <script src="js/fileupload.js" type="text/javascript"></script>
    <!-- endinject -->
  </body>
</html>
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/admin/update_product.blade.php ENDPATH**/ ?>