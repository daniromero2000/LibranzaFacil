@extends('libranza.front.app') @section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('modules/libranza/public/css/home/app.min.css') }}" />
    <style>
        body {
            margin: 0;
            height: 100%
        }

    </style>
    <link rel="stylesheet" href="{{ asset('css/whatsapp.min.css')}}">
    @endsection @section('tags') <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-164894259-1', {
            'page_title': 'home',
            'page_path': "/"
        });

    </script> @endsection @section('content') @include('libranza.front.layouts.carousel')
    @include('libranza.front.layouts.main_text') @include('libranza.front.layouts.benefits')
    @include('libranza.front.layouts.credit_for_pensioners') @include('libranza.front.layouts.banners.banner_last')
    @include('libranza.front.layouts.covenants')
 <div>
        <a href="https://api.whatsapp.com/send?phone=573182392113&text=Quiero%20mas%20informaci%C3%B3n%20sobre%20el%20cr%C3%A9dito%20por%20libranzas."
        class="float" target="_blank">
        <img src="{{ asset('img/logos/whatsapp.svg')}}"  style=" width: 71%; " alt="logo whatsapp" />
    </a>

 </div>
    @endsection @section('scripts') <script src="{{ asset('js/bootstrap/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script>
        $("#playvideo").click(function() {
            var symbol = $("#video1")[0].src.indexOf("?") > -1 ? "&" : "?";
            $("#video1")[0].src += symbol + "autoplay=1";
        });

    </script>
@endsection
