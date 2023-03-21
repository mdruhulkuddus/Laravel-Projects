@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <h3 class="text-center">{{session('message')}}</h3>
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Category</h3></div>
                    <div class="card-body">
                        <form action="{{route('update-category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control">
                            </div>
                            <input type="hidden" name="category_id" value="{{$category->id}}">
                            <input type="submit" class="btn btn-outline-success form-control" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


