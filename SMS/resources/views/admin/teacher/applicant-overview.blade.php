@extends('admin.master')
@section('title')
    Manage Applicant
@endsection
@section('profile-name')
    {{ Session::get('teacherName') }}
    {{ Session::get('teacherId') }}
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col-6">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Applicant</p>
                                <h4 class="my-1">{{ $totalStudent }}</h4>
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
                                <h4 class="my-1">{{ $msofficeStudent }}</h4>
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
                                <p class="mb-0 text-secondary">ASP.NET Core</p>
                                <h4 class="my-1">{{ $aspStudent }}</h4>
                                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> Student enrolled</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-basket2-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
