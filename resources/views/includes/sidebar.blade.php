<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link d-flex justify-content-center">
        <span class="brand-text font-weight-light text-center">{{ env('APP_NAME') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.profile') }}" class="nav-link {{ Request::routeIs('admin.profile') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.tutors.index') }}" class="nav-link {{ Request::routeIs('admin.tutors.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Tutors</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.cities.index') }}" class="nav-link {{ Request::routeIs('admin.cities.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-location"></i>
                        <p>Cities</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.subjects.index') }}" class="nav-link {{ Request::routeIs('admin.subjects.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Subjects</p>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>{{ __('Log Out') }}</p>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
