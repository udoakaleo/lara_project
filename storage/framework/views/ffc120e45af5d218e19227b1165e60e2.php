     
     <?php echo e($heading); ?>;
    
     <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

     <h2><?php echo e($ad['id']); ?></h2>
     <h2><?php echo e($ad['title']); ?></h2>
         
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

    
     <?php /**PATH C:\Users\Admin\Desktop\Dev\lara_project\resources\views/welcome.blade.php ENDPATH**/ ?>