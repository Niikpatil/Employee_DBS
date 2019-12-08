<header class="app-header navbar "> {{-- style="background-color: #2a94ff;" --}}
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" data-toggle="sidebar-show" type="button">
        <span class="navbar-toggler-icon">
        </span>
    </button>
    {{-- <a class="navbar-brand" href="#">
        <img alt="CoreUI Logo" class="navbar-brand-full" height="25" src="img/brand/logo.svg" width="89">
            <img alt="CoreUI Logo" class="navbar-brand-minimized" height="30" src="img/brand/sygnet.svg" width="30">
            </img>
        </img>
    </a> --}}
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>

    <button class="navbar-toggler sidebar-toggler d-md-down-none" data-toggle="sidebar-lg-show" type="button">
        <span class="navbar-toggler-icon">
        </span>
    </button>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <div class="dropdown-header text-center">
                    <strong>
                        Account
                    </strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-user">
                    </i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-wrench">
                    </i>
                    Settings
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i>
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</header>
