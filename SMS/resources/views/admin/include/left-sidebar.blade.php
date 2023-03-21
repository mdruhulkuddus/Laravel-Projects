<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            @if(Session::get('teacherId'))
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Course">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#course" type="button"><i class="bi bi-grid-fill"></i></button>
                </li>
            @else
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            @endif

        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset('adminAsset')}}/assets/images/brand-logo-2.png" width="140" alt=""/>
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
                    <a href="{{ route('dashboard') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Dashboard</a>
                    <a href="{{ route('add-teacher') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Add Teacher</a>
                    <a href="{{ route('manage-teacher') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Manage Teasher</a>
                </div>
            </div>
            <div class="tab-pane fade" id="course">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Course</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('add-course') }}" class="list-group-item"><i class="bi bi-check2-square"></i>Add Course</a>
                    @if(Session::get('teacherId'))
                    <a href="{{ route('manage-course', ['teacherID' => Session::get('teacherId')]) }}" class="list-group-item"><i class="bi bi-receipt"></i>Manage Course</a>
                    @endif
                    <a href="{{ route('manage-applicant') }}" class="list-group-item"><i class="bi bi-receipt"></i>Manage Applicant</a>
                    <a href="{{ route('applicant-overview') }}" class="list-group-item"><i class="bi bi-receipt"></i>Applicant Overview</a>

                </div>
            </div>

        </div>
    </div>
</aside>
