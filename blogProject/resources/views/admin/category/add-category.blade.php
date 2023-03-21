@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Category Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('new-category') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="category_name" placeholder="Category" />
                                <label for="inputEmail">Category</label>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" class="form-control btn btn-success" value="submit" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
