<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ url('images/logo2.png') }}" rel="shortcut icon">
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ url('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ url('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/bootsnav.css') }}" rel="stylesheet">
    <link href="{{ url('css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ url('css/product-tab.css') }}" rel="stylesheet">
    <link href="{{ url('css/settings.css') }}" rel="stylesheet">
    <link href="{{ url('css/reset.css') }}" rel="stylesheet">
    <link href="{{ url('css/hero_slider.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">

</head>

<body>



    <header id="header-4">
        <div id="header_top_4" class="header_top">


            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="header-top-logo"> <a href="/">
                                <h3> <i class="fa fa-car"></i> AutoCare</h3>
                            </a> </div>
                    </div>
                    <div class="col-sm-8 col-md-5 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i> +91 9567310731</p>
                        </div>
                        <div class="top-number">
                            <p><i class="fa fa-envelope"></i> <a href="#"> info@autocare.com</a> </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="social-share">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="container">
                @guest

                <div class="attr-nav">
                    <ul>
                        <li class="appintment-btn"><a href="{{ route('register') }}" class="cd-btn secondary">Register</a></li>
                    </ul>
                </div>
                @else
                <div class="attr-nav">
                    <ul>
                        <li class="appintment-btn"><a onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="cd-btn secondary">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
                @endguest



                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
                    <a class="navbar-brand" href="index.html">AutoCares </a> </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                        <li> <a href="{{ url('/') }}">Home</a> </li>
                        @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else

                        <li> <a href="{{ url('/home') }}">My Shop</a> </li>

                        @if(Auth::user()->isAdmin == 1)
                        <li> <a href="{{ url('/admin') }}">Admin Panel</a> </li>

                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    </header>

    </head>

    <body>

        <main class="py-4">
            @yield('content')
        </main>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        @include('flashy::message')


        <footer id="footer" style="background-image: url(&quot;file:///Users/jithin/Downloads/auto-zoon-auto-repair-multipurpose-bootstrap-template/auto_zoon_files/images/footer-bg.jpg&quot;); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center -94.9062px;">

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p>@ Copyright 2019</p>
                        </div>

                    </div>
                </div>
        </footer>
    </body>
    @yield('javascript')

</html>