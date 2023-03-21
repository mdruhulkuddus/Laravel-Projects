@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('update-product') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" value="{{ $product->product_name }}" name="product_name" placeholder="Enter Product name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" value="{{ $product->category_name }}" name="category_name" placeholder="Category Name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" value="{{ $product->brand_name }}"  name="brand_name" placeholder="Brand Name" />

                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" value="{{ $product->price }}" name="price" placeholder="Price" />

                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="description" id="" cols="50" rows="50">{{ $product->description }}</textarea>

                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="file" name="image"/>
                                <img src="{{ asset($product->image) }}" alt="" style="height: 80px; width: 80px">
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

