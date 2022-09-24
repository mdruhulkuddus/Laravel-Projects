@extends('admin.master')

@section('title')
    Add Course
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Add Course Form</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Course Information</h5>
                            <span>{{ session('message') }}</span>
                        </div>
                        <hr/>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form action="{{ route('new-course') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputName" class="col-sm-3 col-form-label">Course Name</label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="teacher_id" value="{{ Session::get('teacherId') }}">
                                    <input type="text" name="course_name" class="form-control" id="courseName" placeholder="Course Name">
                                    <span id="courseNameError" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputName" class="col-sm-3 col-form-label">Course URL</label>
                                <div class="col-sm-9">
                                    <input type="text" name="slug" class="form-control" id="inputName" placeholder="Course URL">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo" class="col-sm-3 col-form-label">Course Code</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_code" class="form-control" id="inputPhoneNo" placeholder="Course Code">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputAddress" class="col-sm-3 col-form-label">Course Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="course_description" id="inputAddress" rows="3" placeholder="Course Description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress" class="col-sm-3 col-form-label">Course Price</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_fee" class="form-control" id="inputEmailAddress" placeholder="Course Price">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputChooseFile" class="col-sm-3 col-form-label">Course Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control" id="inputChooseFile">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" name="register" id="courseAddForm" class="btn btn-primary px-5">Submit Info</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



