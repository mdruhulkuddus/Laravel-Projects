@extends('admin.master')
@section('title')
    Add Author
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <h3 class="text-center">{{session('message')}}</h3>
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Author Information</h3></div>
                    <div class="card-body">
                        <form action="{{route('new-author')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" name="author_name" type="text" placeholder="Author Name" />
                                        <label for="inputFirstName">Author Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <textarea type="text" id="description" name="author_biography" placeholder="Author Biography" class="form-control"></textarea>
                                        <label for="description">Author Biography</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid"><input type="submit" value="Submit" class="btn btn-outline-info"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

