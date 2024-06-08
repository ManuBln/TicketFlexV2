<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobador de entradas</title>
    <style>
        @font-face {
            font-family: 'ticketflex';
            src: url('../fuentes/ticketflex.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
            }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: black;
            color: white; /* Para que el texto también sea visible en el fondo negro */
        }

        h1 {
            font-family:'ticketflex', sans-serif;
            position: absolute;
            top: 20px;
            width: 100%;
            text-align: center;
        }

        #qr-video {
            border: 2px solid white; /* Opcional: para agregar un borde blanco al video */
        }

        #result {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Lector QR</h1>
    <video id="qr-video" width="640" height="480" autoplay></video>
    <div id="result">Esperando un código QR...</div>
    <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
    <script src="{{ asset('js\qrportero.js') }}"></script>

</body>

</html>