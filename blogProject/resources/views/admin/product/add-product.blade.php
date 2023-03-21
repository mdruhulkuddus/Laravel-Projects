@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('new-product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="product_name" placeholder="Enter Product name" />
                                        <label for="inputFirstName">Product name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" name="category_name" placeholder="Category Name" />
                                        <label for="inputEmail">Category Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" name="brand_name" placeholder="Brand Name" />
                                        <label for="inputEmail">Brand Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="price" placeholder="Price" />
                                <label for="inputEmail">Price</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="description" id="" cols="50" rows="50"></textarea>
                                <label for="inputEmail">Description</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="file" name="image"/>
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
