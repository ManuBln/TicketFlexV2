<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TicketFlex</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <style>
                  .card-section{
                    display: flex;
                    flex-direction: column;
                    flex-wrap: nowrap;
                    justify-content: center;
                    align-items: center;
                    align-content: space-between;
                  }

                .card {
                    position: relative;
                    width: 60%;
                    height: 0px;
                    background-size: cover;
                    background-position: center;
                    border-radius: 20px 20px 20px;
                    overflow: hidden;
                    margin-bottom: 10px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    display: flex;
                    align-items: flex-end;
                    transition: transform 0.3s, box-shadow 0.3s;
                  }

                .card:hover {
                    transform: translateY(-10px);
                    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
                }

                /* Estilos para el contenido de la carta */
                .card-content {
                    background: rgba(0, 0, 0, 0.6);
                    color: #fff;
                    width: 100%;
                    padding: 20px;
                    border-radius: 0 0 15px 15px;
                    box-sizing: border-box;
                }

                .card-title {
                    font-size: 24px;
                    font-weight: bold;
                    margin-bottom: 10px;
                }

                .card-details {
                    font-size: 16px;
                    margin-bottom: 5px;
                }

                .card-price {
                    font-size: 20px;
                    font-weight: bold;
                    margin: 10px 0;
                }

                .buy-button {
                    display: inline-block;
                    background: #6f4a95;
                    color: #fff;
                    padding: 10px 20px;
                    text-align: center;
                    border-radius: 5px;
                    text-decoration: none;
                    font-size: 16px;
                    transition: background 0.3s;
                }

                .buy-button:hover {
                    background: #e64a19;
                }
                    
                #drops-section {
                    padding: 20px;
                    position: relative;
                    text-align: center;
                }

                .section-title {
                    text-align: center;
                    font-size: 2rem;
                    color: #fff;
                }

                .section-description {
                    font-size: 1.2rem;
                    text-align: left;
                    max-width: 800px;
                    margin: 20px auto;
                    color: white;
                }

                .drops-container {
                    display: flex;
                    justify-content: space-around;
                    flex-wrap: wrap;
                    gap: 20px;
                }

                .drop {
                    background: linear-gradient(145deg, #1e1e1e, #121212);
                    border-radius: 15px;
                    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
                    overflow: hidden;
                    position: relative;
                    width: 45%;
                    max-width: 500px;
                    transition: transform 0.3s ease;
                }

                .drop:hover {
                    transform: scale(1.05);
                }

                .drop-content {
                    padding: 20px;
                    text-align: center;
                }

                .drop h2 {
                    font-size: 1.8rem;
                    color: #fff;
                }

                .drop p {
                    font-size: 1.2rem;
                    margin: 20px 0;
                    color: #fff;
                }
                .drop-image {
                    width: 100%;
                    height: 200px;
                    background-size: cover;
                    background-position: center;
                    filter: blur(8px);
                    transition: filter 0.3s;
                }

                .drop h2 {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    margin: 0;
                    background-color: rgba(0, 0, 0, 0.5);
                    padding: 10px;
                    border-radius: 8px;
                    transition: opacity 0.3s;
                }

                .drop-description {
                    display: none;
                }

                .drop.active .drop-image {
                    filter: none;
                }

                .drop.active h2 {
                    opacity: 0;
                }

                .drop.active .drop-description,
                .drop.active .buy-button {
                    display: block;
                }

    </style>
  </head>
  <body>
  @extends('layouts.app')

@section('content')
<main>
  <section>
    <div class="card-section">
        <div class="card" style="background-image: url('{{ asset('images/entrada1.jpg') }}');">
            <div class="card-content">
                <h2 class="card-title">Red Hot Chili Peppers</h2>
                <p class="card-details">Madrid: Mad Cool Festival</p>
                <p class="card-details">Fecha y Hora: 24/06/2024, 21:00</p>
                <p class="card-price">Precio: 80€</p>
                <a href="#" class="buy-button">Comprar</a>
            </div>
        </div>
        <div class="card" style="background-image: url('images/entrada2.jpg');">
            <div class="card-content">
                <h2 class="card-title">Los Chunguitos</h2>
                <p class="card-details">Sevilla: Sala X</p>
                <p class="card-details">Fecha y Hora: 21/06/2024, 16:00</p>
                <p class="card-price">Precio: 15€</p>
                <a href="#" class="buy-button">Comprar</a>
            </div>
        </div>
        <div class="card" style="background-image: url('images/entrada3.webp');">
            <div class="card-content">
                <h2 class="card-title">Jarfaiter</h2>
                <p class="card-details">Granada: La Tren</p>
                <p class="card-details">Fecha y Hora: 7/06/2024, 21:30</p>
                <p class="card-price">Precio: 20€</p>
                <a href="#" class="buy-button">Comprar</a>
            </div>
        </div>
        <div class="card" style="background-image: url('https://i.ytimg.com/vi/sEKfc3VjJlQ/maxresdefault.jpg');">
            <div class="card-content">
                <h2 class="card-title">Twenty One Pilots</h2>
                <p class="card-details">Barcelona: Primavera Sound</p>
                <p class="card-details">Fecha y Hora: 8/07/2024, 23:00</p>
                <p class="card-price">Precio: 40€</p>
                <a href="#" class="buy-button">Comprar</a>
            </div>
        </div>
        <!-- Añade más cartas aquí según sea necesario -->
    </div>
</section>
    <section id="drops-section">
        <h1 class="section-title">Drops Limitados</h1>
        <p class="section-description">Los drops limitados de TicketFlex ofrecen oportunidades para que los usuarios adquieran compras limitadas en cantidad y tiempo. ¡No te pierdas estas ofertas exclusivas!</p>
        <div class="drops-container">
            <div class="drop" id="drop1">
                <div class="drop-content">
                    <div class="drop-image" style="background-image: url('https://www.zentralpamplona.com/sites/default/files/styles/cabecera_webp/public/2023-09/JARFAITERWEB.jpg.webp?itok=3EnkgfhT');"></div>
                    <h2>Un cabezazo de Jarfaiter</h2>
                    <p class="drop-description">Participa en el sorteo de un cabezazo propinado por el rapero a gusto del consumidor</p>
                    <button class="buy-button">Participa</button>
                </div>
            </div>
            <div class="drop" id="drop2">
                <div class="drop-content">
                    <div class="drop-image" style="background-image: url('https://pbs.twimg.com/profile_images/1393555179975413762/yiF-7aRP_400x400.jpg');"></div>
                    <h2>Barbacoa con el Panterilla</h2>
                    <p class="drop-description">Un día en exclusiva acompañado del integrante de Guadalupe Plata al calor de las brasas, choricillos no incluidos</p>
                    <button class="buy-button">Participa</button>
                </div>
            </div>
        </div>
    </section>
</main>
    
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.buy-button');

});

document.addEventListener('DOMContentLoaded', () => {
    const drops = document.querySelectorAll('.drop');

    drops.forEach(drop => {
        drop.addEventListener('click', () => {
            drop.classList.toggle('active');
        });
    });
});
</script>
@endsection
  </body>
</html>