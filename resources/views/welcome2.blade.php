<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    </head>
    <body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <strong id="blog"><p>MBlog</p></strong>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"  class="active" target="_blank" rel="noopener noreferrer">Home</a></li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer">About</a></li>
                    <li><a href="#" target="_blank" rel="noopener noreferrer">Contact</a></li>
                    @if (Route::has('login'))
                        @auth
                            <!--<a href="{{ url('/') }}">Home</a>-->
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div id="home" style="background-color: black">
        <div class="landing-text">
            <h1 style="color:white">Blog</h1>
            <h3 style="color:rgb(35,65,92)">My first Laravel project.....</h3>
            <a href="#" class="btn btn-primary btn-lg">Get started</a>
        </div>
    </div>
    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ asset('img/startup-blog-medium.jpg') }}" alt="" srcset="">
                </div>
                <div class="col-sm-6 text-center">
                    <h2>Mblog</h2>
                    <p class="lead" style="font-size:18px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                         when an unknown printer took a galley of type and scrambled it to make a type specimen
                         book. It has survived not only five centuries, but also the leap into electronic
                         typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                         the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                         with desktop publishing software like Aldus PageMaker including versions of Lorem
                         Ipsum</p>
                    <p class="lead" style="font-size:18px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum</p>
                </div>
            </div>
        </div>
    </div>
    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <strong><h4>built with laravel bakend</h4></strong>
                    <p class="lead" style="font-size:15px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type and scrambled it to make a 
                           specimen book. It has survived not only five centuries, but also the leap into
                            electronic typesetting</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <img src="{{ asset('img/laravel.jpg') }}" alt="" srcset="" class="img-responsive">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <strong><h4>built with Bootstrap frontend</h4></strong>
                    <p class="lead" style="font-size:15px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                          when an unknown printer took a galley of type and scrambled it to make a 
                           specimen book. It has survived not only five centuries, but also the leap into
                            electronic typesetting</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" class="img-responsive">
                    <img src="{{ asset('img/bootstrap.jpg') }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <div class="fixed">
    </div>
    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <h2>Here is a cool thing in MBlog</h2>
                    <p style="font-size:18px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                         Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                         when an unknown printer took a galley of type and scrambled it to make a type specimen
                         book. It has survived not only five centuries, but also the leap into electronic
                         typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                         the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                         with desktop publishing software like Aldus PageMaker including versions of Lorem
                         Ipsum</p>
                    <p style="font-size:18px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum</p>
                </div>
                <div class="col-sm-6">
                    <img src="" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-4">
                <h3>Contact Us</h3>
                <br>
                <h4>Here is the address</h4>
            </div>
            <div class="col-sm-4">
                <h3>Connect Us</h3>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
            <div class="col-sm-4">
                <img src="{{ asset('img/mb.jpg') }}" alt="" srcset="" class="icon">
            </div>
        </div>
    </footer>
    </body>
</html>
<!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->