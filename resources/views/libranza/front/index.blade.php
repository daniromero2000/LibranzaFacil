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
        <h2>¿Sabes qué es crédito por libranza?</h2>
        <p>
            El crédito por Libranza es un crédito de consumo que incluye un mecanismo de recaudo, en donde el deudor
            autoriza a su
            empleador o entidad pagadora para que le realice un descuento de su salario o pensión, con el objetivo de
            que esos
            dineros descontados, sean destinados al pago de las cuotas del crédito adquirido.
        </p>
    </section>
</article>

<article class="container-text-benefits">
    <div>
        <h2>Beneficios de nuestro crédito</h2>
    </div>
    <div class="row">
        <div class="col-4">
            <p>
                Estudio y desembolso de crédito para libre inversión, compra de cartera y/o electrodomésticos
            </p>
        </div>
        <div class="col-4">
            <p>Políticas de crédito flexibles para pensionados con reportes en centrales de riesgo</p>
        </div>
        <div class="col-4">
            <p>Atención personalizada y asistida, por nuestro personal a nivel nacional</p>
        </div>
        <div class="col-4">
            <p>Prestamos hasta los 84 años de edad</p>
        </div>
        <div class="col-4">
            <p>Descontamos de tu cuenta de pensión para que no te preocupes por fecha de pagos</p>
        </div>
        <div class="col-4">
            <p>Desde 500 mil hasta 80 millones</p>
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
                <h1>Crédito para pensionados</h1>
                <p>
                    Se parte de nuestra comunidad donde podrás conocer y adquirir todos nuestros producto y servicios
                    (Crédito Libre
                    Inversión, Compra de Cartera y Crédito para Electrodomésticos), brindando un Mundo de Oportunidades
                    para ti.
                </p>
            </section>
        </div>
    </div>
</article>

<section>
    <div class="banner-last">
        <img src="{{asset('modules/libranza/public/img/banners/banner.png')}}" class="img-fluid"
            alt="Con-tu-crédito-por-libranza-ahora-es-más-fácil-unificar-tus-deudas">
        <a href="#">Solicita tu crédito</a>
    </div>
</section>
{{--
<div class=" row-reset row contenedor">
    <div class="col-12 col-sm-12 col-lg-12 col-xl-12 col-reset ">
        <img class="imgBackground img-general"
            src="{{asset('modules/libranza/public/resources/assets/ImagenFondo.jpg')}}"
style="width:100%; margin-top:-1px;" alt="background-libranza-Facil">
<img class="imgBackground img-movil" src="{{asset('modules/libranza/public/resources/assets/Banner-Cel')}}.png"
    style="width:100%; margin-top:-1px" alt="background-libranza-Facil">
</div>
@include('libranza.front.layouts.form_customers')
</div>
@include('libranza.front.layouts.banners.banner_pensionados')
@include('libranza.front.layouts.banners.banner_benefits')
@include('libranza.front.layouts.banners.banner_covenants')
--}}
@endsection