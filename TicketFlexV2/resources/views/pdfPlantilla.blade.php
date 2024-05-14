<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de Concierto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            margin-bottom: 10px;
        }
        .ticket-details {
            border-top: 1px solid #ccc;
            margin-top: 20px;
            padding-top: 20px;
        }
        .qr-code {
            text-align: center;
        }
        .qr-code img {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Entrada de Concierto</h1>
        <div class="ticket-details">
            <p><strong>Nombre del Concierto:</strong> Concierto de Ejemplo</p>
            <p><strong>Fecha:</strong> 12 de mayo de 2024</p>
            <p><strong>Ubicación:</strong> Teatro de Ejemplo</p>
            <p><strong>{{$name}}</p>
            <p>{{$email}}</p>
        </div>
      
    </div>
</body>
</html>
