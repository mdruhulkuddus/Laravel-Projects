@extends('frontEnd.master')

@section('title')
    Course Details
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
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2><span>Course Details</span></h2>
                        </div>
                        <div class="full">
                            <h4>Course Name: {{ $course -> course_name }}</h4>
                            <h4>Teacher Name: {{ $course -> name }}</h4>
                            <h4>Teacher Phone: {{ $course -> phone }}</h4>
                            <h4>Teacher Email: {{ $course -> email }}</h4>
                            <h4>Course Fee: {{ $course -> course_fee }}</h4>
                            <h4>Course Details: </h4>
                            <p> <pre>{{ $course -> course_description }}</pre> </p>
                        </div>
                        <div class="full">
                            @if(Session::get('studentId'))
                                <a class="hvr-radial-out button-theme" href="#" data-toggle="modal" data-target="#exampleModal" >Apply</a>
                            @else
                                <a class="hvr-radial-out button-theme" href="#">Login</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
@endsection

