document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('qr-video');
    const resultDiv = document.getElementById('result');
    let context;

    // Permiso de cámara
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
                    resultDiv.textContent = 'Código QR detectado: ' + code.data;
                    qrCodeRead = true;  // Detener escaneo adicional si se ha detectado un código QR
                    check(code.data);
                } else {
                    resultDiv.textContent = 'Esperando un código QR...';
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
    fetch('http://localhost/check.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'code=' + encodeURIComponent(code),
    })
    .then(response => response.json())
    .then(data => {
        if (data.respuesta === 'ok') {
            alert('Código QR válido');
        } else if (data.respuesta === 'no') {
            alert('Código QR inválido');
        }
    })
    .catch(error => {
        console.error('Error en la solicitud:', error);
    });
}
