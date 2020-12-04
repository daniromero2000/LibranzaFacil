@extends('libranza.front.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/select2/select2.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/form/app.min.css')}}" />
@endsection
@section('tags')
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-164894259-1', {
            'page_title': 'formulario',
            'page_path': "/formulario-libranza"
        });

    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-781153823', {
            'page_title': 'formulario',
            'page_path': "/formulario-libranza"
        });

    </script>
@endsection
@section('content')
<div class="min-container">
@include('libranza.front.layouts.form',['product'=> request()->input()])
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/bootstrap/jquery.slim.min.js') }}"></script>
<script src="{{ asset('js/admin/validate.js') }}"></script>
<script src="{{ asset('modules/libranza/public/js/front/form/app.min.js') }}"></script>
<script src="{{ asset('js/select2/select2.min.js') }}"></script>
<script>
    $(document).ready(function() {
    $('.select').select2();
});
</script>
@endsection