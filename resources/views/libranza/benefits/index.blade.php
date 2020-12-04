@extends('libranza.front.app')
@section('tags')
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-164894259-1', {
            'page_title': 'beneficios',
            'page_path': "/benefits"
        });

    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-781153823', {
            'page_title': 'beneficios',
            'page_path': "/benefits"
        });

    </script>
@endsection
@section('content')

  <div class="row mx-0 row-benefits">
    <div class="col-md-6 size-row">
      <img src="{{asset('modules/libranza/public/img/banners/interview.png')}}" class="card-img" alt="...">
    </div>
    <div class="col-md-6 size-row">
         <p class="card-text"><span class="text-red"><b>Atención personalizada</b></span> por<br> nuestro equipo profesional<br> de asesores comerciales</p>        
     </div>
  </div>

  <div class="row mx-0 row-benefits">
    <div class="col-md-6 size-row" >
     <div>
         <p class="card-text">Préstamos a asociados con <br> edad<span class="text-red"><b> hasta 84 años</b></span></p>        
     </div>
    </div>
    <div class="col-md-6 size-row">
      <img src="{{asset('modules/libranza/public/img/banners/grandparents.png')}}" class="card-img" alt="...">
    </div>
  </div>

  <div class="row mx-0 row-benefits">
    <div class="col-md-6 size-row">
      <img src="{{asset('modules/libranza/public/img/banners/hug.png')}}" class="card-img img-left" alt="...">
    </div>
    <div class="col-md-6 size-row">
        <p class="card-text"><span class="text-red"><b>Cuota fija en pesos durante <br>todo el plazo </span></b> del Crédito con <br>cómodas tasas de financiación</p>        
    </div>
  </div>

  <div class="row mx-0 row-benefits">
    <div class="col-md-6 size-row">
         <p class="card-text" >Préstamos a asociados<br><span class="text-red"><b>Reportados</b></p>        
    </div>
    <div class="col-md-6 size-row">
      <img src="{{asset('modules/libranza/public/img/banners/motorcyclist.png')}}" class="card-img" alt="...">
    </div>
  </div>

  <div class="row mx-0 row-benefits">
    <div class="col-md-6 size-row">
      <img src="{{asset('modules/libranza/public/img/banners/hug2.png')}}" class="card-img" alt="...">
    </div>
    <div class="col-md-6 size-row">
         <p class="card-text">Monto desde <span class="text-red"><b> $500.000 </b></span> hasta <br><span class="text-red"><b> $80.000.000 </b></p>        
    </div>
  </div>

  <div class="row mx-0 final-div">
    <div class="col-md-6 size-row">
         <p class="card-text">El monto a otorgar se define <br> de acuerdo con la <span class="text-red"><b> Pagaduría, <br> Capacidad de pago, la edad y <br> Perfil de cada asociado </b></span></p>        
    </div>
    <div class="col-md-6 size-row">
      <img src="{{asset('modules/libranza/public/img/banners/family.png')}}" class="card-img" alt="...">
    </div>
  </div>  

  <div class="col-12 text-center">
    <button type="button" name="" id="" class="btn-bene">Solicita tu crédito</button>
</div>
<br>
<br>
<link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/benefits/app.min.css')}}" />

@endsection