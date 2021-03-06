<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" >
                <a class="navbar-brand" href="{{ route('posts.index') }}">
                    <img src="/images/phonepedia.jpg" height="60" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <form action="{{ route('search.posts') }}" method="get" class="form-inline my-2 my-lg-0">
                        <input name="query" class="form-control mr-sm-2" type="search" placeholder="Ketik disini..." aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Cari</button>
                    </form>
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                      </li>
                      <li class="nav-item{{ request()->is('posts') ? ' active' : '' }}">
                        <a href="{{ route('posts.index') }}" class="nav-link">Posts</a>
                      </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item{{ request()->is('login') ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item{{ request()->is('register') ? ' active' : '' }}">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('posts.create') }}">Buat post baru</a>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>