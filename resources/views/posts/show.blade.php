@extends('layouts.app')

@section('title','|Show')

@section('content')
<br>
<br>
<div class="card">
    <div class="row" style="margin-left:0.5px">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
                <p class="lead" style="margin-left:15px">{{ $post->body }}</p>
        </div>
        <div class="col-md-4">
            <dl class="dl-horizontal" style="margin-left:5px">
                <strong><label>Url:</label></strong>
                <p style="margin-left:15px"><a href="{{ url('blog/'.$post->slug) }}">{{ url($post->slug) }}</a></p>
            </dl>
            <dl class="dl-horizontal" style="margin-left:5px">
                <strong><label>Created At:</label></strong>
                <p style="margin-left:15px">{{ date('M j, Y h:ia',strtotime($post->created_at)) }}</p>
            </dl>
            <dl class="dl-horizontal" style="margin-left:5px">
                <strong><label>Last updated:</label></strong>
                <p style="margin-left:15px">{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</p>
            </dl>
            <hr>
            <div class="row" style="margin-bottom:4px;margin-right:1.5px">
                <div class="col-sm-6">
                    {!! Html::linkRoute('post_edit','Edit',array($post->id),array('class' => 'btn btn-primary btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    <form action="{{ route('post_delete',['post' => $post->id])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class='btn btn-danger btn-block'>Delete</button>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection