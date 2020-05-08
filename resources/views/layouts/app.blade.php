<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KeepnEat') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ url('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ url('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">



    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{ url('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <header id="header" class="fixed-top d-flex align-items-center" style="top: 0px; background-color: #444444;">
            <div class="container d-flex align-items-center">
        
              <div class="logo mr-auto">
              <h1 class="text-light"><a href="{{route('home')}}"><span>Keep n' Eat</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
              </div>
        
              <nav class="nav-menu d-none d-lg-block ">
                <ul>
                  {{-- <li class="active"><a href="#hero">Home</a></li>
                  <li><a href="#about">Qui som</a></li>
                  <li><a href="#why-us">Restaurants</a></li>
                  <li><a href="#contact">Contacte</a></li> --}}
          @if(Route::has('login'))
                            @auth
                            <li class="ml-5 nav-item dropdown">
                             
                              <a class="nav-link dropdown-toggle ml-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name}} </a>
                              <img  src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:5px; border-radius:50%">
        
                              <div class="dropdown-menu" style="background-color: darkgray" aria-labelledby="navbarDropdown">
                                @if(\View::exists('perfil'))
                                  <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                                @else

                                
                                <a class="dropdown-item" id="{{ Auth::user()->name }}" href="{{ route('perfil') }}">Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                                @endif
                              </div>
                            </li>
              
                            {{-- <li class="logout text-center"><a href="{{ url('/logout') }}">Logout</a></li> --}}
        
                            @else
                            <li class="login text-center"><a href="{{ route('login') }}">Login</a></li>
        
                                @if (Route::has('register'))
                                <li class="register text-center"><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                @endif
                </ul>
              </nav><!-- .nav-menu -->
        
            </div>
          </header><!-- End Header -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
