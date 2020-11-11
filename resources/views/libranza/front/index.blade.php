@extends('libranza.front.app')

@section('content')
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
            <img src="{{asset('modules/libranza/public/img/sliders/slider-1.png')}}" class="d-block w-100"
                alt="{{asset('modules/libranza/public/img/sliders/slider-1.png')}}">
        </div>
        <div class="carousel-item" data-interval="10000">
            <img src="{{asset('modules/libranza/public/img/sliders/slider-1.png')}}" class="d-block w-100"
                alt="{{asset('modules/libranza/public/img/sliders/slider-1.png')}}">
        </div>
        <div class="carousel-item" data-interval="10000">
            <img src="{{asset('modules/libranza/public/img/sliders/slider-1.png')}}" class="d-block w-100"
                alt="{{asset('modules/libranza/public/img/sliders/slider-1.png')}}">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
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