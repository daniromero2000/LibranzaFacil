<!DOCTYPE html>
<html lang="es">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
        <meta name="author" content="Oportunidadaes Libranza">
        <title>Libranza Fácil - Oportunidades Libranza</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/main.min.css')}}" />
        <link rel="icon" type="image/png" href="resources/assets/oportunidadesServicios.ico" />
        @yield('styles')

        <meta name="description" content="Ingresa a Libranzafacil.com y Obten tu crédito por Libranza para pensionados,
    docentes y militares muy fácil, solicítalo Online." />
        <meta property="og:type" content="Website" />
        <meta property="og:title" content="Libranza Facil" />
        <meta property="og:description" content="Ingresa a Libranzafacil.com y Obten tu crédito por Libranza para pensionados,
    docentes y militares muy fácil, solicítalo Online. Crédito por Libranza para pensionados, docentes y militares, hasta
    con 120 meses de plazo, aprobamos hasta los 84 años y Somos especialistas en Fondos Privados, Si estas reportado, te
    damos una segunda Oportunidad." />
        <meta property="og:image" content="https://libranzafacil.com/resources/assets/Portada_OGV.jpg" />
        <meta property="og:url" content="https://libranzafacil.com/" />
        <meta property="og:site_name" content="LibranzaFacil.com" />
        @yield('og')

        @include('libranza.front.layouts.tracking_labels')
        @yield('tracing')
        <script>
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
        </script>

    </head>

    <body>
        @include('libranza.front.layouts.header')
        @yield('content')
        @include('libranza.front.footer')

    </body>

    <script src="{{asset('js/bootstrap/jquery.slim.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script>

    </script>

    <script type="text/javascript">
        var email = document.getElementById("email").value;
    var emailConfirm = document.getElementById("emailConfirm").value;

    if (email != emailConfirm) {
        document.getElementById("emailAlert").style.display = "block";
        document.getElementById("email").value = "";
    } else {
        document.getElementById("emailAlert").style.display = "none";
    }
    </script>
    @yield('scripts')

</html>