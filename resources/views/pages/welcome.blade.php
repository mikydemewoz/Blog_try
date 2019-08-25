@extends('layouts.app')

@section('title','|Homepage')

@section('content')
  <div class="row">
    <div class="div col-md-12">
    <br>
      <div class="jumbotron" style="background-image:{{ asset('img/blog.jpeg') }} ;background-size:cover;">
        <h1 class="display-4">Welcom to this blog</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
    @foreach ($posts as $post)
      <h3>{{ $post->title }}</h3>
      <p>{{ substr($post->body,0,200) }}{{ strlen($post->body)>200? "...":"" }}</p>
      <a href="{{ url('blog/'.$post->slug) }}" class='btn btn-primary'>Read</a>
    @endforeach
    </div>
    <div class="col-md-3 col-md-offset-1">SideBar</div>
  </div>
@endsection
