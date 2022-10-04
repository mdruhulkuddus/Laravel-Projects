@extends('frontEnd.master')

@section('title')
    Profile
@endsection

@section('content')
{{--    <div class="section margin-top_50 silver_bg" >--}}
{{--        <div class="container">--}}
{{--            <div class="row" style="margin-top: 100px; padding-top: 50px;">--}}
{{--                <div class="col-md-6">--}}

{{--                    <div class="full float-right_img">--}}
{{--                        <img src="{{ asset($profileInfo->image) }}" alt="{{ $profileInfo -> student_name }}" style="width: 80%; height: 350px; padding: 40px; float: left"/>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 layout_padding_2">--}}

{{--                    <div class="full">--}}
{{--                        <div class="heading_main text_align_left">--}}
{{--                            <h2><span>Profile </span></h2>--}}
{{--                        </div>--}}
{{--                        <div class="full">--}}
{{--                            <h4>Student Name: {{ $profileInfo -> student_name }}</h4>--}}
{{--                            <h4>Student Email: {{ $profileInfo -> student_email }}</h4>--}}
{{--                            <h4>Student Phone: {{ $profileInfo -> student_phone }}</h4>--}}
{{--                            <h4>Student Address: {{ $profileInfo -> address }}</h4>--}}
{{--                            <h4>Enrolled Courses: {{ count($stuEnrolCourse) }}</h4>--}}

{{--                            @if(count($stuEnrolCourse) >0 )--}}
{{--                                @foreach($stuEnrolCourse as $courseInfo)--}}
{{--                                    <p>{{ $courseInfo -> course_name }}</p>--}}
{{--                                @endforeach--}}
{{--                            @else--}}
{{--                                <p>No course enrolled</p>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                        <div class="full">--}}
{{--                            @if(Session::get('studentId'))--}}
{{--                                <a class="hvr-radial-out button-theme" href="#" data-toggle="modal" data-target="#exampleModal" >Apply</a>--}}
{{--                            @else--}}
{{--                                <a class="hvr-radial-out button-theme" href="#">Login</a>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f6d365;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }
    </style>
    <div class="section margin-top_50 silver_bg" >
            <section class="vh-100 mt-5" style="background-color: #f4f5f7;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-lg mb-4 mb-lg-0">
                            <div class="card mb-3" style="border-radius: .5rem;">
                                <div class="row g-0">
                                    <div class="col-md-4 gradient-custom text-center text-white"
                                         style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                        <img src="{{ asset($profileInfo->image) }}" alt="{{ $profileInfo -> student_name }}" class="img-fluid my-5" style="width: 200px; height: 250px" />
                                        <h5>{{ $profileInfo -> student_name }}</h5>
                                        <p>Web Designer</p>
                                        <div class="text-center" style="color: #0a58ca">
                                            <i class="fa fa-facebook-f fa-lg me-3"></i>
                                            <i class="fa fa-twitter fa-lg me-3"></i>
                                            <i class="fa fa-instagram fa-lg"></i>
                                        </div>
                                        <i class="fa fa-edit mb-5"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body p-4">
                                            <h5><b>Information</b></h5>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Email</h6>
                                                    <p class="text-muted">{{ $profileInfo -> student_email }} </p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Phone</h6>
                                                    <p class="text-muted">{{ $profileInfo -> student_phone }}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Address</h6>
                                                    <p class="text-muted">{{ $profileInfo -> address }}</p>
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Enrolled Courses</h6>
                                                    <p class="text-muted">{{ count($stuEnrolCourse) }}</p>
                                                </div>
                                            </div>
                                            <h5><b>Enrolled Courses</b></h5>
                                            <hr class="mt-0 mb-4">
                                            <div class="row pt-1">
                                                <div class="col-6 mb-3">
                                                    <h6>Recent</h6>
                                                    @if(count($stuEnrolCourse) >0 )
                                                    @foreach($stuEnrolCourse as $courseInfo)
                                                            <p>{{ $courseInfo -> course_name }}</p>
                                                    @endforeach
                                                    @else
                                                        <p>No course enrolled</p>
                                                    @endif
                                                </div>
                                                <div class="col-6 mb-3">
                                                    <h6>Most Viewed</h6>
                                                    <p class="text-muted">Dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
@endsection

