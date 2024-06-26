<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TicketFlex') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        @font-face {
            font-family: 'ticketflex';
            src: url('../fuentes/ticketflex.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        h1 {
            font-family: 'ticketflex', sans-serif;
            font-size: 7rem;
            text-align: center;
            color: #ffffff;
            margin-bottom: 20px;
        }
        h2{
            color:white;
            font-size: 4rem;
        }

        .gradient-background {
            background: linear-gradient(300deg,#e620d5,#0c000a,#110111);
            background-size: 180% 180%;
            animation: gradient-animation 30s ease infinite;
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .titulo {
            width: 40%;
            margin: auto;
            display: flex;
        }
        .bordes {
            position: relative;
        }
        .bordes::after {
            content: "";
            /* Es necesario para que el elemento se visualice */
            position: absolute;
            /* Posiciona el pseudo-elemento en relación al elemento principal */
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border-bottom: 2px solid transparent;
            /* Define el borde inicial (transparente) */
            pointer-events: none;
            /* Evita que el pseudo-elemento interfiera con los eventos del elemento principal */
            transition: border-color 0.3s;
            /* Agrega una transición para un efecto suave al pasar el mouse sobre el elemento */
        }

        .bordes:hover::after {
            border-color: #ffffff;
            /* Cambia el color del borde en hover (en este caso, rojo) */
        }

    </style>
</head>
<body class="gradient-background">
<div id="app">
    <h1 style="color: white; font-size: 7rem">TICKETFLEX</h1>
    <nav class="navbar navbar-expand-lg p-5" style="background-color: transparent;">
        <div class="container">
            <a class="navbar-brand text-white bordes" href="{{route('home')}}" target="_self">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
{{--                    <li class="nav-item">
                        <a class="nav-link text-white bordes" href="#About">Sobre Nosotros</a>
                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link text-white bordes" href="/tienda">Tienda</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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
