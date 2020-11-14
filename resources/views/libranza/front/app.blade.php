<!DOCTYPE html>
<html lang="es">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <title>Libranza Fácil - Oportunidades Libranza</title>
        <meta name="author" content="Oportunidadaes Libranza">
        <meta name="language" content="ES">
        <meta name="subject" content="Oportunidadaes Libranza">
        <meta name="copyright" content="Oportunidadaes Libranza">
        <meta name="tags" content="Credito por libranza, Crédito, Libranzas">
        <meta name="keywords" content="Credito por libranza, Crédito, Libranzas">
        <meta name="description" content="Ingresa a Libranzafacil.com y Obten tu crédito por Libranza para pensionados,
            docentes y militares muy fácil, solicítalo Online." />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
        @yield('styles')
        <link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/app.min.css')}}" />
        <link rel="icon" type="image/png" href="resources/assets/oportunidadesServicios.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @include('libranza.front.layouts.og_labels')
        @yield('og')

        @include('libranza.front.layouts.tracking_labels')
        @yield('tracing')
        {{-- <script>
            window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-781153823');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164894259-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
        function gtag() {dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-164894259-1');
        </script>
        <script>
            (function(h, e, a, t, m, p) {
            m = e.createElement(a);
            m.async = !0;
            m.src = t;
            p = e.getElementsByTagName(a)[0];
            p.parentNode.insertBefore(m, p);
        })(window, document, 'script', 'https://u.heatmap.it/log.js');
        </script> --}}

    </head>

    <body>
        @include('libranza.front.header')
        @yield('content')
        @include('libranza.front.footer')

    </body>

    <script src="{{asset('js/bootstrap/jquery.slim.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <script type="text/javascript">
        //     var email = document.getElementById("email").value;
    // var emailConfirm = document.getElementById("emailConfirm").value;

    // if (email != emailConfirm) {
    //     document.getElementById("emailAlert").style.display = "block";
    //     document.getElementById("email").value = "";
    // } else {
    //     document.getElementById("emailAlert").style.display = "none";
    // }
    </script>
    @yield('scripts')

</html>