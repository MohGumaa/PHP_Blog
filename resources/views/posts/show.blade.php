@extends('layouts.app')

@section('content')
    <div class="pt-2">
        <a href="/posts" class="btn btn-dark ">Go Back</a>
        <h1 class="pt-4">{{$post->title}}</h1>
        <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%" alt="cover"><br>
        <div>
            {!! $post->body !!}
        </div>
        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user_id)
                <a class="btn btn-outline-light text-dark" href="/posts/{{$post->id}}/edit">Edit</a>
                <form action="/posts/{{$post->id}}" method="POST" class="float-left">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            @endif
        @endif  
    </div>
@endsection