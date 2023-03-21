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
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($teacher->name); ?></td>
                            <td><?php echo e($teacher->phone); ?></td>
                            <td><?php echo e($teacher->email); ?></td>
                            <td>
                                <img src="<?php echo e(asset($teacher->image )); ?>" style="height: 50px; width: 50px" alt="">
                            </td>
                            <td><?php echo e($teacher->address); ?></td>
                            <td>
                                <a href="<?php echo e(route('teacher-edit', ['id' => $teacher->id])); ?>" class="btn btn-primary float-end">Edit</a>
                                <a href="" class="float-end">
                                <form action="<?php echo e(route('teacher-delete')); ?>" method="post" id="delete">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="teacher_id" value="<?php echo e($teacher->id); ?>">
                                    <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure?')">
                                </form>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/admin/teacher/manage-teacher.blade.php ENDPATH**/ ?>