<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compra de Entradas</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    html{
  background: rgb(3,0,46);
  background: radial-gradient(circle, rgba(3,0,46,1) 0%, rgba(2,2,88,1) 62%, rgba(0,141,170,1) 100%);
}
.carousel {
  display: flex;
  margin-bottom: 20px;
}

.concert {
  background-color: white;
  margin-top: 8%;
  margin-left: 2.5%;
  flex: 0 0 auto;
  margin-right: 20px;
  border: 1px solid black;
  border-radius: 5px;
  padding: 10px;
  text-align: center;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.9);
  transition: transform 0.3s ease;
  width: 380px;
}

.concert img {
  width: 100%;
  border-radius: 5px;
  margin-bottom: 10px;
}

.concert h3 {
  margin: 0;
  font-size: 18px;
}

.concert p {
  margin: 5px 0;
  color: rgb(102, 102, 102);
}

.concert button {
  background-color: rgb(0, 123, 255);
  color: rgb(255, 255, 255);
  border: none;
  border-radius: 3px;
  padding: 5px 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.concert button:hover {
  background-color: rgb(0, 86, 179);
}

h2 {
  margin-left: 45%;
  color: white;
  position: absolute;
}

.cart {
  position: fixed;
  top: 0px;
  right: 137px;
  background-color: rgb(252, 92, 12);
  padding: 10px;
  display: flex;
  align-items: center;
  width: 45px;
  height: 41px;
}

.cart-icon {
  font-size: 25px;
  margin-right: 3px;
  color: white;
}

.cart-counter {
  border-radius: 50%;
  padding: 5px 8px;
  font-size: 16px;
  margin-left: 30px;
  margin-top: 20px;
  color: white;
  position: absolute;
}

.pay-button {
  margin-left: 10px;
  padding: 8px 16px;
  background-color: transparent;
  color: white;
  border: 1px solid white;
  border-radius: 5px;
  cursor: pointer;
  width: 100px;
  transition: 0.5s;
}

.added-to-cart {
  display: none;
  position: absolute;
  top: 0px;
  right: -138px;
  background-color: rgb(76, 175, 80);
  color: white;
  padding: 5px 10px;
  font-size: 16px;
}

.pay-button:hover {
  background-color: rgb(55, 129, 58);
}
  </style>
</head>
<body>

<div class="ticket-booking">
  <h2>Compra de Merch</h2>
  <div class="carousel">
    <div class="concert">
      <img src="https://images.pexels.com/photos/435840/pexels-photo-435840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Concert Image">
      <h3>Concierto 1</h3>
      <p>10 de junio de 2024</p>
      <p>Lugar 1</p>
      <button class="add-to-cart">Comprar Entrada</button>
    </div>
    <div class="concert">
      <img src="https://images.pexels.com/photos/7715613/pexels-photo-7715613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Concert Image">
      <h3>Concierto 2</h3>
      <p>15 de junio de 2024</p>
      <p>Lugar 2</p>
      <button class="add-to-cart">Comprar Entrada</button>
    </div>
    <div class="concert">
      <img src="https://images.pexels.com/photos/4039987/pexels-photo-4039987.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Concert Image">
      <h3>Concierto 3</h3>
      <p>20 de junio de 2024</p>
      <p>Lugar 3</p>
      <button class="add-to-cart">Comprar Entrada</button>
    </div>
    <div class="concert">
      <img src="https://images.pexels.com/photos/11963135/pexels-photo-11963135.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Concert Image">
      <h3>Concierto 4</h3>
      <p>25 de junio de 2024</p>
      <p>Lugar 4</p>
      <button class="add-to-cart">Comprar Entrada</button>
    </div>
  </div>
</div>
<div class="cart" id="cart">
  <i class="fas fa-shopping-cart cart-icon"></i>
  <span class="cart-counter" id="cart-counter">0</span>
  <div class="added-to-cart" id="added-to-cart">
    Añadido a la cesta
    <button class="pay-button" id="pay-button">Pagar</button>
  </div>
</div>


<script>
  function addToCart(event) {
    const cartCounter = document.getElementById('cart-counter');
    cartCounter.textContent = parseInt(cartCounter.textContent) + 1;

    const addedToCart = document.getElementById('added-to-cart');
    addedToCart.style.display = 'block';

    const payButton = document.getElementById('pay-button');
    payButton.style.display = 'block';
  }
  const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
    button.addEventListener('click', addToCart);
  });
</script>

</body>
</html>