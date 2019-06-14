@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-block">
        <a href="/admin" class="btn btn-primary mb-2"> Back </a>
    </div>
    <div class="jumbotron">
        <h1 class="display-4">Edit Post</h1>
        <form action="{{url()->current()}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="postTitle" aria-describedby="emailHelp" placeholder="Enter Title" name="post_title" value={{$post->title}}>
            </div>
            <div class="form-group">
                <label for="postSubject">Title</label>
                <input type="text" class="form-control" id="postSubject" aria-describedby="" placeholder="Enter Subject" name="post_subject" value="{{$post->subject}}">
            </div>
            <div class="form-group">
                <label >Post Body</label>
                <textarea class="form-control" id="postBody" rows="3" name="post_body">{{$post->post}}</textarea>
            </div>
            <div class="form-group">
                @if (!empty($post->featured_image))
                    <img src="{{asset('images/'.$post->featured_image)}}" alt="" height="100" width="100">
                @endif
                <label for="exampleInputEmail1">Featured Image</label><br>
                <input type="file" name="image" id="featuredImage">
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
