<?php $__env->startSection('title'); ?>
    Edit Teacher
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Add Teacher Form</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Teachers Registration</h5>
                            <span><?php echo e(session('message')); ?></span>
                        </div>
                        <hr/>
                        <form action="<?php echo e(route('update-teacher')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="inputName" class="col-sm-3 col-form-label">Enter Name</label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="teacher_id" value="<?php echo e($teacherInfo->id); ?>" >
                                    <input type="text" name="name" value="<?php echo e($teacherInfo->name); ?>" class="form-control" id="inputName" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo" class="col-sm-3 col-form-label">Phone No</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone" value="<?php echo e($teacherInfo->phone); ?>" class="form-control" id="inputPhoneNo" placeholder="Phone No">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress" class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" value="<?php echo e($teacherInfo->email); ?>" class="form-control" id="inputEmailAddress" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputChooseFile" class="col-sm-3 col-form-label"> Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control" id="inputChooseFile">
                                    <img src="<?php echo e(asset($teacherInfo->image)); ?>" alt="" style="width: 60px; height: 50px;">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="address" id="inputAddress" rows="3" placeholder="Address"><?php echo e($teacherInfo->address); ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" name="register" class="btn btn-primary px-5">Update</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/admin/teacher/edit-teacher.blade.php ENDPATH**/ ?>