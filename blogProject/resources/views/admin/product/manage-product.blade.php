@extends('admin.master')
@section('content')
    <div class="container-fluid px-4 pt-5">
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>sl No</th>
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th>brand Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1; @endphp
                    @foreach($products as $product)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->category_name}}</td>
                        <td>{{$product->brand_name}}</td>
                        <td>{{$product->price}}</td>
                        <td><img style="width: 50px;height: 50px" src="{{asset($product->image)}}" alt=""></td>
                        <td>{{$product->description}}</td>
                        <td>{{ $product->status==1?'published':'unpublished' }}</td>
                        <td>
                            @if($product->status==1)
                                <a href="{{ route('status',['id'=>$product->id]) }}" class="btn btn-warning">unPublished</a>
                            @else
                                <a href="{{ route('status',['id'=>$product->id]) }}" class="btn btn-primary">published</a>
                            @endif
                                <a href="{{ route('edit',['id'=>$product->id]) }}" class="btn btn-primary">Edit</a>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('delete').submit()">
                                    <form action="{{ route('delete') }}" method="post" id="delete">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
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
