@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center text-white bg-black">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido a TicketFlex, ') . Auth::user()->name . '!' }}       
                </div>
            </div>
        </div>
    </div>
</div>
<main class="mt-2">
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
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets-global.website-files.com/649327d3c75e7d5a080dfd24/6524731228e0e6cf2c3dc044_20231009T0924-740b7ee2-d6e1-4b58-b0f0-246bf3273896.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                           
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Slaughterkyiv21-3916_sv_2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                    
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
                            <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
                    </div>
                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-white" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                        <li class="ms-3"><a class="text-white" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                        <li class="ms-3"><a class="text-white" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                    </ul>
            </footer>
        </main>
@endsection




