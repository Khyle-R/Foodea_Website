
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <div class="row">
  <!---ALERT BOX --->
                    <?php if(Session::has('success')): ?>
                    <p style="display:none" class="popup"></p>
            <div class="success hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg"><?php echo e(Session::pull('success')); ?></span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
                    <?php endif; ?>
             
              <!---/ALERT BOX --->
    </div>
    <div class="page-header">
        <h3 class="page-title black">Rider Application</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Menu</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Rider Application
                </li>
            </ol>
        </nav>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-solid nav-justified">
                <li class="nav-size nav-item"><a class="nav-link" href="/superadmin_partnerapplication">All</a></li>
                 <li class="nav-size nav-item"><a class="nav-link active" href="/superadmin_merchantpending">Pending</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/superadmin_merchantreview">Reviewing</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/superadmin_merchantaccept">Accepted</a></li>
                                <li class="nav-size nav-item"><a class="nav-link" href="/superadmin_merchantarchive">Archived</a></li>

            </ul>
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
                                <th>Name</th>
                                <th>Business Type</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Date Application</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $Data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                 <a href="">
                                <td>
                                    <img class="circle mr-2" src="<?php echo e(url('uploads/'. 'merchant_documents'. '/'. $partner->merchant_id. '/'. $partner->logo)); ?>" alt="">
                                   <?php echo e($partner->business_name); ?>

                                </td>
                                <td><?php echo e($partner->business_type); ?></td>
                                <td><?php echo e($partner->store_email); ?></td>
                                <td>
                                    <div class="dropdown action-label">
                                        <?php if($partner->status == 'pending' || $partner->status == 'Pending'): ?>
                                             <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class=" pending mdi mdi-radiobox-marked"></i> <?php echo e($partner->status); ?>

                                            </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#ReviewModal<?php echo e($partner->merchant_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-success"></i> Reviewing</a>
                                                <a data-toggle="modal" data-target="#AcceptedModal<?php echo e($partner->merchant_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Accepted</a>
                                                <a data-toggle="modal" data-target="#RejectModal<?php echo e($partner->merchant_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Rejected</a>
                                            </div>
                                        <?php endif; ?>
                                         <?php if($partner->status == 'reviewing' || $partner->status == 'Reviewing'): ?>
                                             <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class=" review mdi mdi-radiobox-marked"></i> <?php echo e($partner->status); ?>

                                            </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#AcceptedModal<?php echo e($partner->merchant_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Accepted</a>
                                                <a data-toggle="modal" data-target="#RejectModal<?php echo e($partner->merchant_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Rejected</a>
                                            </div>
                                        <?php endif; ?>
                                         <?php if($partner->status == 'accepted' || $partner->status == 'Accepted'): ?>
                                             <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class=" accepted mdi mdi-radiobox-marked"></i> <?php echo e($partner->status); ?>

                                            </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#RejectModal<?php echo e($partner->merchant_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-warning"></i> Rejected</a>
                                            </div>
                                        <?php endif; ?>
                                           <?php if($partner->status == 'rejected' || $partner->status == 'Rejected'): ?>
                                             <a class=" btn-white-circle btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class=" rejected mdi mdi-radiobox-marked"></i> <?php echo e($partner->status); ?>

                                            </a>
                                            <div class="bg-white dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#AcceptedModal<?php echo e($partner->merchant_id); ?>" class="action-btn dropdown-item black" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Accepted</a>
                                            </div>
                                        <?php endif; ?> 
                                            
                                            
                                        </div>
                                </td>
                                <td><?php echo e($partner->date); ?></td>
                                <td>
                                <div class="dropdown">
                                    <a href="#" class="action-icon" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical black-icon" aria-hidden="true"></i></a>
                                    <div class="bg-white dropdown-menu dropdown-menu-right">
                                        <a class="action-btn dropdown-item black" href="/superadmin_merchantproile/<?php echo e($partner->merchant_id); ?>"><i class="fa fa-pencil m-r-5"></i> View</a>
                                        <a class="action-btn dropdown-item black" href="/application_merchant_reject/<?php echo e($partner->merchant_id); ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                                    </td>
                                    </a>
                            </tr>
                  
                             <!-- Review Modal -->
                    <div class="modal fade" id="ReviewModal<?php echo e($partner->merchant_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Do you want to change the status?
                            <form method="post" action="<?php echo e(route('UpdateMerchant')); ?>">
                                <?php echo csrf_field(); ?>
                            <input type="hidden" name="status" value="Reviewing">
                            <input type="hidden" name="id" value="<?php echo e($partner->merchant_application_id); ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn red-btn">Confirm</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                     <!-- Accepted Modal -->
                    <div class="modal fade" id="AcceptedModal<?php echo e($partner->merchant_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Do you want to change the status?
                            <form method="post" action="<?php echo e(route('UpdateMerchant')); ?>">
                                <?php echo csrf_field(); ?>
                            <input type="hidden" name="status" value="Accepted">
                            <input type="hidden" name="id" value="<?php echo e($partner->merchant_application_id); ?>">
                            <input type="hidden" name="merchant_id" value="<?php echo e($partner->merchant_id); ?>">
                        </div>
                        <div class="modal-footer">
                             <button type="button" class="btn white-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn red-btn">Confirm</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Rejected Modal -->
                    <div class="modal fade" id="RejectModal<?php echo e($partner->merchant_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title white-font " id="exampleModalLongTitle">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Do you want to change the status?
                            <form method="post" action="<?php echo e(route('UpdateMerchant')); ?>">
                                <?php echo csrf_field(); ?>
                            <input type="hidden" name="status" value="Rejected">
                             <input type="hidden" name="id" value="<?php echo e($partner->merchant_application_id); ?>">
                        </div>
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
                    </div>

                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
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
<?php echo $__env->make('superadmin.superadmin_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/superadmin/superadmin_merchantpending.blade.php ENDPATH**/ ?>