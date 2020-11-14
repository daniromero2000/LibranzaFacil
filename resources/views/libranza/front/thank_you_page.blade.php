@extends('libranza.front.app')
@section('content')
<div class="row row-reset">
    <div class="col-12 text-center ml-0 mr-0 p-0 thankContainer">
        <div class="containerThankPage">
            <img class="imgchulo" src="{{asset('modules/libranza/public/img/icons/chulo.png')}}">
        </div>
        <div class="dialogThakPage">
            <p> Un asesor se comunicará con usted para continuar con la solicitud, gracias por dejarnos su
                información.</p>
        </div>

    </div>
</div>

<link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/thank/app.min.css')}}" />

@endsection