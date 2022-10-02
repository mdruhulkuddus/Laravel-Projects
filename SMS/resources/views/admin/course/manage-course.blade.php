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
                                    <a href="" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views">
                                        <button type="submit" style="border: none; color: #3461FF"><i class="bi bi-eye-fill"></i></button>
                                    </a>
                                    <a href="{{ route('edit-course', ['id' => $course->id]) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                        <button type="submit" style="border: none; color: #FFCB32">
                                        <i class="bi bi-pencil-fill"></i>
                                        </button>
                                    </a>

                                    <a href="" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                        <form action="{{ route('delete-course') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                                            <button type="submit" style="border: none; color: #E72E2E">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
                                    </a>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
