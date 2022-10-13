

;

<?php $__env->startSection('title'); ?>
    Login | Student
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- section -->

    <section class="inner_banner pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Login Form</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding contact_section" style="background:#f6f6f6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="full float-right_img">
                        <img src="<?php echo e(asset('frontEndAsset')); ?>/images/login.png" alt="#">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_form">
                        <form action="<?php echo e(route('student-login-check')); ?>" method="post" >
                            <?php echo csrf_field(); ?>
                            <fieldset>
                                <h6><?php echo e(session('message')); ?></h6>
                                <div class="full field">
                                    <input type="text" name="user_name" placeholder="User Email or Phone"  />
                                </div>

                                <div class="full field">
                                    <input type="password" name="user_password" placeholder="Enter Password" />
                                </div>

                                <div class="full field">
                                    <div class="center"><button type="submit">Login</button></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/frontEnd/student/login.blade.php ENDPATH**/ ?>