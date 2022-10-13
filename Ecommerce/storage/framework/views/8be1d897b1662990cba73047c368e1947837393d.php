<?php $__env->startSection('title'); ?>
    Manage Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Product</li>
        </ol>

        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <span class="text-center text-danger"><?php echo e(session('message')); ?></span>
                </div>
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>P Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product -> product_name); ?></td>
                            <td><?php echo e($product -> category_name); ?></td>
                            <td><?php echo e($product -> brand_name); ?></td>
                            <td><?php echo e($product -> price); ?></td>
                            <td><?php echo e($product -> description); ?></td>
                            <td><img src="<?php echo e(asset($product -> product_image)); ?>" alt="image" height="60" width="60"></td>
                            <td>
                                <a href="">
                                    <button class=" btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                                </a>
                                <a href="<?php echo e(route('product-delete',['id' => $product -> id])); ?>">
                                    <button class=" btn btn-danger"><i class="fa fa-trash"></i></button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MRK batch-9\server-9\htdocs\Ecommerce\resources\views/admin/product/manage-product.blade.php ENDPATH**/ ?>