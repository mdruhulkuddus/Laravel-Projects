<?php $__env->startSection('title'); ?>
    Add Teacher Form
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
                        <form action="<?php echo e(route('new-teacher')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-3 col-form-label">Enter Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPhoneNo" class="col-sm-3 col-form-label">Phone No</label>
                            <div class="col-sm-9">
                                <input type="text" name="phone" class="form-control" id="inputPhoneNo" placeholder="Phone No">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmailAddress" class="col-sm-3 col-form-label">Email Address</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputChooseFile" class="col-sm-3 col-form-label"> Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control" id="inputChooseFile">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputAddress" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="address" id="inputAddress" rows="3" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" name="register" class="btn btn-primary px-5">Register</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/admin/teacher/add-teacher.blade.php ENDPATH**/ ?>