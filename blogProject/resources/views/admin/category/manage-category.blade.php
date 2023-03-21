@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h3 class="text-center">{{session('message')}}</h3>
        <div class="card mb-4">
            <div class="card-body text-center">Category management Table
            </div>
        </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Category Name</th>
                        <th>status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($categories as $categorie)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$categorie->category_name}}</td>
                        <td>{{$categorie->status==1?'Published':'Unpublished'}}</td>
                        <td class="d-flex">
                            @if($categorie->status)
                            <a href="{{route('status',['id'=>$categorie->id, 'for' => 'cat'])}}" class="btn btn-outline-info">Unpublished</a>
                            @else
                                <a href="{{route('status',['id'=>$categorie->id, 'for' => 'cat'])}}" class="btn btn-outline-success">Published</a>
                            @endif

                            <a href="{{route('edit-category',['id'=>$categorie->id])}}" class="btn btn-outline-info" style="margin-right: 4px">Edit</a>
                            <form action="{{route('delete-category')}}" method="post">
                                @csrf
                                <input type="hidden" name="category_id" value="{{$categorie->id}}">
                                <input type="submit" value="Delete" class="btn btn-outline-primary" onclick="return confirm('Are you Sure?')">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
