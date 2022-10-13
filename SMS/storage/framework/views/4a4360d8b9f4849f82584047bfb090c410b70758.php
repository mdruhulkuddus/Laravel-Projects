<?php $__env->startSection('title'); ?>
    Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>












































    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f6d365;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }
    </style>
    <div class="section margin-top_50 silver_bg" >
            <section class="vh-100 mt-5" style="background-color: #f4f5f7;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-lg mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .5rem;">
                                <div class="row g-0">
                                    <div class="col-md-4 gradient-custom text-center text-white"
                                         style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                        <img src="<?php echo e(asset($profileInfo->image)); ?>" alt="<?php echo e($profileInfo -> student_name); ?>" class="img-fluid my-5" style="width: 200px; height: 250px" />
                                        <h5><?php echo e($profileInfo -> student_name); ?></h5>
                                        <p>Web Designer</p>
                                        <div class="text-center" style="color: #0a58ca">
                                            <i class="fa fa-facebook-f fa-lg me-3"></i>
                                            <i class="fa fa-twitter fa-lg me-3"></i>
                                            <i class="fa fa-instagram fa-lg"></i>
                                        </div>
                                        <i class="fa fa-edit mb-5"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-4">
                                            <h5><b>Information</b></h5>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Email</h6>
                                                    <p class="text-muted"><?php echo e($profileInfo -> student_email); ?> </p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Phone</h6>
                                                    <p class="text-muted"><?php echo e($profileInfo -> student_phone); ?></p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Address</h6>
                                                    <p class="text-muted"><?php echo e($profileInfo -> address); ?></p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Enrolled Courses</h6>
                                                    <p class="text-muted"><?php echo e(count($stuEnrolCourse)); ?></p>
                                                </div>
                                            </div>
                                            <h5><b>Enrolled Courses</b></h5>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Recent</h6>
                                                    <?php if(count($stuEnrolCourse) >0 ): ?>
                                                    <?php $__currentLoopData = $stuEnrolCourse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courseInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <p><?php echo e($courseInfo -> course_name); ?></p>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php else: ?>
                                                        <p>No course enrolled</p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Most Viewed</h6>
                                                    <p class="text-muted">Dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/frontEnd/student/student-profile.blade.php ENDPATH**/ ?>