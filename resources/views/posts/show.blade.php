@extends('layouts.app')

@section('content')
    <div class="pt-3">
        <a href="/posts" class="btn btn-dark ">Go Back</a>
        <h1 class="pt-4">{{$post->title}}</h1>
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
        </div>
@endsection