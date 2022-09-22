@extends('admin.master')
@section('title')
    Manage Teacher Form
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>SL no</th>
                        <th>C Name</th>
                        <th>Teacher Name</th>
                        <th>C Code</th>
                        <th>Slug</th>
                        <th>C Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ substr($course->course_name, 0, 15)  }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->slug }}</td>
                            <td>{{ substr($course->course_description, 0, 10)  }}</td>
                            <td>
                                <img class="product-img-2" src="{{ asset($course->image ) }}" style="height: 50px; width: 50px" alt="">
                            </td>

                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                                {{--                                <a href="" ><i class='fas fa-edit' style='font-size:48px;color:red'></i></a>--}}
{{--                                <a href="{{ route('teacher-edit', ['id' => $teacher->id]) }}" class="btn btn-primary float-end">Edit</a>--}}
                                {{--                                <a href="" class="btn btn-danger" onclick="event.preventDefault(); return confirm('Are you sure to delete this!'); document.getElementById('delete').submit(); ">Delete</a>--}}
{{--                                <a href="" class="float-end">--}}
{{--                                    <form action="{{ route('teacher-delete') }}" method="post" id="delete">--}}
{{--                                        @csrf--}}
{{--                                        <input type="hidden" name="teacher_id" value="{{ $teacher->id }}">--}}
{{--                                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure?')">--}}
{{--                                    </form>--}}
{{--                                </a>--}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
