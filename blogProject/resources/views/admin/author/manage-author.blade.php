@extends('admin.master')
@section('title')
    Manage Author
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header text-center">
                Author Management Table
            </div>
            <h3 class="text-center">{{session('message')}}</h3>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Author Name</th>
                        <th>Author Biography</th>
                        <th>Image</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($authors as $author)
                    <tr>
                        <td>{{$author->author_name}}</td>
                        <td>{{$author->author_biography}}</td>
                        <td><img src="{{asset($author->image)}}" alt="" style="height: 60px; width: 80px;"></td>
                        <td>{{$author->status==1?'Published':'Unpublished'}}</td>
                        <td class="d-flex">
                            @if($author->status==1)
                            <a href="{{route('status',['id'=>$author->id])}}" class="btn btn-outline-primary">Unpublished</a>
                            @else
                                <a href="{{route('status',['id'=>$author->id])}}" class="btn btn-outline-info">Published</a>
                            @endif
                            <a href="{{route('edit-author',['id'=>$author->id])}}" class="btn btn-outline-info" style="margin-left: 10px">Edit</a>
                                <form action="delete-author" method="post">
                                    @csrf
                                    <input type="hidden" name="author_id" value="{{$author->id}}">
                                    <input type="submit" class="btn btn-outline-danger" value="Delete" style="margin-left: 10px" onclick="return confirm('Are you Sure?')">
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
