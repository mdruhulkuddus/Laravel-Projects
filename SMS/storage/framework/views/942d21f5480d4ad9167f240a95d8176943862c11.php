<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Application">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>

        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="<?php echo e(asset('adminAsset')); ?>/assets/images/brand-logo-2.png" width="140" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="<?php echo e(route('dashboard')); ?>" class="list-group-item"><i class="bi bi-cart-plus"></i>Dashboard</a>
                    <a href="<?php echo e(route('add-teacher')); ?>" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Teacher</a>
                    <a href="<?php echo e(route('manage-teacher')); ?>" class="list-group-item"><i class="bi bi-cart-plus"></i>Manage Teasher</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-application">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Application</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="app-emailbox.html" class="list-group-item"><i class="bi bi-envelope"></i>Email</a>
                    <a href="app-chat-box.html" class="list-group-item"><i class="bi bi-chat-left-text"></i>Chat Box</a>
                    <a href="app-file-manager.html" class="list-group-item"><i class="bi bi-archive"></i>File Manager</a>
                    <a href="app-to-do.html" class="list-group-item"><i class="bi bi-check2-square"></i>Todo List</a>
                    <a href="app-invoice.html" class="list-group-item"><i class="bi bi-receipt"></i>Invoice</a>
                </div>
            </div>

        </div>
    </div>
</aside>
<?php /**PATH E:\MRK batch-9\server-9\htdocs\SMS\resources\views/admin/include/left-sidebar.blade.php ENDPATH**/ ?>