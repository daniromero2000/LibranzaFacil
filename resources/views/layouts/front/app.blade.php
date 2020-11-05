<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta Card -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{ config('app.name') }}</title>
    @yield('og')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('img/tws/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/front/educorp/app.min.css')}}">
    @yield('styles')
</head>
<body>
    @yield('content')
    @include('layouts.front.footer')
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}
            , Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script")
                , s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f73a51bf0e7167d0014d509/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script>

    <!--End of Tawk.to Script-->
</body>
<script src="{{ asset('js/front/jquery.min.js') }}"></script>
<script src="{{ asset('js/front/scrollreveal.js') }}"></script>
<script src="{{ asset('js/front/educorp/app.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/admin/validate.js') }}"></script>
@yield('scripts')
@if(session()->has('error'))
<script>
    $('#form').modal('show')

</script>
@endif
</html>
