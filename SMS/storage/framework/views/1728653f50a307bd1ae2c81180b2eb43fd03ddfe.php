<!doctype html>
<html lang="en" class="minimal-theme">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo e(asset('adminAsset')); ?>/<?php echo e(asset('adminAsset')); ?>/assets/images/favicon-32x32.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('adminAsset')); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('adminAsset')); ?>/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="<?php echo e(asset('adminAsset')); ?>/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo e(asset('adminAsset')); ?>/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="<?php echo e(asset('adminAsset')); ?>/assets/css/pace.min.css" rel="stylesheet" />

    <title>Teacher | Login</title>
</head>

<body>

<!--start wrapper-->
<div class="wrapper">

    <!--start content-->
    <main class="authentication-content">
        <div class="container-fluid">
            <div class="authentication-card">
                <div class="card shadow rounded-0 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                            <img src="<?php echo e(asset('adminAsset')); ?>/assets/images/error/login-img.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="card-body p-4 p-sm-5">

                                <h5 class="card-title">Sign In as a Teacher</h5> <hr>
                                <h6 class="card-title"><?php echo e(session('message')); ?></h6>
                                <form class="form-body" method="post" action="<?php echo e(route('teacher-login')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">User Name</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                                <input name="user_name" type="text" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email or Phone">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                                <input type="password" name="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Enter Password">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-0">Don't have an account yet? <a href="authentication-signup.html">Sign up here</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--end page main-->

</div>
<!--end wrapper-->


<!--plugins-->
<script src="<?php echo e(asset('adminAsset')); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo e(asset('adminAsset')); ?>/assets/js/pace.min.js"></script>


</body>
</html>
<?php /**PATH D:\SWE Training\xampp-BITM\htdocs\Laravel\SMS\resources\views/admin/teacher/login.blade.php ENDPATH**/ ?>