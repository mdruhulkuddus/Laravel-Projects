@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('content')
    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Product</li>
        </ol>

        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <span class="text-center text-danger">{{ session('message') }}</span>
                </div>
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>P Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product -> product_name }}</td>
                            <td>{{ $product -> category_name }}</td>
                            <td>{{ $product -> brand_name }}</td>
                            <td>{{ $product -> price }}</td>
                            <td>{{ $product -> description    }}</td>
                            <td><img src="{{ asset($product -> product_image)    }}" alt="image" height="60" width="60"></td>
                            <td>
                                <a href="">
                                    <button class=" btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></button>
                                </a>
                                <a href="{{ route('product-delete',['id' => $product -> id]) }}">
                                    <button class=" btn btn-danger"><i class="fa fa-trash"></i></button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

