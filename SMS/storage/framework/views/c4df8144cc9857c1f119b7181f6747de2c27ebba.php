<?php $__env->startSection('profile-name'); ?>
    <?php echo e(Session::get('teacherName')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/admin/teacher/profile.blade.php ENDPATH**/ ?>