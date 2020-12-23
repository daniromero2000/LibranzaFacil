@extends('libranza.front.app')
@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('modules/libranza/public/css/home/app.min.css') }}" /> <style> body { margin: 0; height: 100% } </style> <script src="{{ asset('js/front/libranza/snow.min.js') }}"></script>
@endsection
@section('tags')
   <script>
    window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);} gtag('js',new Date());gtag('config','UA-164894259-1',{'page_title':'home','page_path':"/"});
</script>
@endsection
@section('content')
    @include('libranza.front.layouts.carousel')
    @include('libranza.front.layouts.main_text')
    @include('libranza.front.layouts.benefits')
    @include('libranza.front.layouts.credit_for_pensioners')
    @include('libranza.front.layouts.banners.banner_last')
    @include('libranza.front.layouts.covenants')
@endsection
@section('scripts')
    <script src="{{ asset('js/bootstrap/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script> $("#playvideo").click(function(){ var symbol = $("#video1")[0].src.indexOf("?") > -1 ? "&" : "?"; $("#video1")[0].src += symbol + "autoplay=1"; }); </script>
@endsection
