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
                        <form action="{{ route('update.student') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="">First Name</label>
                            <input type="hidden" name="student_id" value="{{ $studentData->id }}"> <br>
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $studentData->first_name }}"> <br>
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $studentData->last_name }}"> <br>
                            <label for="">Roll</label>
                            <input type="text" name="roll" class="form-control" placeholder="Roll" value="{{ $studentData->roll }}"> <br>
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $studentData->email }}"> <br>
                            <label for="">Phone</label>
                            <input type="text" name="phone" placeholder="Phone" class="form-control" value="{{ $studentData->phone }}"> <br>
                            <label for="">Image</label>
                            <input type="file" name="image" >
                            <img src="{{ asset($studentData->image) }}" alt="" style="height: 50px; width: 60px">
                            <br>
                            <input type="submit" class="btn btn-outline-success form-control">
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
