@extends('admin.master')
@section('profile-name')
    {{ Session::get('teacherName') }}
@endsection
