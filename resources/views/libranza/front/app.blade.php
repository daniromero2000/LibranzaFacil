<!DOCTYPE html>
<html lang="es">
<head>
    @include('libranza.front.layouts.meta')
    @yield('styles')
    @include('libranza.front.layouts.og_labels')
    @yield('og')
    @include('libranza.front.layouts.tracking_labels')
    @yield('tags')
</head>
<body>
    @include('libranza.front.header')
    @yield('content')
    @include('libranza.front.footer')
</body>
<script src="{{ asset('modules/libranza/public/js/front/app.min.js') }}"></script>
@yield('scripts')
</html>

