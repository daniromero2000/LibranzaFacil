@extends('libranza.front.app')
@section('content')
<div class="row row-reset">
    <div class="col-12 text-center ml-0 mr-0 p-0 thankContainer">
        <div class="containerThankPage">
            <img src="{{asset('modules/libranza/public/resources/assets/imageThankPage.jpg')}}" class="img-fluid">
        </div>
        <div class="dialogThakPage">
            <img src="{{asset('modules/libranza/public/resources/assets/dialogThankPage.png')}}" class="img-fluid">
            <p> Un asesor se comunicará con usted para continuar con la solicitud, gracias por dejarnos su
                información.</p>
        </div>

    </div>
</div>
@include('libranza.front.layouts.banners.banner_covenants')
@endsection