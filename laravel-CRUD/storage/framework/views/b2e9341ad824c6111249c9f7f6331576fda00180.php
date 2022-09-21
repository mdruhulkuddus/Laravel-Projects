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
                        <form action="<?php echo e(route('new.student')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <label for="">First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="First Name"> <br>
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name"> <br>
                            <label for="">Roll</label>
                            <input type="text" name="roll" class="form-control" placeholder="Roll"> <br>
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email"> <br>
                            <label for="">Phone</label>
                            <input type="text" name="phone" placeholder="Phone" class="form-control"> <br>
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" > <br>
                            <input type="submit" class="btn btn-outline-success form-control">
                        </form>

                        <br>
                        <hr>
                        <br>
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Roll</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $i = 1;
                        ?>
                        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($student->first_name.' '.$student->last_name); ?></td>
                            <td><?php echo e($student->roll); ?></td>
                            <td><?php echo e($student->email); ?></td>
                            <td><?php echo e($student->phone); ?></td>
                            <td><img src="<?php echo e(asset($student->image)); ?>" alt="" style="height: 50px; width: 60px"></td>
                            <td>
                                <a href="<?php echo e(route('student.edit', ['id' => $student->id] )); ?>" class="btn btn-primary float-end" title="Edit">Edit</a>
                                <a class="float-end">
                                    <form action="<?php echo e(route('student.delete')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="student_id" value="<?php echo e($student->id); ?>">
                                        <input type="submit" value="Delete" class="btn btn-danger " title="Delete" onclick="return confirm('Are You Sure Delete This !')">
                                    </form>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\laravel-CRUD\resources\views/home.blade.php ENDPATH**/ ?>