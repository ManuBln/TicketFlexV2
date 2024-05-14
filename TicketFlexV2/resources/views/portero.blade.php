<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobador de entradas</title>
</head>

<body>
    <h1>Lector de Códigos QR</h1>
    <video id="qr-video" width="640" height="480" autoplay></video>
    <div id="result">Esperando un código QR...</div>
    <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
    <script src="{{ asset('js\qrportero.js') }}"></script>

</body>

</html>