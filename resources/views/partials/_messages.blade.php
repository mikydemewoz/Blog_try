@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>Success:</strong>{{ Session::get('success') }}
    </div>
@endif

@if(Session::has('updated'))
    <div class="alert alert-success" role="alert">
        <strong>Success:</strong>{{ Session::get('updated') }}
    </div>
@endif

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Errors: </strong>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif