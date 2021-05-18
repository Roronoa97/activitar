<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Activitar Template">
        <meta name="keywords" content="Activitar, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Activitar | Template</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('template/assets/css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('template/assets/css/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('template/assets/css/elegant-icons.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('template/assets/css/nice-select.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('template/assets/css/owl.carousel.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('template/assets/css/magnific-popup.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('template/assets/css/slicknav.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}" type="text/css">
    </head>
    <body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('template/assets/img/logo.png') }}" alt="">
                </a>
            </div>
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li class="{{ Route::is('index') ? 'active' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                            <li class="{{ Route::is('aboutus') ? 'active' : '' }}"><a href="{{ route('aboutus') }}">About us</a></li>
                            @auth
                            <li class="{{ Route::is('profile') ? 'active' : '' }}"><a href="#">My Profile</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('profile') }}">View Profile</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Log Out</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer-section pt-0">
        <div class="copyright-text mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ct-inside"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->
    <script src="{{ asset('template/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('template/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/main.js') }}"></script>
    </body>
</html>
