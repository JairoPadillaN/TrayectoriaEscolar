<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">


    <!-- Scripts -->
   {{--  @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    
</head>
<body>

    {{-- Navbar nuevo --}}
    <nav>
        <div class="wrapper">
          <div class="logo">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('assets/img/UTVT_logo.png')}}" height="30">                    
            </a>
          </div>
          <input type="radio" name="slider" id="menu-btn">
          <input type="radio" name="slider" id="close-btn">
          <ul class="nav-links">
            {{--Links de Autenticación--}}
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Acceder</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                    </li>
                @endif
            @else
                <li>
                <a href="#" class="desktop-item">{{ Auth::user()->name }}</a>
                <input type="checkbox" id="showMega">
                <label for="showMega" class="mobile-item">{{ Auth::user()->name }}</label>
                <div class="mega-box">
                    <div class="content">
                    <div class="row">
                        <img src="{{asset('assets/img/cuervo_logo.png')}}">
                    </div>
                    <div class="row">
                        <header>Herramientas</header>
                        <ul class="mega-links">
                        <li><a href="{{url('sedes')}}">Administrar Sedes</a></li>
                        <li><a href="{{url('carreras')}}">Administrar Carreras</a></li>
                        <li><a href="#">Administrar Usuarios</a></li>
                        <li><a href="#">Administrar Roles</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <header>Encuesta</header>
                        <ul class="mega-links">
                        <li><a href="#">Administrar Encuesta</a></li>
                        <li><a href="#">Ver resultados</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <header>Cuenta</header>
                        <ul class="mega-links">
                        <li><a href="#">Perfil</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                </li>
            @endguest 
          </ul>
          <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
      </nav>

        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>
