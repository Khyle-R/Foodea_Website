
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
                    <?php if(Session::has('fail')): ?>
                    <p style="display:none" class="failed"></p>
            <div class="alert hide">
                <span class="fas fa-exclamation-circle"></span>
                <span class="msg"><?php echo e(Session::pull('fail')); ?></span>
                <div class="close-btn">
                    <span class="fas fa-times"></span>
                </div>
            </div>
                    <?php endif; ?>
             
              <!---/ALERT BOX --->
    </div>
    <div class="page-header">
        <h3 class="page-title black">Account Settings</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Menu</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Account Settings
                </li>
           
            </ol>
        </nav>
    </div>
    <div class="card mb-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                         
                                            <img alt="" src="<?php echo e(url('image/foodea1.png')); ?>">
                                  
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"></h3>
                                                <h6 class="text-muted"></h6>
                                                <small class="text-muted"></small>
                                               
                                                    
                                                
                                                <div class="staff-id">FOODEA</div>
                                                <div class="small doj text-muted">Admin</div>
                                                <div class="staff-msg"><a class="red-btn" href="chat.html">Change Profile Image</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                     <li>
                                                      
                                                        <div class="title">Founded</div>
                                                        <div class="text">February 21, 2023</div>

                                                  
                                                    </li>
                                                <li>
                                                    <div class="title">Phone:</div>
                                                    <div class="text">09103215429</div>
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    <div class="text">foodea@gmail.com</div>
                                                </li>
                                              
                                                    <li>
                                                        
                                                        <div class="title">Country:</div>
                                                        <div class="text">Philippines</div>
                                                      
                                                       
                                                    </li>
                                                    <li>
                                                      
                                                        <div class="title">City:</div>
                                                        <div class="text">Caloocan City</div>

                                                  
                                                    </li>
                                               
                                    

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card tab-box">
                <div class="row user-tabs">
                    <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                        <ul class="nav nav-tabs nav-tabs-bottom">
                                  <li class="nav-item"><a href="#emp_profile" data-toggle="tab" class="nav-link tab-font active">Company Profile</a></li>
                            <li class="nav-item"><a href="#emp_vehicle" data-toggle="tab" class="nav-link tab-font">Account Settings</a></li>
                      
                          
                        </ul>
                    </div>
                </div>
            </div>

             <div class="tab-content">

                <!-- Company Settings Tab -->
                <div id="emp_profile" class="pro-overview tab-pane fade show active" >
                    <div class="row">
                        <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Company Profile</h3>
                                   
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Company Name</div>
                                            <div class="text">Foodea</div>
                                        </li>
                                        <li>
                                            <div class="title">Email</div>
                                            <div class="text">foodea@gmail.com</div>
                                        </li>
                                        <li>
                                            <div class="title">Contact Number</div>
                                            <div class="text">09103215429</div>
                                        </li>
                                        <li>
                                            <div class="title">Country</div>
                                            <div class="text">Philippines</div>
                                        </li>
                                        <li>
                                            <div class="title">Address</div>
                                            <div class="text"> Congressional Rd Ext, Barangay 171, Caloocan, Metro Manila</div>
                                        </li>
                                        <li>
                                            <div class="title">Barangay</div>
                                            <div class="text">Barangay 171</div>
                                        </li>
                                        <li>
                                            <div class="title">City</div>
                                            <div class="text">Caloocan City</div>
                                        </li>
                                           
                                        <li>
                                            <div class="title">Founded</div>
                                            <div class="text">February 21, 2023</div>
                                        </li>
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">About Company </h3>
                                   <ul class="personal-info">

                                    <h5 class="section-title mb-4">Objectives </h5>  
                                    <li>
                                            <div class="text">To develop a food recommendation application using content-based machine learning tools to recommend foods based on the user’s preferences and past activities and add new suggestions that were never introduced to the user before, but he/she might like to try.
                                            </div>
                                        </li>
                                        
                                    </ul>
                                    <hr>

                                    <ul class="personal-info">
                                         <h5 class="section-title mb-4">Color Scheme </h5>  
                                        <li>
            
                                            <div class="text">Red is associated with emotion and passion. So, when one sees red combined with yellow and orange, they become passionately hungry. Red is also known to stimulate and excite and relates closely to passion and energy. In relation to food: Enhances the appetite, when we see red, we get and energy boost.</div>
                                        </li>
                                        
                                    </ul>
                                    <hr>
                                     <ul class="personal-info">
                                         <h5 class="section-title mb-4">Logo Design</h5>  
                                        <li>
            
                                            <div class="text"> The light bulb is a popular symbol of innovation. while the spoon and fork were symbols of good health since “food” would be the source for a healthy body. </div>
                                        </li>
                                        
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Profile Info Tab -->


                 

                <!-- Account Settings Tab -->
                 <div  id="emp_vehicle" class="tab-pane fade" >
                    <div class="row">
                        <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body pr-5">
                                    <h3 class="card-title">Change Password</h3>

                                    <form method="post" action="<?php echo e(route('ChangePassAdmin')); ?>">
                                        <?php echo csrf_field(); ?>
                                    <h5 class="section-title">Old Password</h5>

                                    <div class="form-group">   
                                   <input type="text" value="" name="old_password" class="form-control input-border" id="old_pass" placeholder="Enter New Password">
                                     <span
                                    class="red-link">
                                    <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                  </div>

                                   <h5 class="section-title">New Password</h5>

                                    <div class="form-group">
                                   <input type="text" value="" name="new_password" class="form-control input-border" id="new_pass" placeholder="Enter New Password">
                                    <span
                                    class="red-link">
                                    <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </div>

                                   <h5 class="section-title">Confirm Password</h5>
                                   
                                   <div class="form-group">
                                  <input type="text" name="confirm_password" class="form-control input-border" id="confirm_pass" placeholder="Confirm Password">
                                    <span
                                    class="red-link">
                                    <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>  
                                </div>

                                     <div class="staff-msg">
                                        <button type="submit" id="id" class="red-btn">Update Password</button></div>
                                     </form>
                                  

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex mb-4">
                            <div class="card profile-box flex-fill">
                                <div class="card-body">
                                    <h3 class="card-title">Change Email</h3>

                                      <h5 class="section-title">Email</h5>
                                    <form method="post" action="<?php echo e(route('ChangeEmailAdmin')); ?>">
                                        <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                   <input type="text" value="" name="new_email" class="form-control input-border" id="new_pass" placeholder="Enter New Email">
                                    <span
                                    class="red-link">
                                    <?php $__errorArgs = ['new_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </div>

                                    <h5 class="section-title">Confirm Email</h5>

                                    <div class="form-group">
                                   <input type="text" value="" name="confirm_email" class="form-control input-border" id="new_pass" placeholder="Confirm Email">
                                    <span
                                    class="red-link">
                                    <?php $__errorArgs = ['confirm_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                                </div>
                                <div class="staff-msg">
                                        <button type="submit" id="id" class="red-btn">Update Email</button></div>
                                   </form>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Vehicle Info Tab -->
               
             </div>
</div>
           
                
<!-- content-wrapper ends -->
<!-- partial:../../partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022. All Rights Reserved</span>
       
    </div>
</footer>
<!-- partial -->
</div>


<?php $__env->stopSection(); ?>


                                           
                                             
                             
<?php echo $__env->make('superadmin.superadmin_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/superadmin/superadmin_account.blade.php ENDPATH**/ ?>