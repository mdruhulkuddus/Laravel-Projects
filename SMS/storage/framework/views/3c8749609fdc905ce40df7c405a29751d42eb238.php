<?php $__env->startSection('title'); ?>
    Course
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- section -->

    <section class="inner_banner mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full mt-5">
                        <h3>Course</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2><span>Welcome To</span> Education</h2>
                        </div>
                        <div class="full">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                        <div class="full">
                            <a class="hvr-radial-out button-theme" href="#">About more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <img src="<?php echo e(asset('frontEndAsset')); ?>/images/img2.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Popular </span>Courses</h2>
                        </div>
                    </div>
                </div>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="full blog_img_popular">
                            <img class="img-responsive" src="<?php echo e($course->image); ?>" alt="#" style="width: 100%; height: 300px"/>
                            <a href="<?php echo e(route('course-details', ['slug' => $course->slug ])); ?>">
                                <h4>
                                    <?php if(strlen($course->course_name) < 20): ?>
                                        <?php echo e($course->course_name); ?>

                                    <?php else: ?>
                                        <?php echo e(substr($course->course_name, 0, 19)); ?>

                                    <?php endif; ?>
                                </h4>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
    <!-- end section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/frontEnd/course/course.blade.php ENDPATH**/ ?>