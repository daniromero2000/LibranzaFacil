@extends('libranza.front.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('modules/libranza/public/css/about/app.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('modules/libranza/public/css/home/app.min.css') }}" />
@endsection
@section('tags')
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-164894259-1', {
            'page_title': 'nosotros',
            'page_path': "/about-us"
        });

    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-781153823', {
            'page_title': 'nosotros',
            'page_path': "/about-us"
        });

    </script>
@endsection

@section('content')

    <img class="imgBanner" src="{{ asset('modules/libranza/public/img/banners/man-drinking-coffee-outdoors.png') }}">

    <div class="row mx-0 mb-3">
        <div class="col-md-12">

            <h5><span class="resaltado">Somos tu mejor opción en </span><span class="azul">crédito por libranza</span></h5>
            <br>

            <p class="text-central"> <span class="azul-text">Fundada hace 51 años, </span>Oportunidades Libranza hace parte
                del grupo empresarial Lagobo. Una de las <br>
                empresas líderes en la comercialización de electrodomésticos en Colombia, <br>
                ofreciendo líneas de crédito de consumo, libranza y empresarial.</p>

                {{-- <p class="text-central"> <span class="azul-text">El </span><span
                class="rojo">crédito por Libranza </span>es un crédito de consumo que incluye un mecanismo de recaudo,
                en donde el deudor autoriza <br>
                a su empleador o entidad pagadora para que le realice un descuento de su salario o pensión, con el objetivo
                de que <br>
                esos dineros descontados, sean destinados al pago de las cuotas del crédito adquirido</p> --}}
            
            <p class="text-central"><span class="rojo">Más de 50 años de experiencia</span> otorgando crédito a los
                Colombianos <br><br>
                Nuestra línea de crédito por libranza se encuentra regulada por la ley 1527 de 2012,<br>
                contamos con código vigente en RUNEOL número 80013534200002155<br><br>
                Somos una entidad vigilada por la Superintendencias de sociedades y la Superintendencia de Industria y
                Comercio<br>
            </p>
        </div>
    </div>
    <br>

    <article class="container-text-benefits">
        <div>
            <h2><b>Fortalezas</b></h2>
        </div>
        <div class="row justify-content-center">

            <div class="col-4">
                <div class="container-icon-cards">
                    <img class="card-img-top vectorial-50"
                        src="{{ asset('modules/libranza/public/img/icons/50-vectorial.png') }}" alt="...">
                    <p class="card-text"><span class="azul-fortalezas">50 Años de experiencia</span><br>en el mercado.</p>
                </div>
            </div>

            <div class="col-4">
                <div class="container-icon-cards">
                    <img class="card-img-top manito"
                        src="{{ asset('modules/libranza/public/img/icons/manito-vectorial.png') }}" alt="...">
                    <p class="card-text"><span class="azul-fortalezas">Excelente reputación</span> en el
                        sector<br>Financiero y proveedores.</p>
                </div>
            </div>

            <div class="col-4">
                <div class="container-icon-cards">
                    <img class="card-img-top medalla"
                        src="{{ asset('modules/libranza/public/img/icons/medalla-vectorial.png') }}" alt="...">
                    <p class="card-text">Originación de crédito con procesos <br>homologados con el sector financiero y
                        <br>con adecuados <span class="azul-fortalezas">estándares de calidad,</span><br> que se traducen en
                        indicadores de cartera controlados.</p>
                </div>
            </div>

            <div class="col-4">
                <div class="container-icon-cards">
                    <img class="card-img-top people" src="{{ asset('modules/libranza/public/img/icons/people.png') }}"
                        alt="...">
                    <p class="card-text"><span class="azul-fortalezas">Gerencia altamente involucrada</span> en
                        el<br>desarrollo de los clientes y el <br> crecimiento de la empresa</p>
                </div>
            </div>

            <div class="col-4">
                <div class="container-icon-cards">
                    <img class="card-img-top presencia" src="{{ asset('modules/libranza/public/img/icons/presencia.png') }}"
                        alt="...">
                    <p class="card-text"> Presencia y cobertura en todo el <br><span class="azul-fortalezas">territorio
                            nacional.</span></p>
                </div>
            </div>
    </article>

@endsection
