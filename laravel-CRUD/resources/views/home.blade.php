@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
{{--                    {{ __('You are logged in!') }}--}}

                        <h1>{{ session('message') }}</h1>
                        <form action="{{ route('new.student') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="">First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="First Name"> <br>
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name"> <br>
                            <label for="">Roll</label>
                            <input type="text" name="roll" class="form-control" placeholder="Roll"> <br>
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email"> <br>
                            <label for="">Phone</label>
                            <input type="text" name="phone" placeholder="Phone" class="form-control"> <br>
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" > <br>
                            <input type="submit" class="btn btn-outline-success form-control">
                        </form>

                        <br>
                        <hr>
                        <br>
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Roll</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @php
                        $i = 1;
                        @endphp
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $student->first_name.' '.$student->last_name }}</td>
                            <td>{{ $student->roll }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td><img src="{{ asset($student->image) }}" alt="" style="height: 50px; width: 60px"></td>
                            <td>
                                <a href="{{ route('student.edit', ['id' => $student->id] )}}" class="btn btn-primary float-end" title="Edit">Edit</a>
                                <a class="float-end">
                                    <form action="{{ route('student.delete') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="student_id" value="{{ $student->id }}">
                                        <input type="submit" value="Delete" class="btn btn-danger " title="Delete" onclick="return confirm('Are You Sure Delete This !')">
                                    </form>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
