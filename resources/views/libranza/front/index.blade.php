@extends('libranza.front.app')

<link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/home/app.min.css')}}" />
@section('styles')
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
@endsection