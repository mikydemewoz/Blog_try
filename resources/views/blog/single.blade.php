@extends('layouts.app')

@section('title',"| $post->title")

@section('content')

    <div class="row" style="margin-left:100px;margin-top:20px">
        <div class="col-md-10">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
        </div>
    </div>

@endsection