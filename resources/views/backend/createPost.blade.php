@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="display-4">Add Post</h1>
        <form action="{{url()->current()}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="postTitle" aria-describedby="emailHelp" placeholder="Enter Title" name="post_title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Post Body</label>
                <textarea class="form-control" id="postBody" rows="3" name="post_body"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Featured Image</label><br>
                <input type="file" name="image" id="featuredImage">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
