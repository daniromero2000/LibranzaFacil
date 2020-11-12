@extends('libranza.front.app')

@section('content')
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
            <img src="{{asset('modules/libranza/public/img/sliders/slider-1.png')}}" class="d-block w-100"
                alt="¿Reportado?-aqui-creemos-en-las-segundas-oportunidades">
            <a href="#" class="button-carousel">Solicita tu crédito</a>
        </div>
        <div class="carousel-item" data-interval="10000">
            <img src="{{asset('modules/libranza/public/img/sliders/slider-1.png')}}" class="d-block w-100"
                alt="¿Reportado?-aqui-creemos-en-las-segundas-oportunidades">
        </div>
        <div class="carousel-item" data-interval="10000">
            <img src="{{asset('modules/libranza/public/img/sliders/slider-1.png')}}" class="d-block w-100"
                alt="¿Reportado?-aqui-creemos-en-las-segundas-oportunidades">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <div class="container-icons-carousel">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </div>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <div class="container-icons-carousel">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </div>
    </a>
</div>

<article class="main-text-container">
    <section>
        <h2>¿Sabes qué es <b>crédito por libranza</b> ?</h2>
        <p>
            El <span>crédito por Libranza</span> es un crédito de consumo que incluye un mecanismo de recaudo, en donde
            el deudor
            autoriza a su
            empleador o entidad pagadora para que le realice un descuento de su salario o pensión, con el objetivo de
            que esos
            dineros descontados, sean destinados al pago de las cuotas del crédito adquirido.
        </p>
    </section>
</article>

<article class="container-text-benefits">
    <div>
        <h2>Beneficios de nuestro <b>crédito</b></h2>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="container-icon-cards">
                <img src="{{asset('modules/libranza/public/img/icons/price.png')}}" alt="" class="icon-card">
                <p>
                    Estudio y desembolso de crédito para <b>libre inversión, compra de cartera</b> y/o
                    <b>electrodomésticos</b>
                </p>
            </div>
        </div>
        <div class="col-4">
            <div class="container-icon-cards">
                <img src="{{asset('modules/libranza/public/img/icons/cards.png')}}" alt="" class="icon-card">
                <p>Políticas de <b>crédito flexibles para pensionados</b> con reportes en centrales de riesgo</p>
            </div>

        </div>
        <div class="col-4">
            <div class="container-icon-cards">
                <img src="{{asset('modules/libranza/public/img/icons/call.png')}}" alt="" class="icon-card">
                <p><b>Atención personalizada y asistida</b>, por nuestro personal a nivel nacional</p>
            </div>
        </div>
        <div class="col-4">
            <div class="container-icon-cards">

                <img src="{{asset('modules/libranza/public/img/icons/age.png')}}" alt="" class="icon-card">
                <p>Prestamos hasta los <b>84 años de edad</b></p>
            </div>
        </div>
        <div class="col-4">
            <div class="container-icon-cards">

                <img src="{{asset('modules/libranza/public/img/icons/like.png')}}" alt="" class="icon-card">
                <p>Descontamos de tu cuenta de pensión para que no te preocupes por fecha de pagos</p>
            </div>
        </div>
        <div class="col-4">
            <div class="container-icon-cards">

                <img src="{{asset('modules/libranza/public/img/icons/cash.png')}}" alt="" class="icon-card">
                <p>Desde <b>500 mil</b> hasta <b>80 millones</b></p>
            </div>
        </div>
</article>

<article class="video-container">
    <div class="row mx-0">
        <div class="col-info-video">
            <img src="{{asset('modules/libranza/public/img/banners/banner-2.png')}}" class="img-fluid"
                alt="Con-tu-crédito-por-libranza-ahora-es-más-fácil-unificar-tus-deudas">
            <img src="{{asset('modules/libranza/public/img/icons/play.png')}}" alt="" class="play">
        </div>
        <div class="col-info">
            <section>
                <h1>Crédito para <b>pensionados</b></h1>
                <p>
                    Se parte de nuestra comunidad donde podrás conocer y adquirir todos nuestros producto y servicios
                    <b>(Crédito Libre
                        Inversión, Compra de Cartera y Crédito para Electrodomésticos)</b>, brindando un Mundo de
                    Oportunidades
                    para ti.
                </p>
                <a href="#">Solicita tu crédito</a>
            </section>
        </div>
    </div>
</article>

<section>
    <div class="banner-last">
        <img src="{{asset('modules/libranza/public/img/banners/banner.png')}}"
            alt="Con-tu-crédito-por-libranza-ahora-es-más-fácil-unificar-tus-deudas">
        <a href="#">Solicita tu crédito</a>
    </div>
</section>


<article>
    <section class="container-covenants">
        <h2>Principales convenios</h2>

        <div class="row justify-content-center">
            <div>Colpensiones</div>
            <div>BBVA</div>
            <div>AXA COLPATRIA</div>
            <div>Colfondos</div>
            <div>Porvenir</div>
            <div>Protección</div>
            <div>MAPFRE</div>
            <div>POSITIVA</div>
            <div>Sura</div>
            <div>Seguros <br> Bolívar</div>
            <div>Fiduprevisora</div>
            <div>Seguros alfa s.a</div>
            <div>Global Seguros</div>
            <div>FOPEP</div>
        </div>
    </section>
</article>
{{--
@include('libranza.front.layouts.banners.banner_covenants')
--}}
@endsection