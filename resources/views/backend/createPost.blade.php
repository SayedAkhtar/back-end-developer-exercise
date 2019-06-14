@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="display-4">Add Post</h1>
        <form action="{{url()->current()}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="postTitle">Title</label>
                <input type="text" class="form-control" id="postTitle" aria-describedby="" placeholder="Enter Title" name="post_title" required>
            </div>
            <div class="form-group">
                <label for="postSubject">Subject</label>
                <input type="text" class="form-control" id="postSubject" aria-describedby="" placeholder="Enter Subject" name="post_subject" required>
            </div>
            <div class="form-group">
                <label >Post Body</label>
                <textarea class="form-control" id="postBody" rows="3" name="post_body"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Featured Image</label><br>
                <input type="file" name="image" id="featuredImage" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
@endsection
