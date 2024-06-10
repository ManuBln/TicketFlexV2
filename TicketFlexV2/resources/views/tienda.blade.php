<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/tienda.css') }}">
    <style>
        #mensaje {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            z-index: 9999;
            animation: slideIn 0.5s ease forwards;
        }

        @keyframes slideIn {
            from {
                right: -100%;
            }

            to {
                right: 20px;
            }
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')

    <div class="entradas">
        <h2>ENTRADAS</h2>
        @foreach($eventos as $evento)
            <div class="entrada">
                <div class="entrada-content">
                    <div class="entrada-info">
                        <div class="entrada-title">{{ $evento->nombre_evento }}</div>
                        <div class="entrada-price">Precio: {{ $evento->precio }}$</div>
                        <div class="entrada-date">Fecha y Hora: {{ $evento->fecha_hora }}</div>
                        <div class="entrada-description">Descripción: {{ $evento->descripcion }}</div>
                        <div class="entrada-capacity">Aforo: {{ $evento->aforo }}</div>
                        <form action="{{ route('cestaEntrada', ['nombre' => $evento->nombre_evento]) }}" method="POST">
                            @csrf
                            <button class="button_slide slide_right" type="submit">Añadir al carrito</button>
                        </form>
                    </div>
                    <div class="entrada-image" style="background-image: url('{{ $evento->imagen }}');"></div>
                </div>
            </div>
        @endforeach
    </div>
    </div>

    <div class="articulos">
        <h2>MERCH</h2>
        <div class="articulitoss">
            @foreach($articulosSinDrop as $articulo)
                <div class="merch">
                    <div class="merch-content">
                        <div class="merch-info">
                            <img class="merch-img" src="{{ $articulo->imagen_ruta }}" alt="{{ $articulo->nombre }}"
                                 style="width: 100%; border-radius: 5px; margin-bottom: 10px;">
                            <div class="merch-title">{{ $articulo->nombre }}</div>
                            <div class="merch-price">{{ $articulo->precio }}</div>
                            <div class="merch-date">Descripción: {{ $articulo->descripcion }}</div>
                            <div class="merch-capacity">Unidades: {{ $articulo->unidades }}</div>
                            <form action="{{ route('cestaArticulo', ['nombre' => $articulo->nombre]) }}" method="POST">
                                @csrf
                                <button class="button_slide slide_right" type="submit">Añadir al carrito</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="drops">
        <h2>DROPS</h2>
        <div class="dops-contenedor">

            @foreach($articulosConDrop as $articulo)
                <div class="drop">
                    <div class="drop-content">
                        <img class="drop-img" src="{{ $articulo->imagen_ruta }}"
                             alt="{{ $articulo->nombre }}"
                             style="width: 100%; border-radius: 5px; margin-bottom: 10px;">
                        <div class="drop-title">{{ $articulo->nombre }}</div>
                        <div class="drop-price">{{ $articulo->precio }}</div>
                        <div class="drop-date">Descripción: {{ $articulo->descripcion }}</div>
                        <div class="drop-capacity">Unidades: {{ $articulo->unidades }}</div>
                        <form action="{{ route('cestaArticulo', ['nombre' => $articulo->nombre]) }}"
                              method="POST">
                            @csrf
                            <button class="button_slide slide_right" type="submit">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <button id="cartButton" class="btn position-fixed top-0 end-0 m-3 rounded-circle"
            style="background-color: #e620d5; color: white;">
        <i class="fa-solid fa-cart-shopping"></i>
    </button>
    <div id="sidebar" class="sidebar bg-black shadow">
        <button id="closeButton" class="close-button btn btn-link text-white">&times;</button>
        <div class="container cesta-container mt-5 text-white">
            <h3>EVENTOS</h3>
            @if(empty($cestaEvento))
                <p>No hay eventos en la cesta.</p>
            @else
                @foreach($cestaEvento as $evento)
                    @if(is_array($evento))
                        <div class="cesta-item">
                            <img src="{{ $evento['imagen'] }}" alt="{{ $evento['nombre'] }}"
                                 style="width: 50px; height: auto;">
                            <p>{{ $evento['nombre'] }} - Precio: {{ $evento['precio'] }}$</p>
                        </div>
                    @else
                        <p>{{ $evento }}</p>
                    @endif
                @endforeach
            @endif

            <h3>MERCH Y DROPS</h3>
            @if(empty($cestaArticulo))
                <p>No hay artículos en la cesta.</p>
            @else
                @foreach($cestaArticulo as $articulo)
                    @if(is_array($articulo))
                        <div class="cesta-item">
                            <img src="{{ $articulo['imagen'] }}" alt="{{ $articulo['nombre'] }}"
                                 style="width: 50px; height: auto;">
                            <p>{{ $articulo['nombre'] }} - Precio: {{ $articulo['precio'] }}$</p>
                        </div>
                    @else
                        <p>{{ $articulo }}</p>
                    @endif
                @endforeach
            @endif

            @if(!empty($cestaEvento) || !empty($cestaArticulo))
                @if(Auth::user())
                    <form action="{{ route('pago') }}" method="get">
                        @csrf
                        <button class="button_slide slide_right" type="submit">Pagar</button>
                    </form>
                @else
                    <form action="{{ route('register') }}" method="get">
                        @csrf
                        <button class="button_slide slide_right" type="submit">Registrarse para pagar</button>
                    </form>
                @endif
            @endif
        </div>
    </div>
    <script>
        // Mostrar y ocultar el menú lateral
        document.getElementById('cartButton').addEventListener('click', function () {
            document.getElementById('sidebar').style.width = '250px';
        });

        document.getElementById('closeButton').addEventListener('click', function () {
            document.getElementById('sidebar').style.width = '0';
        });
    </script>

    @if(session('mensaje'))
        <div id="mensaje" class="alert">
            {{ session('mensaje') }}
        </div>
    @endif

    <script>
        // Esperar 3 segundos y luego ocultar el mensaje
        setTimeout(function () {
            var mensaje = document.getElementById('mensaje');
            if (mensaje) {
                mensaje.style.display = 'none';
            }
        }, 3000);
    </script>

@endsection
</body>
</html>
