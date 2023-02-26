<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" typ="stylesheet" href="sample.css" />
    <title>Document</title>
  </head>
  <body>
    <ul class="accordion">
      <li>
        <input type="radio" name="accordion" id="first" checked />
        <label for="first">sda</label>
        <div class="content">
          <p>sdasdasd</p>
        </div>
      </li>
      <li>
        <input type="radio" name="accordion" id="second" />
        <label for="second">sda</label>
        <div class="content">
          <p>sdasdasd</p>
        </div>
      </li>
      <li>
        <input type="radio" name="accordion" id="third" />
        <label for="third">sda</label>
        <div class="content">
          <p>sdasdasd</p>
        </div>
      </li>
    </ul>
    <?php $__currentLoopData = $Data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $riderdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <p><?php echo e($riderdata->admin_id); ?></p>
       <p><?php echo e($riderdata->email); ?></p>
        <p><?php echo e($riderdata->password); ?></p>
         <p><?php echo e($riderdata->date); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </body>
</html>
<?php /**PATH E:\xampp\htdocs\Foodea_Website\resources\views/sample.blade.php ENDPATH**/ ?>