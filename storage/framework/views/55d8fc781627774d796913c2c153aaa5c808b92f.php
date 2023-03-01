
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
                        <div class="page-header">
                            <h3 class="page-title black">Order</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Menu</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Orders
                                    </li>
                                </ol>
                            </nav>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                                <li class="nav-size nav-item"><a class="nav-link active" href="/admin_orders">All</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderpending">Pending</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderpreparing">Preparing</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderdelivering">Delivering</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/orderdelivered">Delivered</a></li>
                                </ul>
                            </div>
                        </div>

        <div class="row mb-2">

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
                          <div class="dash-widget-info">
                                  <h3><?php echo e($TotalOrders); ?></h3>
                              <span>All</span>
                          </div>
                         <span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
                        <div class="dash-widget-info">
                                <h3><?php echo e($PendingOrders); ?></h3>
                            <span>Pending</span>
                        </div>
                         <span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
                    </div>
                        </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-3">
                <div class="card dash-widget">
                    <div class="card-body">
						<div class="d-flex align-items-center justify-content-between px-3">
							<div class="dash-widget-info">
									<h3><?php echo e($PreparingOrders); ?></h3>
								<span>Preparing</span>
							</div>
							<span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
						</div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3 mb-3">
                <div class="card dash-widget">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between px-3">
							<div class="dash-widget-info">
									<h3><?php echo e($DeliveringOrders); ?></h3>
								<span>Delivering</span>
							</div>
                         <span class="dash-widget-icon"><i class="mdi mdi-file-check"></i></span>
                    	</div>
                	</div>
                </div>
            </div>
        </div>

        

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="example" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>Customer’s ID</th>
                                    <th>Product ID</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  
                              
                                <tr>
                                    <td><?php echo e($data->order_id); ?></td>
                                    <td><?php echo e($data->customer_id); ?></td>
                                    <td><?php echo e($data->product_id); ?></td>
                                    <td><?php echo e($data->date); ?></td>
                                    <td><?php echo e($data->total); ?></td>
                                    <td>
                                        <div class="dropdown action-label">
                                                <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class=" pending mdi mdi-radiobox-marked"></i> <?php echo e($data->status); ?>

                                                </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#PendingModal<?php echo e($data->order_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-success"></i> Pending</a>
                                                <a data-toggle="modal" data-target="#PreparingModal<?php echo e($data->order_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Preparing</a>
                                                <a data-toggle="modal" data-target="#DeliveringModal<?php echo e($data->order_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Delivering</a>
                                                <a data-toggle="modal" data-target="#DeliveredModal<?php echo e($data->order_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Delivered</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="action-icon" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical black-icon" aria-hidden="true"></i></a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#ViewModal<?php echo e($data->order_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-pencil m-r-5"></i>View</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <!-- MODAL STARTS HERE -->
                                 <!-- VIEW CONTENT -->
                                 <div class="modal fade" tabindex="-1" id="ViewModal<?php echo e($data->order_id); ?>" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header">
                                                <h5 class="modal-title text-white">View Orders</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL BODY -->
                                            <div class="modal-body text-dark">
                                                <div class="form-group">
                                                    <form method="post" action="">
                                                    <?php echo csrf_field(); ?>
                                                    <label>Order Number:</label>
                                                    <input id="OrderNumber" name="OrderNumber" type="text" class="form-control" placeholder="<?php echo e($data->order_id); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Customer ID</label>
                                                    <input id="CustomerId" name="CustomerId" type="text" class="form-control" placeholder="<?php echo e($data->customer_id); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Product ID</label>
                                                    <input id="ProductId" name="ProductId" type="text" class="form-control" placeholder="<?php echo e($data->product_id); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Quantity</label>
                                                    <input id="quantity" name="quantity" type="text" class="form-control" placeholder="<?php echo e($data->quantity); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Total</label>
                                                    <input id="total" name="total" type="text" class="form-control" placeholder="<?php echo e($data->total); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <input id="status" name="status" type="text" class="form-control" placeholder="<?php echo e($data->status); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Payment type</label>
                                                    <input id="paymentType" name="paymentType" type="text" class="form-control" placeholder="<?php echo e($data->payment_type); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input id="date" name="date" type="text" class="form-control" placeholder="<?php echo e($data->date); ?>" required>
                                                </div>
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- PENDING MODAL -->
                                <div class="modal fade" id="PendingModal<?php echo e($data->order_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header d-flex justify-content-between">
                                                <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL BODY -->
                                            <div class="modal-body">
                                                Do you want to change the status?
                                                <form method="post" action="<?php echo e(route('order.Pending')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="status" value="Pending">
                                                <input type="hidden" name="order_id" id="order_id"  value="<?php echo e($data->order_id); ?>">
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn red-btn">Confirm</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- PREPARING MODAL -->
                                <div class="modal fade" id="PreparingModal<?php echo e($data->order_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header">
                                                <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL BODY -->
                                            <div class="modal-body">
                                                Do you want to change the status to accept?
                                                <form method="post" action="<?php echo e(route('order.Preparing')); ?>">
                                                  <?php echo csrf_field(); ?>
                                                <input type="hidden" name="status" value="Reiv">
                                                <input type="hidden" name="id" value="{}">
                                                <input type="hidden" name="order_id" id="order_id" value="<?php echo e($data->order_id); ?>">
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn red-btn">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- DELIVERING MODAL -->
                                <div class="modal fade" id="DeliveringModal<?php echo e($data->order_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header">
                                                <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL MODAL -->
                                            <div class="modal-body mt-3">
                                                Do you want to change the status to reject?
                                                <form method="post" action="<?php echo e(route('order.Delivering')); ?>">
                                                  <?php echo csrf_field(); ?>
                                                <input type="hidden" name="status" value="Delivering">
                                                <input type="hidden" name="order_id" id="order_id" value="<?php echo e($data->order_id); ?>">
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn red-btn">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- DELIVERED MODAL -->
                                <div class="modal fade" id="DeliveredModal<?php echo e($data->order_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header">
                                                <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL MODAL -->
                                            <div class="modal-body mt-3">
                                                Do you want to change the status to reject?
                                                <form method="post" action="<?php echo e(route('order.Delivered')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="status" value="Delivered">
                                                <input type="hidden" name="order_id" id="order_id" value="<?php echo e($data->order_id); ?>">
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn red-btn">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <!-- TO BE RECEIVED MODAL -->
                                 <div class="modal fade" id="TobeReceiveModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <!-- MODAL HEADER -->
                                            <div class="modal-header">
                                                <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <!-- MODAL MODAL -->
                                            <div class="modal-body mt-3">
                                                Do you want to change the status to "To be Received"?
                                                <form method="post" action="{}">
                                                <input type="hidden" name="status" value="Rejected">
                                                <input type="hidden" name="id" value="{}">
                                            </div>
                                            <!-- MODAL FOOTER -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn red-btn">Confirm</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF ROW -->
        </div>
        <!-- CONTENT-WRAPPER ENDS -->      
        <!-- FOOTER -->          
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2023. All Rights Reserved</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                        <a  href=""
                            target="_blank">from foodea.com 
                        </a>
                    </span>
            </div>
        </footer>
        <!-- END OF FOOTER --> 
        <!-- partial -->
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/admin/admin_orders.blade.php ENDPATH**/ ?>