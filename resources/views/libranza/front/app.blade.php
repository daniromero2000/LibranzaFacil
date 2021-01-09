<!DOCTYPE html>
<html lang="es">

<head> @include('libranza.front.layouts.meta') @yield('styles') @include('libranza.front.layouts.og_labels')
    @yield('og') @include('libranza.front.layouts.tracking_labels') @yield('tags')
    <!-- Twitter Card -->
    <meta name="twitter:card" content="Libranza Fácil - Oportunidades Libranza">
    <meta name="twitter:creator" content="https://libranzafacil.com/" />
    <meta name="twitter:site" content="https://libranzafacil.com/" />
    <meta name="twitter:title" content="Libranza Fácil - Oportunidades Libranza" />
    <meta name="twitter:description"
        content="Ingresa a Libranzafacil.com y obten tu crédito por Libranza para pensionados, docentes y militares muy fácil, solicítalo Online. Crédito por Libranza para pensionados, docentes y militares, hasta con 120 meses de plazo, aprobamos hasta los 84 años y Somos especialistas en Fondos Privados, Si estas reportado, te damos una segunda Oportunidad." />
    <meta name="twitter:image" content="{{ asset('modules/libranza/public/img/logos/logo-libranzafacil.png') }}" />
</head>

<body> @include('libranza.front.header') @yield('content') @include('libranza.front.footer') </body>
<script src="{{ asset('modules/libranza/public/js/front/app.min.js') }}"></script> @yield('scripts')

</html>
