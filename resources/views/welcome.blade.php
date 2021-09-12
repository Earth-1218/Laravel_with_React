<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <!-- Styles -->


</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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


<div class="container">
    <div class="title row m-b-md mt-3">
        <div class="col-lg-12">
            <span style="font-size: 3em;">Laravel with React-Js  &nbsp;<i class="fab fa-laravel"></i>&nbsp; <i
                    class="fas fa-atom"></i></span>
        </div>
    </div>
    <div class="card card-primary mt-5 shadow">
        <div class="card-header">
            <span style="font-size: 1.5em;"> Application information </span>
        </div>
        <div class="card-body">
            <ul>
                <li>Title :
                    <string>Blog application - laravel with react-js</string>
                </li>
                <li>Developed by :
                    <string>Mr. Ravi majithiya</string>
                </li>
                <li>Front-end :
                    <string>React, Bootstrap, Express-js, Jquery, javascript, animate,</string>
                </li>
                <li>Back-end :
                    <string>Laravel - a legend of PHP frameworks</string>
                </li>
                <li>Time period :
                    <string>4 days and 3 hours</string>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('assets/front/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/front/js/aos.js') }}"></script>
<script src="{{ asset('assets/front/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('assets/front/js/scrollax.min.js') }}"></script>
<script src="{{ asset('assets/front/js/main.js') }}"></script>
<!-- Scripts -->
</body>

</html>
