<?php $__env->startSection('title'); ?>
    Add Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header" style=""><h3 class="text-center font-weight-light my-4">Add Product Form</h3></div>
                   <span class="text-center text-primary"><?php echo e(session('message')); ?></span>
                    <div class="card-body">
                        <form action="<?php echo e(route('new-product')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputFirstName" type="text" name="product_name" placeholder="Enter Product name" />
                                        <label for="inputFirstName">Product name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputFirstName" type="text" name="category_name" placeholder="Enter Category name" />
                                        <label for="inputFirstName">Category name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputFirstName" type="text" name="brand_name" placeholder="Enter Brand name" />
                                        <label for="inputFirstName">Brand name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 ">
                                        <input class="form-control" id="inputFirstName" type="number" name="price" placeholder="Price" />
                                        <label for="inputFirstName">Price</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                        <label for="inputFirstName">Description</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 ">
                                        <input class="form-control form-control-lg" id="formFileLg" type="file" name="product_image">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" name="submit" value="Submit Product Info" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="<?php echo e(route('manage-product')); ?>">Manage Product</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\MRK batch-9\server-9\htdocs\Ecommerce\resources\views/admin/product/add-product.blade.php ENDPATH**/ ?>