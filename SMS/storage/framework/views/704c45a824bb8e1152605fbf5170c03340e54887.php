
<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('/')); ?>"><img src="<?php echo e(asset('frontEndAsset')); ?>/images/logo.png" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="<?php echo e(route('/')); ?>">Home</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('about')); ?>">About</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('course')); ?>">Courses</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact us</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('student-login')); ?>">Login</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('student-register')); ?>">Register</a></li>
                    <li><a class="nav-link" href="<?php echo e(route('teacher-login')); ?>">Teacher Login</a></li>
                </ul>
            </div>
            <div class="search-box">
                <input type="text" class="search-txt" placeholder="Search">
                <a class="search-btn">
                    <img src="<?php echo e(asset('frontEndAsset')); ?>/images/search_icon.png" alt="#" />
                </a>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH E:\MRK batch-9\server-9\htdocs\SMS\resources\views/frontEnd/include/header.blade.php ENDPATH**/ ?>