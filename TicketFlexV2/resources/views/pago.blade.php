<!-- resources/views/pago.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .payment-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .payment-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .payment-form .form-group {
            margin-bottom: 15px;
        }

        .payment-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .payment-form input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .payment-form .form-group-inline {
            display: flex;
            justify-content: space-between;
        }

        .payment-form .form-group-inline .form-group {
            flex: 1;
            margin-right: 10px;
        }

        .payment-form .form-group-inline .form-group:last-child {
            margin-right: 0;
        }

        .payment-form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .payment-form button:hover {
            background-color: #45a049;
        }
    </style>
</head>


<body>
<div class="payment-form">
    <h2>Formulario de Pago</h2>
    <h2>Contenido de la Cesta</h2>
    @if(!empty($cestaEvento))
        <h3>Entradas</h3>
        @foreach($cestaEvento as $evento)
            <p>{{ $evento }}</p>
        @endforeach
    @endif

    @if(!empty($cestaArticulo))
        <h3>Artículos</h3>
        @foreach($cestaArticulo as $articulo)
            <p>{{ $articulo }}</p>
        @endforeach
    @endif
    <form action="{{ route('procesar-pago') }}" method="POST">
        @csrf
        <!--Nombre que se mostrará en la entrada-->
        <div class="form-group">
            <label for="name">Nombre y apellidos</label>
            <input type="text" id="name" name="name" required>
        </div>

        <!-- Dirección de correo electrónico -->
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- Dirección de Entrega -->
        <div class="form-group">
            <label for="shipping_address">Dirección de Entrega</label>
            <input type="text" id="shipping_address" name="shipping_address" required>
        </div>
        <!-- Nombre del Titular de la Tarjeta -->
        <div class="form-group">
            <label for="cardholder-name">Nombre del Titular de la Tarjeta</label>
            <input type="text" id="cardholder-name" name="cardholder_name" required>
        </div>

        <!-- Número de la Tarjeta -->
        <div class="form-group">
            <label for="card-number">Número de la Tarjeta</label>
            <input type="text" id="card-number" name="card_number" required>
        </div>

        <!-- Fecha de Expiración y CVV -->
        <div class="form-group-inline">
            <div class="form-group">
                <label for="expiry-date">Fecha de Expiración</label>
                <input type="text" id="expiry-date" name="expiry_date" placeholder="MM/AA" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
        </div>

        <!-- Dirección de Facturación -->
        <div class="form-group">
            <label for="billing-address">Dirección de Facturación</label>
            <input type="text" id="billing-address" name="billing_address" required>
        </div>

        <!-- Botón de Envío -->
        <button type="submit">Pagar</button>
    </form>
</div>
</body>

</html>
