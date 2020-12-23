@extends('libranza.front.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('modules/libranza/public/css/information/app.min.css') }}" />
    <style>
        .contianer-text-information h2 {
            margin-top: 1%;
        }

        .contianer-text-information h3 {
            margin-top: 1%
        }

        .contianer-text-information p {
            padding: 1vw;
            font-size: 1.1vw
        }

        .logo-pdf {
            width: 7%;
            padding: 0.6%;
        }

        .text-pdf {
            padding: 0.6%;
            width: 93%
        }

        .text-pdf a {
            margin-left: 1%;
        }

        .mb-reset-3,
        .my-reset-3 {
            margin-bottom: 2% !important;
        }

        .card-body-reset {
            flex: 1 1 auto;
            padding: 2%;
        }

        .container-indicadores {
            margin-top: 4%;
        }

        .btn {
            padding: 0.675% 1.05% !important;
        }

        section {
            margin-top: 3%
        }

        @media (min-width: 481px) and (max-width: 767px) {
            .contianer-text-information p {
                padding: 2.6vw;
                font-size: 2.2vw
            }

            .text-pdf a {
                font-size: 1.8vw;
            }
        }

        @media (min-width: 310px) and (max-width: 480px) {
            .contianer-text-information p {
                padding-left: 3vw;
                padding-right: 3px;
                font-size: 2.9vw
            }

            .text-pdf a {
                font-size: 2.6vw;
            }
        }

    </style>
@endsection
@section('tags')
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-164894259-1', {
            'page_title': 'REGLAMENTO PRODUCTO Y CONDICIONES DE CRÉDITO',
            'page_path': "/reglamento-producto-condiciones-credito"
        });

    </script>
@endsection
@section('content')
    <article class="contianer-text-information">
        <h1>REGLAMENTO PRODUCTO Y CONDICIONES DE CRÉDITO</h1>
        @if (isset($categories))
            <div class="row container-indicadores w-100 mx-0">
                <div style=" width: 80%; margin:auto; ">
                    @foreach ($categories as $key => $item)
                        <div class="card-body-reset">
                            @foreach ($item as $document)
                                <div class="card mb-reset-3">
                                    <div class="card-body-reset">
                                        <div class="row mx-0">
                                            <div class="logo-pdf">
                                                <img src="{{ asset('img/pdf.png') }}" class="w-100" alt="pdf">
                                            </div>
                                            <div class="text-pdf">
                                                <h3>{{ $document->name }}</h3>
                                                <a href="/indicadores?id={{ $document->id }}">Descargar</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer py-0 text-muted">
                                        <div class="row">
                                            <div class="ml-auto">
                                                <p class="card-text mt-0">Descargas:
                                                    {{ $document->downloads }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </article>
@endsection
@section('scripts')
    <script src="{{ asset('js/bootstrap/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
@endsection
