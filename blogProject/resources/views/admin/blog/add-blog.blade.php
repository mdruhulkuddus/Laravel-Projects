@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Blog Form</h3></div>
                    <div class="card-body">
                        <form action="{{ route('new-blog') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">

                                        <select class="form-control" name="category_id"  id="">
                                            <option value="">Select A Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">

                                        <select class="form-control" name="author_id"  id="">
                                            <option value="">Select A Author</option>
                                            @foreach($authors as $author)
                                                <option value="{{$author->id}}">{{$author->author_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="title" placeholder="Title" />
                                <label for="inputEmail">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="slug" placeholder="slug" />
                                <label for="inputEmail">Slug</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="description" id="editor1" cols="50" rows="50"></textarea>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="date" name="date"/>
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
