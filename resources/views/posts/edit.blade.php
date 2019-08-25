@extends('layouts.app')

@section('title','|Show')

@section('content')
<br>
<br>
<div class="card">
    <div class="row" style="margin-left:0.5px">
        <div class="col-md-11">
        <form action="{{ route('post_update',['post' => $post->id]) }}" method='POST'>
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title"><h3>Title</h3></label>
                <input type="text" name='title' class='form-control' value='{{ $post->title }}'>
            </div>
            <div class="form-group">
                <label for="slug"><h3>Slug</h3></label>
                <input type="text" name='slug' class='form-control' value='{{ $post->slug }}'>
            </div>
            <div class="form-group">
                <label for="content"><h3>Content</h3></label>
                <textarea name="body" rows="10" class='form-control'>{{ $post->body }}</textarea>
            </div>
            <div class="form-group">
                <strong>Created At: </strong>{{ $post->created_at }}
                <div><strong>Last Updated : </strong>{{ $post->updated_at }}</div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success">Edit Blog Post</button>
                <a href="/posts" class="btn btn-outline-danger">Cancel</a>
            </div>
        </form>
        </div>
    </div>
</div>
        
@endsection