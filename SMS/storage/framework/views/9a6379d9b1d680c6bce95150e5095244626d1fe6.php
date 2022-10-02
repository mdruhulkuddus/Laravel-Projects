<?php $__env->startSection('title'); ?>
    Manage Teacher Form
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>SL no</th>
                        <th>C Name</th>
                        <th>Teacher Name</th>
                        <th>C Code</th>
                        <th>Slug</th>
                        <th>C Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e(substr($course->course_name, 0, 15)); ?></td>
                            <td><?php echo e($course->name); ?></td>
                            <td><?php echo e($course->course_code); ?></td>
                            <td><?php echo e($course->slug); ?></td>
                            <td><?php echo e(substr($course->course_description, 0, 10)); ?></td>
                            <td>
                                <img class="product-img-2" src="<?php echo e(asset($course->image )); ?>" style="height: 50px; width: 50px" alt="">
                            </td>

                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views">
                                        <button type="submit" style="border: none; color: #3461FF"><i class="bi bi-eye-fill"></i></button>
                                    </a>
                                    <a href="<?php echo e(route('edit-course', ['id' => $course->id])); ?>" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                        <button type="submit" style="border: none; color: #FFCB32">
                                        <i class="bi bi-pencil-fill"></i>
                                        </button>
                                    </a>

                                    <a href="" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <form action="<?php echo e(route('delete-course')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="course_id" value="<?php echo e($course->id); ?>">
                                            <button type="submit" style="border: none; color: #E72E2E">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
                                    </a>
                                </div>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/admin/course/manage-course.blade.php ENDPATH**/ ?>