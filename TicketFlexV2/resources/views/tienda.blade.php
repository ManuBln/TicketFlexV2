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



        .alert {
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
    </style>
</head>

<body>
    <div class="container">
        <h1>Entradas</h1>

        <div style="display: flex;">

            @foreach($eventos as $evento)
            <div class="container" style="display: flex;">

                <div class="card">
                    <img src="{{ $evento->imagen }}" alt="{{ $evento->nombre }}">
                    <div class="card-content">
                        <div class="card-title">{{ $evento->nombre_evento }}</div>
                        <div class="card-price">Precio:{{ $evento->precio }}$</div>
                        <div class="card-date">Fecha y Hora: {{ $evento->fecha_hora }}</div>
                        <div class="card-date">Descripción: {{ $evento->descripcion }}</div>
                        <div class="card-capacity">Aforo: {{ $evento->aforo }}</div>
                        <form action="{{ route('cestaEntrada', ['evento' => $evento->nombre_evento]) }}" method="POST">
                            @csrf
                            <button type="submit">Añadir a la cesta</button>
                        </form>
                    </div>
                </div>

            </div>
            @endforeach

            @if(session('mensaje'))
            <div id="mensaje" class="alert">
                {{ session('mensaje') }}
            </div>
            @endif
        </div>



    </div>


    <div class="container">
        <h1>Merch</h1>

        @foreach($articulos as $articulo)
        <div class="container" style="display: flex;">
           
            <div class="card">
                <div class="card-content">
                    <div class="card-title">{{ $articulo->nombre }}</div>
                    <div class="card-price">{{ $articulo->precio }}</div>
                    <div class="card-date">Descripcion: {{ $articulo->descripcion }}</div>
                    <div class="card-capacity">Unidades: {{ $articulo->unidades }}</div>
                    <form action="{{ route('cestaEntrada', ['evento' => $evento->nombre_evento]) }}" method="POST">
                        @csrf
                        <button type="submit">Añadir a la cesta</button>
                    </form>
                </div>
            </div>
           
        </div>
        @endforeach

        @if(session('mensaje'))
        <div id="mensaje" class="alert">
            {{ session('mensaje') }}
        </div>
        @endif

    </div>

</body>

<script>
    // Esperar 2 segundos y luego ocultar el mensaje
    setTimeout(function() {
        var mensaje = document.getElementById('mensaje');
        mensaje.style.display = 'none';
    }, 3000);
</script>

</html>