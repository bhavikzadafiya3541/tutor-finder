<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto align-items-baseline">
        <li class="nav-item">
            <span>{{ Auth::check() ? Auth::user()->name : '' }}</span>
        </li>
    </ul>
</nav>
