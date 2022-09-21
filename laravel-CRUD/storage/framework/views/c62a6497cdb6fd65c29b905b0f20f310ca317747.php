<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                        

                        <h1><?php echo e(session('message')); ?></h1>
                        <form action="<?php echo e(route('update.student')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <label for="">First Name</label>
                            <input type="hidden" name="student_id" value="<?php echo e($studentData->id); ?>"> <br>
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php echo e($studentData->first_name); ?>"> <br>
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo e($studentData->last_name); ?>"> <br>
                            <label for="">Roll</label>
                            <input type="text" name="roll" class="form-control" placeholder="Roll" value="<?php echo e($studentData->roll); ?>"> <br>
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo e($studentData->email); ?>"> <br>
                            <label for="">Phone</label>
                            <input type="text" name="phone" placeholder="Phone" class="form-control" value="<?php echo e($studentData->phone); ?>"> <br>
                            <label for="">Image</label>
                            <input type="file" name="image" >
                            <img src="<?php echo e(asset($studentData->image)); ?>" alt="" style="height: 50px; width: 60px">
                            <br>
                            <input type="submit" class="btn btn-outline-success form-control">
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\laravel-CRUD\resources\views/edit.blade.php ENDPATH**/ ?>