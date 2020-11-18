@extends('libranza.front.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/thank/app.min.css')}}" />
@endsection
@section('content')
<div class="row mx-0 row-reset">
    <div class="col-12 text-center ml-0 mr-0 p-0 thankContainer">
        <div class="containerThankPage">
            <img class="imgchulo" src="{{asset('modules/libranza/public/img/icons/chulo.png')}}">
        </div>
        <div class="dialogThakPage">
            <p class="solicitud"><b> ¡Tu solicitud fue enviada con éxito!.<b></p>
        </div>
        <div class="dialogThakPage">
            <p class="texto-solicitud">¡Te invitamos a estar pendiente al momento! de contactarnos<br>contigo ¡Gracias!</p>
        </div>
        <div class="dialogThakPage">
            <a href="{{route('home')}}" class="btn-thank">Volver al inicio</a>
        </div>
        <div class="dialogThakPage">
            <p class="texto-solicitud2"><b>La aprobación del monto y plazo sujetos a políticas de crédito.<br> Dejanos tus datos y un asesor se comunicará contigo para continuar con tu solicitud. <br> Si quieres más información comunicate con nosotros a este WhatsApp 312 2399959<b></p>
        </div>
    </div>
</div>
@endsection