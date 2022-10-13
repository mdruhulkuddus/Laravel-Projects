<?php $__env->startSection('title'); ?>
    Course Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="section margin-top_50 silver_bg" >
        <div class="container">
            <div class="row" style="margin-top: 100px; padding-top: 50px;">
                <div class="col-md-6">

                    <div class="full float-right_img">
                        <img src="<?php echo e(asset($course->image)); ?>" alt="<?php echo e($course -> course_name); ?>" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2><span>Course Details</span></h2>
                        </div>
                        <div class="full">
                            <h4>Course Name: <?php echo e($course -> course_name); ?></h4>
                            <h4>Teacher Name: <?php echo e($course -> name); ?></h4>
                            <h4>Teacher Phone: <?php echo e($course -> phone); ?></h4>
                            <h4>Teacher Email: <?php echo e($course -> email); ?></h4>
                            <h4>Course Fee: <?php echo e($course -> course_fee); ?></h4>
                            <h4>Course Details: </h4>
                            <p> <pre><?php echo e($course -> course_description); ?></pre> </p>
                        </div>
                        <div class="full">
                            <?php if(Session::get('studentId')): ?>
                                <a class="hvr-radial-out button-theme" href="#" data-toggle="modal" data-target="#exampleModal" >Apply</a>
                            <?php else: ?>
                                <a class="hvr-radial-out button-theme" href="#">Login</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admission')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="student_id" value="<?php echo e(Session::get('studentId')); ?>">
                        <input type="hidden" name="course_id" value="<?php echo e($course -> id); ?>">
                        <input type="checkbox" name="confirmation" value="1"> Are Your Sure Admission this course ?
                        <input type="submit" value="Confirm">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/frontEnd/course/course-details.blade.php ENDPATH**/ ?>