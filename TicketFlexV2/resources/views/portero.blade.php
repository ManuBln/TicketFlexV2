<!DOCTYPE html>
<html lang="es">

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
            color: white; 
        }

        h1 {
            font-family:'ticketflex', sans-serif;
            position: absolute;
            top: 20px;
            width: 100%;
            text-align: center;
        }

        #qr-video {
            border: 2px solid white; 
        }

        #result {
            font-family:Arial, Helvetica, sans-serif;
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
<script src="https://cdn.jsdelivr.net/npm/jsqr@1.4.0/dist/jsQR.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('qr-video');
    const resultDiv = document.getElementById('result');
    let context;

    navigator.mediaDevices.getUserMedia({ video: true })
        .then((stream) => {
            video.srcObject = stream;
        })
        .catch((error) => {
            console.error('Error al acceder a la cámara:', error);
        });

    video.onloadedmetadata = () => {
        const canvas = document.createElement('canvas');
        context = canvas.getContext('2d');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;

        let qrCodeRead = false;

        const scanQRCode = () => {
            if (!qrCodeRead) {
                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                const code = jsQR(imageData.data, imageData.width, imageData.height);

                if (code) {
                    resultDiv.textContent = 'Entrada leída:  ' + code.data;
                    console.log(typeof(code.data));
                    qrCodeRead = true; 
                    check(code.data);
                } else {
                    resultDiv.textContent = 'Esperando una entrada...';
                }
            }

            requestAnimationFrame(scanQRCode);
        };

        requestAnimationFrame(scanQRCode);
    };
});

// FETCH
function check(code) {
    console.log("Checking code: " + code);
    fetch('http://127.0.0.1:8000//check.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ id : code}),
    })
    .then(response => response.json())
    .then(data => {
        if (data.respuesta === 'ok') {
            alert('ENTRADA VÁLIDA');
        } else if (data.respuesta === 'no') {
            alert('ENTRADA NO VÁLIDA');
        }
    })
    .catch(error => {
        console.error('Error en la solicitud:', error);
    });
}

</script>
</body>

</html>
