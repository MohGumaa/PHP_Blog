@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the laravel application from the "Laravel From Scratch" Youtude.</p>
        <p><a class="btn btn-primary btn-lg" href="/login">Login</a><a class="btn btn-success btn-lg ml-3" href="/register">Register</a></p>
    </div>
@endsection
    
