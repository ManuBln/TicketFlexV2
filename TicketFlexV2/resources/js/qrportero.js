document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('qr-video');
    const resultDiv = document.getElementById('result');
    let context;

    //permiso de camara
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
        video.width = video.videoWidth;
        video.height = video.videoHeight;
        canvas.width = video.width;
        canvas.height = video.height;

        context.canvas.getContext('2d', { willReadFrequently: true });
        let qrCodeRead = false;
        const scanQRCode = () => {
            if(!qrCodeRead){
                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                const code = jsQR(imageData.data, imageData.width, imageData.height);
    
                if (code) {
                    resultDiv.textContent = 'Código QR detectado: ' + code.data;
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

//FETCH
function check(code){
    console.log("Checking code: "+code);    
    fetch('http://localhost/check.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'code='+code,
    }
    )
    .then(response => response.json())
    .then(data => {
        if (data.respuesta==='ok'){
            alert('Código QR válido');
        }else if(data.respuesta==='no'){
            alert('Código QR inválido');
        }
    });  
}