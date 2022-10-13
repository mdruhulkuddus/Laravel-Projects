<?php $__env->startSection('title'); ?>
    Manage Applicant
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>SL no</th>
                        <th>Teacher ID</th>
                        <th>S. Name</th>
                        <th>S. Email</th>
                        <th>S. Phone No</th>
                        <th>Course</th>
                        <th>Code</th>
                        <th>Fee</th>
                        <th>Confirmation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php $__currentLoopData = $applicants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($applicant->teacher_id == Session::get('teacherId')): ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($applicant->teacher_id); ?></td>
                            <td><?php echo e($applicant->student_name); ?></td>
                            <td><?php echo e($applicant->student_email); ?></td>
                            <td><?php echo e($applicant->student_phone); ?></td>
                            <td><?php echo e($applicant->course_name); ?></td>
                            <td><?php echo e($applicant->course_code); ?></td>
                            <td><?php echo e($applicant->course_fee); ?></td>
                            <td><?php echo e($applicant->confirmation); ?></td>











                        </tr>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/admin/teacher/manage-applicant.blade.php ENDPATH**/ ?>