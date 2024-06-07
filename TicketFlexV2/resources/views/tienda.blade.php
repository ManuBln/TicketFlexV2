<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="{{ asset('css/tienda.css') }}">
</head>
@extends('layouts.app')

@section('content')
<body>
<div class="container">
        <h1>Entradas</h1>
        <div style="display: flex; flex-wrap: wrap;">
            @foreach($eventos as $evento)
                <div class="card">
                    <div class="card-content">
                        <div class="card-info">
                            <div class="card-title">{{ $evento->nombre_evento }}</div>
                            <div class="card-price">Precio: {{ $evento->precio }}$</div>
                            <div class="card-date">Fecha y Hora: {{ $evento->fecha_hora }}</div>
                            <div class="card-description">Descripción: {{ $evento->descripcion }}</div>
                            <div class="card-capacity">Aforo: {{ $evento->aforo }}</div>
                            <form action="{{ route('cestaEntrada', ['nombre' => $evento->nombre_evento]) }}" method="POST">
                                @csrf
                                <button type="submit">Añadir a la cesta</button>
                            </form>
                        </div>
                        <div class="card-image" style="background-image: url('{{ $evento->imagen }}');">
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
/* 
    <div class="container">
        <h1>Merch</h1>
        <div style="display: flex;">
            @foreach($articulos as $articulo)
                <div class="card">
                    <img src="{{ $articulo->imagen_ruta }}" alt="{{ $articulo->nombre }}">
                    <div class="card-content">
                        <div class="card-title">{{ $articulo->nombre }}</div>
                        <div class="card-price">{{ $articulo->precio }}</div>
                        <div class="card-date">Descripción: {{ $articulo->descripcion }}</div>
                        <div class="card-capacity">Unidades: {{ $articulo->unidades }}</div>
                        <form action="{{ route('cestaArticulo', ['nombre' => $articulo->nombre]) }}" method="POST">
                            @csrf
                            <button type="submit">Añadir a la cesta</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
*/

    <div class="container">
        <h1>Drops</h1>
        <div style="display: flex; flex-direction: row;">
            {{-- Artículo Actual --}}
            @if ($articuloActual)
                <div class="card">
                    <img src="{{ $articuloActual->imagen_ruta }}" alt="{{ $articuloActual->nombre }}">
                    <div class="card-content">
                        <div class="card-title">{{ $articuloActual->nombre }}</div>
                        <div class="card-price">{{ $articuloActual->precio }}</div>
                        <div class="card-date">Descripción: {{ $articuloActual->descripcion }}</div>
                        <div class="card-capacity">Unidades: {{ $articuloActual->unidades }}</div>
                        <form action="{{ route('cestaArticulo', ['nombre' => $articuloActual->nombre]) }}" method="POST">
                            @csrf
                            <button type="submit">Añadir a la cesta</button>
                        </form>
                    </div>
                </div>
            @endif

            <div class="container cesta-container">
                <h2>Contenido de la Cesta de Eventos</h2>
                @if(empty($cestaEvento))
                    <p>No hay eventos en la cesta.</p>
                @else
                    @foreach($cestaEvento as $evento)
                        @if(is_array($evento))
                            <div class="cesta-item">
                                <img src="{{ $evento['imagen'] }}" alt="{{ $evento['nombre'] }}" style="width: 50px; height: auto;">
                                <p>{{ $evento['nombre'] }} - Precio: {{ $evento['precio'] }}$</p>
                            </div>
                        @else
                            <p>{{ $evento }}</p>
                        @endif
                    @endforeach
                @endif

                <h2>Contenido de la Cesta de Artículos</h2>
                @if(empty($cestaArticulo))
                    <p>No hay artículos en la cesta.</p>
                @else
                    @foreach($cestaArticulo as $articulo)
                        @if(is_array($articulo))
                            <div class="cesta-item">
                                <img src="{{ $articulo['imagen'] }}" alt="{{ $articulo['nombre'] }}" style="width: 50px; height: auto;">
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
                            <button type="submit">Pagar</button>
                        </form>
                    @else
                        <form action="{{ route('register') }}" method="get">
                            @csrf
                            <button type="submit">Registrase para pagar</button>
                        </form>
                    @endif

                @elseif(empty($cestaEvento) && empty($cestaArticulo))
                    <p></p>
                @elseif(empty($cestaEvento) && !empty($cestaArticulo))
                    <form action="{{ route('pago') }}" method="get">
                        @csrf
                        <button type="submit">Pagar</button>
                    </form>
                @elseif(!empty($cestaEvento) && empty($cestaArticulo))
                    <form action="{{ route('pago') }}" method="get">
                        @csrf
                        <button type="submit">Pagar</button>
                    </form>
                @endif
            </div>

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
        </div>
    </body>
    @endsection
</html>
