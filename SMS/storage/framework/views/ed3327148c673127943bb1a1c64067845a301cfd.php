<?php $__env->startSection('title'); ?>
    Edit Course
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Edit Course Form</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Course Information</h5>

                        </div>
                        <hr/>

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>


                        <form action="<?php echo e(route('update-course')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="inputName" class="col-sm-3 col-form-label">Course Name</label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="teacher_id" value="<?php echo e(Session::get('teacherId')); ?>">
                                    <input type="text" name="course_name" class="form-control" id="courseName" value="<?php echo e($courseInfo->course_name); ?>">
                                    <span id="courseNameError" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputName" class="col-sm-3 col-form-label">Course URL</label>
                                <div class="col-sm-9">
                                    <input type="text" name="slug" class="form-control" id="inputName" value="<?php echo e($courseInfo->slug); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo" class="col-sm-3 col-form-label">Course Code</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_code" class="form-control" id="inputPhoneNo" value="<?php echo e($courseInfo->course_code); ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputAddress" class="col-sm-3 col-form-label">Course Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="course_description" id="inputAddress" rows="3"><?php echo e($courseInfo->course_description); ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress" class="col-sm-3 col-form-label">Course Price</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_fee" class="form-control" id="inputEmailAddress" value="<?php echo e($courseInfo->course_fee); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputChooseFile" class="col-sm-3 col-form-label">Course Image</label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="course_id" value="<?php echo e($courseInfo->id); ?>">
                                    <input type="file" name="image" class="form-control" id="inputChooseFile">
                                    <img src="<?php echo e(asset($courseInfo->image)); ?>" alt="" style="height: 60px; width: 60px;">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" name="register" id="courseAddForm" class="btn btn-primary px-5">Submit Info</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/admin/course/edit-course.blade.php ENDPATH**/ ?>