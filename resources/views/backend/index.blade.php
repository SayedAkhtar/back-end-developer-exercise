@extends('layouts.app')

@section('content')

<div class="container ">
        <a href="/admin/create-post" class="btn btn-success d-block w-100 mb-3">Add </a>
<div class="d-flex">
@foreach ($posts as $post)
    
<div class="card mx-2" style="width: 18rem;">
    <img src="{{asset('images/'.$post->featured_image)}}" class="card-img-top" alt="..." height="200">
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->subject}}</p>
        <a href="{{url()->current()}}/edit-post/{{$post->id}}" class="btn btn-primary">Edit</a>
        <a href="{{url()->current()}}/delete/{{$post->id}}" class="btn btn-primary">Delete</a>
    </div>
</div>

@endforeach
</div>
</div>

@endsection