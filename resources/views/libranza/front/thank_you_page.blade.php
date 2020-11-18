@extends('libranza.front.app')
@section('content')
<div class="row mx-0 row-reset">
    <div class="col-12 text-center ml-0 mr-0 p-0 thankContainer">
        <div class="containerThankPage">
            <img class="imgchulo" src="{{asset('modules/libranza/public/img/icons/chulo.png')}}">
        </div>
        <div class="dialogThakPage">
            <p class="solicitud"><b> ¡Tu solicitud fue enviada con éxito!<b></p>
        </div>
        <div class="dialogThakPage">
            <p class="texto-solicitud">Te invitamos a estar pendiente al momento de contactarnos<br>contigo ¡Gracias!</p>
        </div>
        <div class="dialogThakPage">
            <button type="button" name="" id="" class="btn-thank">Volver al inicio</button>
        </div>
        <div class="dialogThakPage">
            <p class="texto-solicitud2"><b>La aprobación del monto y plazo sujetos a políticas de crédito.<br> Déjanos tus datos y un asesor se comunicará contigo para continuar con tu solicitud. <br> Si quieres más información comunicate con nosotros a este WhatsApp 312 2399959<b></p>
        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/thank/app.min.css')}}" />

@endsection