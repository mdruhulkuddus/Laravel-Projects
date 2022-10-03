@extends('frontEnd.master')

@section('title')
    Profile
@endsection

@section('content')
    <div class="section margin-top_50 silver_bg" >
        <div class="container">
            <div class="row" style="margin-top: 100px; padding-top: 50px;">
                <div class="col-md-6">

                    <div class="full float-right_img">
                        <img src="{{ asset($profileInfo->image) }}" alt="{{ $profileInfo -> student_name }}" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">

                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2><span>Profile {{ $profileInfo->id }}</span></h2>
                        </div>
                        <div class="full">
                            <h4>Student Name: {{ $profileInfo -> student_name }}</h4>
                            <h4>Student Email: {{ $profileInfo -> student_email }}</h4>
                            <h4>Student Phone: {{ $profileInfo -> student_phone }}</h4>
                            <h4>Student Address: {{ $profileInfo -> address }}</h4>

                        </div>
                        <div class="full">
{{--                            @if(Session::get('studentId'))--}}
{{--                                <a class="hvr-radial-out button-theme" href="#" data-toggle="modal" data-target="#exampleModal" >Apply</a>--}}
{{--                            @else--}}
{{--                                <a class="hvr-radial-out button-theme" href="#">Login</a>--}}
{{--                            @endif--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

