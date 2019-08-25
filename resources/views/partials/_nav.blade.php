<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MBLOG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="{{ Request::is('/') ? 'nav-item active':'nav-item' }}">
        <a class="nav-link" href="{{ route('blog_index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="{{ Request::is('blog') ? 'nav-item active':'nav-item' }}">
        <a class="nav-link" href="{{ route('blog_indexs') }}">Blog <span class="sr-only">(current)</span></a>
      </li>
      <li class="{{ Request::is('about') ? 'nav-item active':'nav-item' }}">
        <a class="nav-link" href="{{ route('blog_about') }}">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="{{ Request::is('contact') ? 'nav-item active':'nav-item' }}">
        <a class="nav-link" href="{{ route('blog_contact') }}">Contact <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('post_index') }}">Posts</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
      </li>
    </ul>
  </div>
</nav>