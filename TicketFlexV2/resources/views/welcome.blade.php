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
  .titulo {
    width: 40%;
    margin: auto;
    display: flex;
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
        </style>
    </head>
    <body class="bg-black text-white">
    <header class="text-white">
        <div class="container-fluid col-12">
        <img class="titulo" src="{{ asset('images/logo.png') }}" alt="logo2">
            <!--<h1 class="pt-2 text-white text-center w-100 col-12">Guadalupe Plata</h1>-->
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark  p-5">
            <div class="container">
                <a class="navbar-brand bordes" href="{{route('home')}}" target="_self">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link bordes" href="#About" >About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bordes" href="/shop" >Shop</a>
                        </li>
                        @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a href="{{ url('/home') }}" class="nav-link bordes">Home</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link bordes">Iniciar Sesión</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="nav-link bordes">Registrarme</a>
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
        <section id="About">
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
                        <img src="https://fotografias.antena3.com/clipping/cmsimages01/2023/07/18/460974AC-1C0A-48FA-8582-EF2683B236BD/plantilla-entrada-festival-verano_98.jpg?crop=3000,1688,x0,y158&width=1900&height=1069&optimize=low&format=webply" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <!--1417x921 fotos-->
                            <h5>Guadalupe plata</h5>
                            <p>Rising up from the town of Úbeda, deep in Andalusia near Jaén, Guadalupe Plata have
                                become legends for their provocative, deeply affecting blues and boogie music, creating
                                a psychedelic landscape that is as darkly surrealistic as it is infectious.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets-global.website-files.com/649327d3c75e7d5a080dfd24/6524731228e0e6cf2c3dc044_20231009T0924-740b7ee2-d6e1-4b58-b0f0-246bf3273896.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Their music is the result of a chemical experiment that mixes the raw edges of Hound Dog
                                Taylor, Skip James, and John Lee Hooker with the insanity of Screamin’ Jay Hawkins, the
                                winding guitars of Elmore James and Ennio Morricone, and the post-modern madness of Jon
                                Spencer, The Fall, Captain Beefheart, the Gun Club, and Nick Cave.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Slaughterkyiv21-3916_sv_2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p>In 2013 they began their trophy collection, picking up the coveted Impala Award for Best
                                European Rock Band, as well as Artist of the Year, Best Live Act, and Best Rock Album
                                from the Independent Music Awards, as well as Best Modern Music from Critical Eye. Their
                                music has seeped into the American consciousness on such television shows as Showtime’s
                                Shameless and HBOs How to Make it in America.</p>
                        </div>
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
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center">
                        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                        </a>
                            <span class="mb-3 mb-md-0 text-white">© 2022 Company, Inc</span>
                    </div>
                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-white" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                        <li class="ms-3"><a class="text-white" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                        <li class="ms-3"><a class="text-white" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                    </ul>
            </footer>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
