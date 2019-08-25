@extends('layouts.app')

@section('title','|Contact')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class='text-center'>Contact Me</h1>
        <hr>
        <form action="" >
            <div class="form-group">
                <label for="email" name='email'>Email: </label>
                <input id='email' type="text" class='form-control' placeholder='example@email.com'>
            </div>
            <div class="form-group">
                <label for="subject" name='subject'>Subject: </label>
                <input id='subject' type="text" class='form-control'>
            </div>
            <div class="form-group">
                <label for="description" name='description'>Description: </label>
                <textarea id='description' type="text" class='form-control' placeholder='description'></textarea>
            </div>
            <input type="submit" value='Send Message' class="btn btn-success">
        </form>
    </div>
</div>

@endsection
            