@extends('libranza.front.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/form/app.min.css')}}" />
@endsection
@section('content')
<div class="min-container">
@include('libranza.front.layouts.form',['product'=> request()->input()])
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/admin/validate.js') }}"></script>
@endsection