@extends('welcome')
@section('post')
   <div class="container border">
        <h1>{{$post->title}}</h1>
        <small>Published By <b class="text-capitalize">{{$user->name}}</b> at {{$post->updated_at}}</small>
        <small></small>
        <hr>
        <img src="{{asset('images/'.$post->featured_image)}}" alt="" height="300" width="300">
        <div>
            {!! $post->post !!}
        </div>
   </div>

   @include('frontend.comment',['post'=> $post, 'user'=>$user, 'comments'=> $comments])
@endsection