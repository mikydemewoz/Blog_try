@extends('layouts.app')

@section('title','|All Posts')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2" style="margin-top:13px;">
            <a href="{{ route('post_create') }}" class="btn btn-lg btn-block btn-primary">Create Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row" style="margin-top:20px">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr($post->body,0,70) }}{{ strlen($post->body) > 50?"...":"" }}</td>
                            <td>{{ date('M j, Y',strtotime($post->created_at)) }}</td>
                            <td><a href="{{ route('post_edit',['post' => $post->id]) }}" class="btn btn-outline-primary btn-sm">Edit</a></td>
                            <td><a href="{{ route('post_show',['post' => $post->id]) }}" class="btn btn-outline-primary btn-sm">View</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $posts->links(); !!}
            </div>
        </div>
    </div>
@endsection