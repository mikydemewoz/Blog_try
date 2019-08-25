

  @include('partials._head')
    <body>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
      @include('partials._nav')
      
        <div class="container">
            @include('partials._messages')
            @yield('content')
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        @include('partials._javascript')
        @yield('scripts')
    </body>
  </html>