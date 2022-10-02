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
                        <th>Name</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->phone }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>
                                <img src="{{ asset($teacher->image ) }}" style="height: 50px; width: 50px" alt="">
                            </td>
                            <td>{{ $teacher->address }}</td>
                            <td>
                                <a href="{{ route('teacher-edit', ['id' => $teacher->id]) }}" class="btn btn-primary float-end">Edit</a>
                                <a href="" class="float-end">
                                <form action="{{ route('teacher-delete') }}" method="post" id="delete">
                                    @csrf
                                    <input type="hidden" name="teacher_id" value="{{ $teacher->id }}">
                                    <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure?')">
                                </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
