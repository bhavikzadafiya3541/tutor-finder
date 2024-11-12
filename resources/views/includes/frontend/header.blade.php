<header class="site-navbar light site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-3">
                <div class="site-logo">
                    <a href="#"><strong>{{ env('APP_NAME') }}</strong></a>
                </div>
            </div>
            <div class="col-9 text-right">
                <span class="d-inline-block d-lg-none">
                    <a href="#" class=" site-menu-toggle js-menu-toggle py-5 ">
                        <span class="icon-menu h3 text-black"></span>
                    </a>
                </span>
                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto ">
                        <li class="{{ Request::routeIs('frontend.index') ? 'active' : '' }}">
                            <a href="{{ route('frontend.index') }}" class="nav-link">Home</a>
                        </li>
                        <li class="{{ Request::routeIs('frontend.subjects') ? 'active' : '' }}">
                            <a href="{{ route('frontend.subjects') }}" class="nav-link">Subjects</a>
                        </li>
                        @auth
                            <li class="{{ Request::routeIs('frontend.profile') ? 'active' : '' }}">
                                <a href="{{ route('frontend.profile') }}" class="nav-link">Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                                    Logout
                                </a>
                                <form id="logout" class="d-none" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li class="{{ Request::routeIs('login') ? 'active' : '' }}">
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>
                            <li class="{{ Request::routeIs('register') ? 'active' : '' }}">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
