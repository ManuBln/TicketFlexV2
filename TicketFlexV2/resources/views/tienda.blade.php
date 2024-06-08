<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento HTML Básico</title>
    <style>
        /* Estilos CSS pueden ir aquí */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .card {
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-price {
            font-size: 16px;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .card-date,
        .card-capacity {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        .card-button {
            display: block;
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }

        .card-button:hover {
            background-color: #45a049;
        }

        #mensaje{
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
                /* Comienza fuera de la pantalla en el lado derecho */
            }

            to {
                right: 20px;
                /* Termina en la posición deseada */
            }
        }

        .cesta-container {
            margin-top: 50px;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .cesta-item {
            margin-bottom: 10px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .cesta-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')



    <div class="container">
        <h1>Entradas</h1>
        <div style="display: flex;">
            @foreach($eventos as $evento)
                <div class="card">
                    <img src="{{ $evento->imagen }}" alt="{{ $evento->nombre }}">
                    <div class="card-content">
                        <div class="card-title">{{ $evento->nombre_evento }}</div>
                        <div class="card-price">Precio:{{ $evento->precio }}$</div>
                        <div class="card-date">Fecha y Hora: {{ $evento->fecha_hora }}</div>
                        <div class="card-date">Descripción: {{ $evento->descripcion }}</div>
                        <div class="card-capacity">Aforo: {{ $evento->aforo }}</div>
                        <form action="{{ route('cestaEntrada', ['nombre' => $evento->nombre_evento]) }}" method="POST">
                            @csrf
                            <button type="submit">Añadir a la cesta</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

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
                        <form action="{{ route('cestaArticulo', ['nombre' => $articuloActual->nombre]) }}"
                              method="POST">
                            @csrf
                            <button type="submit">Añadir a la cesta</button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="container cesta-container">
        <h2>Contenido de la Cesta de Eventos</h2>
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

        <h2>Contenido de la Cesta de Artículos</h2>
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
                    <button type="submit">Pagar</button>
                </form>
            @else
                <form action="{{ route('register') }}" method="get">
                    @csrf
                    <button type="submit">Registrarse para pagar</button>
                </form>
            @endif
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

@endsection
</body>
</html>
