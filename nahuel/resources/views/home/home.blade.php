@extends('layouts.master')

@section('content')

<!-- Header -->
<header class="bg-purple text-white">
    <div class="container text-center">
        <h2>Bienvenidos a El Nahue</h2>
        <p class="lead">¡La mejor ropa de Argentina!</p>
    </div>
</header>

<!-- Cuerpo principal -->
<section class="bg-home">
    <div class="container">
        <div class="row">
            <!-- carrusel -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="#" alt="">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="#" alt="">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="#" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>   
            </div>
            <div class="col-lg-8 mx-auto my-0">
                <h2>¿Quiénes somos?</h2>
                <p class="lead">Somos una empresa de ropa creado por un pibe que no sabe decir la letra R, asique imaginate lo que es la ropa XD</p>
                <ul>
                    <li>Tenemos mas de 10290198309281013 productos distintos</li>
                    <li>Mas de un millón de Argentinos ya compraron por aca ¿Qué esperas para comprar la tuya?</li>
                    <li>¡Busca el producto que mas te guste y compralo al mejor precio!</li>
                </ul>

                <br>
                    <h5>Si te quedó alguna duda consultá nuestra sección de  <a href="#">Preguntas frecuentes</a>.</h5>
            </div>
        </div>
    </div> 
</section>


    
@endsection
