<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title') | Eat Restaurant</title>
    <meta name="description" content="Eat Restaurant">
    <meta name="author" content="webthemez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    @yield('extra-css')
</head>

<body>
    <!--wrapper start-->
    <div class="wrapper">
        <!--header-->
        <header id="header">
            <div class="menu">
                <nav class="navbar navbar-wrapper">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"
                                data-target="#main-nav">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="main-nav" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('services') }}">Our Services</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('feedback') }}">Feedback</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                @auth
                                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                            ({{ Auth::user()->name }})</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            @yield('header-content')
        </header>

        @yield('content')

        <!--footer-->
        <section class="footer" id="footer">
            <p class="text-center">
                <a href="#header" class="gototop"><i class="fa fa-angle-double-up fa-2x"></i></a>
            </p>
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                </ul>
                <p>
                    &copy; 2025 Copyright of Website By Team
                </p>
            </div>
        </section>
    </div><!--wrapper end-->

    <!--Javascripts-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery-scrolltofixed.js') }}"></script>
    <script src="{{ asset('js/jquery.nav.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/menustick.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/masonry.js') }}"></script>
    <script src="{{ asset('js/imgloaded.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/colorfinder.js') }}"></script>
    <script src="{{ asset('js/gridscroll.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script type="text/javascript">
        jQuery(function ($) {
            $(document).ready(function () {
                $('.navbar-wrapper').stickUp();
            });
    });
    </script>
    @yield('extra-js')
</body>

</html>