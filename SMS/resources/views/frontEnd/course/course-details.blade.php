@extends('frontEnd.master')

@section('title')
    Course
@endsection

@section('content')
    <div class="section margin-top_50 silver_bg" >
        <div class="container">
            <div class="row" style="margin-top: 100px; padding-top: 50px;">
                <div class="col-md-6">

                    <div class="full float-right_img">
                        <img src="{{ asset($course->image) }}" alt="{{ $course -> course_name }}" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2><span>Course Details</span></h2>
                        </div>
                        <div class="full">
                            <h4>Course Name: {{ $course -> course_name }}</h4>
                            <h4>Teacher Name: {{ $course -> name }}</h4>
                            <h4>Teacher Phone: {{ $course -> phone }}</h4>
                            <h4>Teacher Email: {{ $course -> email }}</h4>
                            <h4>Course Fee: {{ $course -> course_name }}</h4>
                            <h4>Course Details: </h4>
                            <p> {{ $course -> course_description }}</p>
                        </div>
                        <div class="full">
                            @if(Session::get('studentId'))
                                <a class="hvr-radial-out button-theme" href="#" data-toggle="modal" data-target="#exampleModal" >Apply</a>
                            @else
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Apply
                                </button>
                            @endif
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admission') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="student_id" value="{{ Session::get('studentId') }}">
                                            <input type="hidden" name="course_id" value="{{ $course -> id }}">
                                            <input type="checkbox" name="confirmation" value="1"> Are Your Sure Admission this course ?
                                            <input type="submit" value="Confirm">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@if(Session::get('studentId'))
    <li><a class="nav-link" href="{{ route('student-login') }}">{{ Session::get('studentName') }}</a></li>
    <li><a class="nav-link" href="{{ route('student-logout') }}">Logout</a></li>
@else
    <li><a class="nav-link" href="{{ route('student-login') }}">Login</a></li>
    <li><a class="nav-link" href="{{ route('student-register') }}">Register</a></li>
@endif
