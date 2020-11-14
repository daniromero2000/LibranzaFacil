@extends('libranza.front.app')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/form/app.min.css')}}" />
@endsection
@section('content')
@include('libranza.front.layouts.form',['product'=> request()->input()])
@endsection