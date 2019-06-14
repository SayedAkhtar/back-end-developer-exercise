@extends('welcome')

@section('post')
    

  <h1 class="my-4"> Latest Post
  </h1>

  @foreach ($posts as $post)
  <div class="card mb-4">
      <img class="card-img-top" src="{{asset('images/'.$post->featured_image)}}" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title text-capitalize">{{$post->title}}</h2>
        <p class="card-text">{{ $post->subject }}</p>
          <a href="{{$user->find($post->userid)->user_name}}/{{$post->id}}" class="btn btn-primary">Read More →</a>
      </div>
      <div class="card-footer text-muted">
        Posted on {{$post->created_at}} by
        <a href="#">{{$user->find($post->userid)->name}}</a>
      </div>
  </div>
  @endforeach

  {{$posts->links()}}

@endsection