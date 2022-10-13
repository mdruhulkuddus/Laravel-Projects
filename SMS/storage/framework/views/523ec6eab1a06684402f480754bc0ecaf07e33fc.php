<?php $__env->startSection('title'); ?>
    Manage Applicant
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Total Applicant</p>
                                    <h4 class="my-1"><?php echo e($totalStudent); ?></h4>
                                    <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> Student enrolled</p>
                                </div>
                                <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-basket2-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">MS Office Program</p>
                                    <h4 class="my-1"><?php echo e($msofficeStudent); ?></h4>
                                    <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> Student enrolled</p>
                                </div>
                                <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="fa-brands fa-microsoft"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">ASP.NET Core</p>
                                <h4 class="my-1"><?php echo e($aspStudent); ?></h4>
                                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> Student enrolled</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="fa fa-neuter"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-6">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Cloud Journey with AWS</p>
                                    <h4 class="my-1"><?php echo e($cloudStudent); ?></h4>
                                    <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> Student enrolled</p>
                                </div>
                                <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="fa fa-cloud"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/admin/teacher/applicant-overview.blade.php ENDPATH**/ ?>