
<?php $__env->startSection('content'); ?>
         <div class="content-wrapper">
                 <div class="row">
                          
                        </div>
                        <div class="page-header">
                            <h3 class="page-title black"> Activity Log</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Menu</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                       Activity Log
                                    </li>
                                </ol>
                            </nav>
                        </div>



                        <div class="row">
                            <div class="col-12 grid-margin">

                                <div class="card">
                                    <div class="card-body">
                        <div class="table-responsive">
                    <table id="example" class="table" style="width:100%">
                        <thead>
                           
                                
                           
                            <tr>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date Time</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php $__currentLoopData = $log; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($actlog->email); ?></td>
                                <td>Admin</td>
                                <td><?php echo e($actlog->description); ?></td>
                                <td><?php echo e($actlog->date); ?></td>
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
                                >Copyright © 2022. All Rights Reserved</span
                            >
                          
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
              
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.superadmin_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/superadmin/superadmin_activitylog.blade.php ENDPATH**/ ?>