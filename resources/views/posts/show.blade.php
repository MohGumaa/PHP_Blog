@extends('layouts.app')

@section('content')
    <div class="pt-2">
        <a href="/posts" class="btn btn-dark ">Go Back</a>
        <h1 class="pt-4">{{$post->title}}</h1>
        <div>
            {!! $post->body !!}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
        <hr>
        <a class="btn btn-outline-light text-dark" href="/posts/{{$post->id}}/edit">Edit</a>
        <form action="/posts/{{$post->id}}" method="POST" class="float-left">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection