

@extends('frontEnd.master');

@section('title')
    Login | Student
@endsection

@section('content')

    <!-- section -->

    <section class="inner_banner pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Login Form</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding contact_section" style="background:#f6f6f6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="full float-right_img">
                        <img src="{{asset('frontEndAsset')}}/images/login.png" alt="#">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="contact_form">
                        <form action="{{ route('student-login-check') }}" method="post" >
                            @csrf
                            <fieldset>
                                <h6>{{ session('message') }}</h6>
                                <div class="full field">
                                    <input type="text" name="user_name" placeholder="User Email or Phone"  />
                                </div>

                                <div class="full field">
                                    <input type="password" name="user_password" placeholder="Enter Password" />
                                </div>

                                <div class="full field">
                                    <div class="center"><button type="submit">Login</button></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->


@endsection
