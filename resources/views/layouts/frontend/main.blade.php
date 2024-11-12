<!doctype html>
<html lang="en">

<head>
    <title>@yield('page_title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/layouts/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/layouts/fonts/brand/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/layouts/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/layouts/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/layouts/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/layouts/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/layouts/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/layouts/css/aos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/layouts/css/style.css') }}">
    @stack('custom-styles')
</head>

<body>
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        @include('includes.frontend.header')

        <div class="site-section-cover overlay"
            style="background-image: url({{ asset('frontend/layouts/images/hero_bg.jpg') }});">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10 text-center">
                        @yield('main-title')
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        @include('includes.frontend.footer')
    </div>

    <script src="{{ asset('frontend/layouts/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/layouts/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/layouts/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/layouts/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/layouts/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('frontend/layouts/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/layouts/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/layouts/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend/layouts/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/layouts/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/layouts/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/layouts/js/main.js') }}"></script>

    @stack('custom-scripts')
</body>

</html>
