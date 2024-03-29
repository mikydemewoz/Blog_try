@extends('layouts.app')

@section('title',"| hey")

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Blogs</h1>
        </div>
    </div>
    <hr>
    @foreach($posts as $post)
        <div class="row" style="margin-left:20px">
            <div class="col-md-10 col-md-offset-2">
                <h2>{{ $post->title }}</h2>
                <h5>Published: {{ date('M j,Y', strtotime($post->created_at)) }}</h5>
                <p>{{ substr($post->body,0,250) }}{{ strlen($post->body) > 250 ? "...":"" }}</p>
                <a href="{{ url('blog/'.$post->slug) }}" class='btn btn-primary'>Read More</a>
            </div>
        </div><hr>
    @endforeach
    <div class="row" style="margin-left:450px;margin-top:20px">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection