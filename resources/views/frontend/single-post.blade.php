@extends('welcome')
@section('post')
   <div class="container">
        <h1>{{$post->title}}</h1>
        <small>Published By <b class="text-capitalize">{{$user->name}}</b> at {{$post->updated_at}}</small>
        <small></small>
        <hr>
        <img src="{{asset('images/'.$post->featured_image)}}" alt="" height="300" width="300">
        <p>
            {{$post->post}}
        </p>
   </div>
@endsection