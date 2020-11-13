@extends('libranza.front.app')
@section('content')

<img class="imgBanner" src="{{asset('modules/libranza/public/img/banners/man-drinking-coffee-outdoors.png')}}">

<div class="row mx-0 mb-3">
    <div class="col-md-12">
         <h5><span class="resaltado">Somos tu mejor opción en </span><span class="azul">crédito por libranza</span></h5><br>
         <p> <span class="azul-text">El </span><span class="rojo">crédito por Libranza </span>es un crédito de consumo que incluye un mecanismo de recaudo, en donde el deudor autoriza <br>
         a su empleador  o entidad pagadora para que le realice un descuento de su salario o pensión, con el objetivo de que <br>
         esos dineros descontados, sean destinados al pago de las cuotas del crédito adquirido</p>

         <p> <span class="azul-text">a través de su </span><span class="rojo">experiencia de 50 años</span> en la originación y administración adecuada y segura de los activos derivados de <br>
         sus operaciones de crédito, ha logrado una colocación que supera los $200.000 millones de pesos en libranzas, a través <br>
         de diferentes pagadurías, de orden Nacional, Departamental, Militares y Fondos Privados de pensiones<br>
         Nuestra operación ha sido evaluada y revisada por las diferentes Superintendencia de vigilancia y control, mediante <br>
         visitas, realizando una completa evaluación, sin encontrar situaciones que implicaran alteraciones a la operación o <br>
         sobre la mitigación de los diferentes controles de riesgo implementados por nuestra organización.    
        </p>
    </div>
</div>    
<br>
<div class="fortalezas">
    <p class="azul-oscuro">Fortalezas</p>
</div>

<div class="card-group">
  <div class="card" >
    <img class="vectorial-50" src="{{asset('modules/libranza/public/img/icons/50-vectorial.png')}}" class="card-img-top" alt="...">
    <div class="card-body">     
      <p class="card-text"><span class="azul-fortalezas">50 Años de experiencia</span><br>en el mercado.</p>
    </div>
  </div>
  <div class="card">
    <img class="manito" src="{{asset('modules/libranza/public/img/icons/manito-vectorial.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text"><span class="azul-fortalezas">Excelente reputación</span> en el sector<br>Financiero y proveedores.</p>
    </div>
  </div>
  <div class="card">
    <img class="medalla" src="{{asset('modules/libranza/public/img/icons/medalla-vectorial.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Originación de crédito con procesos homologados con el sector financiero y <br>con adecuados <span class="azul-fortalezas">estándares de calidad</span>, que se traducen en indicadores de cartera <br> controlados.</p>
    </div>
  </div>
</div>

<div class="card-group">
  <div class="card" >
    <img class="people" src="{{asset('modules/libranza/public/img/icons/people.png')}}" class="card-img-top" alt="...">
    <div class="card-body">     
      <p class="card-text"><span class="azul-fortalezas">Gerencia altamente involucrada</span> en el<br>desarrollo de los clientes y el <br> crecimiento de la empresa</p>
    </div>
  </div>
  <div class="card">
    <img class="presencia" src="{{asset('modules/libranza/public/img/icons/presencia.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text"> Presencia y cobertura en todo el <br><span class="azul-fortalezas">territorio nacional.</span></p>
    </div>
  </div>
</div>

<link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/about/app.min.css')}}" />

@include('libranza.front.footer')
@endsection




 