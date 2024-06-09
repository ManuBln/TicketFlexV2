<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TicketFlex</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        @font-face {
            font-family: 'ticketflex';
            src: url('../fuentes/ticketflex.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        .gradient-background {
            background: linear-gradient(300deg,#e620d5,#0c000a,#110111);
            background-size: 180% 180%;
            animation: gradient-animation 30s ease infinite;
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        h1 {
            font-family: 'ticketflex', sans-serif;
            font-size: 7rem;
            text-align: center;
            color: #ffffff;
            margin-bottom: 20px;
        }
        .bordes {
            position: relative;
        }
        .bordes::after {
            content: "";
            /* Es necesario para que el elemento se visualice */
            position: absolute;
            /* Posiciona el pseudo-elemento en relación al elemento principal */
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border-bottom: 2px solid transparent;
            /* Define el borde inicial (transparente) */
            pointer-events: none;
            /* Evita que el pseudo-elemento interfiera con los eventos del elemento principal */
            transition: border-color 0.3s;
            /* Agrega una transición para un efecto suave al pasar el mouse sobre el elemento */
        }

        .bordes:hover::after {
            border-color: #ffffff;
            /* Cambia el color del borde en hover (en este caso, rojo) */
        }
        .footerNosotros {
            margin-bottom: 20px;
            padding: 20px;
            text-align: center;
        }

        .footerContacto {
            margin-bottom: 20px;
            text-align: center;
            margin-top: 30px;
        }
        .h3Footer {
            margin-top: -20px;
        }
        .pFooter {
            margin-bottom: 20px;
            margin-left: 920px;
            margin-right: 280px;
            font-size: 19px;
            margin-top: 10px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="email"], textarea {
            width: 100%;
            max-width: 400px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button_slide {
            color: #ffffff;
            background-color: #0f0f0f;
            border: 2px solid #ffffff;
            padding: 18px 36px;
            display: inline-block;
            font-family: "Lucida Console", Monaco, monospace;
            font-size: 14px;
            letter-spacing: 1px;
            cursor: pointer;
            box-shadow: inset 0 0 0 0 #ffffff;
            transition: ease-out 0.4s;
        }

        .slide_right:hover {
            box-shadow: inset 400px 0 0 0 #e620d5;
            color: black;
            border: 2px solid #e620d5;
        }

        .fotoFooter{
            float: left;
            margin-left: 320px;
            width: 550px;
            border-radius: 10px;
        }

        .nosotros{
            margin-top: 40px;
        }

        .copyRedes{
            text-align: center;
            display: block;
        }

        .pCopy{
            float: left;
            margin-left: 500px;
            margin-top: 55px;
        }

        .redes1, .redes2, .redes3{
            margin-top: 20px;
        }

        footer{
            border-radius: 10px;
            background-color: #000000;
        }
    </style>
</head>
<body class="gradient-background text-white">
<header class="text-white">
    <div class="container-fluid col-12">
        <h1>TICKETFLEX</h1>
        <!--<h1 class="pt-2 text-white text-center w-100 col-12">Guadalupe Plata</h1>-->
    </div>
    <nav class="navbar navbar-expand-lg   p-5">
        <div class="container">
            <a class="navbar-brand bordes text-white" href="{{route('home')}}" target="_self">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link bordes text-white" href="#About" >Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bordes text-white" href="/tienda" >Tienda</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link bordes text-white">Inicio</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link bordes text-white">Iniciar Sesión</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link bordes text-white">Registrarme</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <section>
        <div id="carouselExampleCaptions" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/Musica.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://assets-global.website-files.com/649327d3c75e7d5a080dfd24/6524731228e0e6cf2c3dc044_20231009T0924-740b7ee2-d6e1-4b58-b0f0-246bf3273896.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Slaughterkyiv21-3916_sv_2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </section>
    <div class="footerNosotros"  id="About"><br><br>
        <h3 class="h3Footer">Sobre Nosotros</h3>
        <div class="nosotros">
            <img class="fotoFooter" src="https://img.freepik.com/free-vector/customer-support-illustration_23-2148904079.jpg">
            <p class="pFooter"><br>
                Bienvenido a TicketFlex, tu nueva solución para la compra de tickets online. Nacimos en 2024 con la idea de facilitar la compra de tickets para eventos de todo tipo.  En TicketFlex, creemos que asistir a tus eventos favoritos debe ser una experiencia sencilla y agradable, por eso hemos creado una plataforma que te permite comprar tus tickets de manera rápida y segura, sin tener que salir de casa.
            </p>
            <p class="pFooter">
                Detrás de TicketFlex hay un equipo apasionado y comprometido que trabaja con los mejores organizadores de eventos para ofrecerte una amplia variedad de opciones para que puedas encontrar el evento perfecto para ti. Ya sea que estés buscando entradas para un concierto, un festival o cualquier otro evento, en TicketFlex encontrarás lo que necesitas.</p>
        </div>
    </div>
    </section>
    <footer>
        <div class="py-4 my-4 border-top " style="width: 100%;">
            <div class="footerContacto">
                <h3 class ="h3Footer">Contacta con Nosotros</h3><br>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Tu correo electrónico" required>
                    <textarea name="mensaje" placeholder="Cuéntanos tu problema ..." rows="4" required></textarea><br>
                    <button class="button_slide slide_right" type="submit">Enviar</button>
                </form>
            </div>
        </div>
        <div class="py-1 my-0 border-top" style="width: 100%;">
            <div class="copyRedes">
                <div class="copyright">
                    <p class="pCopy">&copy; 2024 TicketFlex</p>
                </div>
            </div class="redes">
            <img class="redes1" src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/instagram-white-icon.png" style="width: 87px; margin-left: 620px; padding: 20px;">
            <img class="redes2" src="https://i0.wp.com/eltallerdehector.com/wp-content/uploads/2022/10/whatsapp-logo-png-white.png?fit=512%2C512&ssl=1" style="width: 50px;">
            <img class="redes3" src="https://images.freeimages.com/image/large-previews/9fe/x-twitter-light-grey-logo-5694251.png?fmt=webp&w=500" style="width:75px;">
        </div>
        </div>
        </div>
    </footer>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
