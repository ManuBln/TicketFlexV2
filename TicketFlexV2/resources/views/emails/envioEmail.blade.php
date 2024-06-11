<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Pago</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(300deg, #e620d5, #0c000a, #110111);
            background-size: 180% 180%;
            animation: gradient-animation 30s ease infinite;
        }

        .contenedor {
            background-color: white;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        h1, h2 {
            font-family: 'ticketflex', sans-serif;
            color: black;
            margin-top: 0;
        }

        p {
            color: black;
            font-size: 14px;
            line-height: 1.6;
            margin: 10px 0;
        }

        .gracias {
            font-size: 20px;
            font-weight: bold;
            color: black;
        }

        .detalles {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .detalles h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .detalles p {
            font-size: 14px;
            margin: 5px 0;
        }

        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #666;
        }

        .footer a {
            color: #e620d5;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="contenedor">
    <img src="https://preview.fontget.com/tmp/6665bf261b8bc.png" class="d-block w-100" alt="...">
    <p class="gracias">
        Estimado/a {{ $data['name']}},

        ¡Gracias por su compra en TicketFlex!

    @if(isset($data['articulo_seleccionado']) && is_array($data['articulo_seleccionado']) && count($data['articulo_seleccionado']) > 0)
        <p>Los artículos comprados le llegarán a {{ $data['shipping_address']}} dentro de unos días</p>
    @endif


    {{--<p><strong>Nombre y Apellidos:</strong> {{ $data['name'] ?? 'Nombre no disponible' }}</p>
    <p><strong>Email:</strong> {{ $data['email'] ?? 'Email no disponible' }}</p>
    <p><strong>Dirección de Entrega:</strong> {{ $data['shipping_address'] ?? 'Dirección no disponible' }}</p>
    <p><strong>Nombre del Titular de la Tarjeta:</strong> {{ $data['cardholder_name'] ?? 'Nombre no disponible' }}</p>
    <p><strong>Número de la Tarjeta:</strong> {{ $data['card_number'] ?? 'Número no disponible' }}</p>
    <p><strong>Fecha de Expiración:</strong> {{ $data['expiry_date'] ?? 'Fecha no disponible' }}</p>
    <p><strong>CVV:</strong> {{ $data['cvv'] ?? 'CVV no disponible' }}</p>
    <p><strong>Dirección de Facturación:</strong> {{ $data['billing_address'] ?? 'Dirección no disponible' }}</p>--}}



    @if(isset($data['entrada_seleccionada']) && is_array($data['entrada_seleccionada']) && count($data['entrada_seleccionada']) > 0)
        <h2>Entradas Seleccionadas:</h2>
        @foreach($data['entrada_seleccionada'] as $entrada)
            <p>{{ $entrada['nombre'] ?? 'Nombre no disponible' }} - Precio: {{ $entrada['precio'] ?? 'Precio no disponible' }}$</p>
            <img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=7365483955839374&s=6&e=" alt="imagen qr">
        @endforeach
    @else
        <p>No hay entradas seleccionadas.</p>
    @endif

    @if(isset($data['articulo_seleccionado']) && is_array($data['articulo_seleccionado']) && count($data['articulo_seleccionado']) > 0)
        <h2>Artículos Seleccionados:</h2>
        @foreach($data['articulo_seleccionado'] as $articulo)
            <p>{{ $articulo['nombre'] ?? 'Nombre no disponible' }} - Precio: {{ $articulo['precio'] ?? 'Precio no disponible' }}$</p>
        @endforeach
    @else
        <p>No hay artículos seleccionados.</p>
    @endif
    <div class="footer">
        <p>Si tiene alguna pregunta, no dude en <a href="mailto:support@ticketflex.com">contactarnos</a>.</p>
        <p>&copy; 2024 TicketFlex. Todos los derechos reservados.</p>
    </div>
</div>
</body>
</html>
