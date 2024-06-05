<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento HTML Básico</title>
    <link rel="stylesheet" href="{{ asset('css/tienda.css') }}">
</head>

<body>
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


<div class="container cesta-container">
    <h2>Contenido de la Cesta de Eventos</h2>
    @if(empty($cestaEvento))
        <p>No hay eventos en la cesta.</p>
    @else
        @foreach($cestaEvento as $evento)
            <div class="cesta-item">{{ $evento }}</div>
        @endforeach
    @endif

    <h2>Contenido de la Cesta de Artículos</h2>
    @if(empty($cestaArticulo))
        <p>No hay artículos en la cesta.</p>
    @else
        @foreach($cestaArticulo as $articulo)
            <div class="cesta-item">{{ $articulo }}</div>
        @endforeach
    @endif

    @if(!empty($cestaEvento) || !empty($cestaArticulo))
        <form action="{{ route('pago') }}" method="get">
            @csrf
            <button type="submit">Pagar</button>
        </form>
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

</body>
</html>
