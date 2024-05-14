var dato = document.getElementById("dato").textContent;

// Generar el código QR con qrcode.js
var qrCode = new QRCode(document.getElementById("codigoQR"), {
    text: dato,
    width: 128,
    height: 128,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});