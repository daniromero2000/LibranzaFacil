@extends('libranza.front.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('modules/libranza/public/css/information/app.min.css') }}" />
    <style>.contianer-text-information h3{margin-top:1%}.contianer-text-information p{padding:1vw;font-size:1.3vw}section{margin-top:3%}@media (min-width: 481px) and (max-width: 767px){.contianer-text-information p{padding:2.6vw;font-size:2.2vw}}@media (min-width: 310px) and (max-width: 480px){.contianer-text-information p{padding-left:3vw;padding-right:3px;font-size:2.9vw}}</style>
@endsection
@section('content')
    <article class="contianer-text-information">
        <h1>Preguntas Frecuentes</h1>

        <section id="accordionExample">
            <div>
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h3>¿TIENEN SERVICIO A DOMICILIO?</h3> <i class="fa fa-plus"></i>
                </button>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <p> Claro que si, dependiendo la zona en que se encuentre ubicada su vivienda y las condiciones de pago.
                    </p>
                </div>
            </div>

            <div>
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h3>¿PUEDO PAGAR EN OTRO LUGAR QUE NO SEA EL ALMACÉN?</h3>
                </button>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <p> Claro que si, en efecty a través del código 110380, si no presenta mora superior a 89 días y por
                        medio de la cuenta cuenta rotativa del banco de Bogotá 72651000174
                    </p>
                </div>
            </div>

            <div>
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <h3>¿CUÁLES SON LOS REQUISITOS PARA ACCEDER AL CRÉDITO?</h3>
                </button>
                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <p> Ser mayor de edad, ser colombiano y ser residente en Colombia, tener correo electrónico propio
                        y celular personal, manejar un buen historial crediticio, suministrar información veraz y
                        referencias
                        que lo puedan confirmar.
                    </p>
                </div>
            </div>

            <div>
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <h3>¿CÓMO PUEDES CONTACTARNOS?</h3>
                </button>
                <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <p> A través de nuestra línea nacional de atención al cliente 01 8000 117 787 opción 1 o por correo
                        electrónico servicioalcliente@lagobo.com
                    </p>
                </div>
            </div>
            <div>
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <h3>¿POR QUÉ SOLICITAR TU CRÉDITO EN LINEA?</h3>
                </button>
                <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <p> Porque es fácil, rápido, seguro y sin desplazamientos, puedes hacer tu solicitud cualquier día del
                        año
                        y en cualquier momento, además no requieres codeudor.
                    </p>
                </div>
            </div>

            <div>
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    <h3>¿QUÉ ES LA TARJETA OPORTUYA?</h3>
                </button>
                <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <p> Es una tarjeta de crédito no vigilada por la Superintendencia Financiera de Colombia propiedad de
                        LAGOBO
                        DISTRIBUCIONES S.A.S L.G.B S.A.S a través de la cual le otorgamos beneficios a todos nuestros
                        clientes
                        que la adquieren, tales como compra de producto, seguros y avances en efectivo.
                    </p>
                </div>
            </div>
        </section>
    </article>
@endsection
@section('scripts')
    <script src="{{ asset('js/bootstrap/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
@endsection