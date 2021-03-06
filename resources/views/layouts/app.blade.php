<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Trufi 27 de Marzo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                ASOCIACION DE TRUFIS
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->

                    @if(Auth::check())

                    <!-- Menu superior de opciones desplegables -->
                    <ul class="navbar-nav me-auto">
                        <!-- PAQUETE Gestionar Personal -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Gestionar Personal') }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <a class="nav-link" href="{{ route('multas.index') }}">{{ __('Gestionar Usuarios') }}</a>
                                <a class="nav-link" href="{{ route('multas.index') }}">{{ __('Gestionar Empleados') }}</a>
                                <a class="nav-link" href="{{ route('multas.index') }}">{{ __('Gestionar Socios') }}</a>
                                <a class="nav-link" href="{{ route('choferes.index') }}">{{ __('Gestionar Choferes') }}</a>
                                <a class="nav-link" href="{{ route('multas.index') }}">{{ __('Gestionar Roles') }}</a>
                            </div>
                        </li>
                        <!-- PAQUETE Bitacoras y Multas -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Gestionar Bitacoras y Multas') }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <a class="nav-link" href="{{ route('multas.index') }}">{{ __('Gestionar Bitacoras') }}</a>
                                <a class="nav-link" href="{{ route('multas.index') }}">{{ __('Gestionar Multas') }}</a>
                            
                            </div>
                        </li>
                        <!-- PAQUETE Servicio de Transporte -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Gestionar Servcio de Transporte') }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <a class="nav-link" href="{{ route('multas.index') }}">{{ __('Gestionar Servicio Transporte') }}</a>
                                <a class="nav-link" href="{{ route('multas.index') }}">{{ __('Gestionar Vehiculo') }}</a>
                                <a class="nav-link" href="{{ route('multas.index') }}">{{ __('Gestionar Trufi') }}</a>
                                <a class="nav-link" href="{{ route('multas.index') }}">{{ __('Gestionar Grupo Ruta') }}</a>
                                <a class="nav-link" href="{{ route('rutas.index') }}">{{ __('Gestionar Ruta') }}</a>
                            
                            </div>
                        </li>

                    </ul>

                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
