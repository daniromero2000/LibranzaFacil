@extends('libranza.front.app')
@section('content')

  <div class="row mx-0 mb-3">
    <div class="col-md-6">
      <img src="{{asset('modules/libranza/public/img/banners/interview.png')}}" class="card-img img-left" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body texto-right">
        <p class="card-text"><span class="text-red"><b>Atención personalizada</b></span> por<br> nuestro equipo profesional<br> de asesores comerciales</p>        
      </div>
    </div>
  </div>

  <div class="row mx-0 mb-3">
    <div class="col-md-6">
     <div>
     <div class="card-body texto-left">
         <p class="card-text">Préstamos a asociados con <br> edad<span class="text-red"><b> hasta 84 años</b></span></p>        
      </div>
     </div>
    </div>
    <div class="col-md-6">
      <img src="{{asset('modules/libranza/public/img/banners/grandparents.png')}}" class="card-img img-right" alt="...">
    </div>
  </div>

  <div class="row mx-0 mb-3">
    <div class="col-md-6">
      <img src="{{asset('modules/libranza/public/img/banners/hug.png')}}" class="card-img img-left" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body texto-right">
          <p class="card-text"><span class="text-red"><b>Cuota fija en pesos durante <br>todo el plazo </span></b> del Crédito con <br>cómodas tasas de financiación</p>        
      </div>
    </div>
  </div>

  <div class="row mx-0 mb-3">
    <div class="col-md-6">
      <div class="card-body texto-left">
         <p class="card-text" >Préstamos a asociados<br><span class="text-red"><b>Reportados</b></p>        
      </div>
    </div>
    <div class="col-md-6">
      <img src="{{asset('modules/libranza/public/img/banners/motorcyclist.png')}}" class="card-img img-right" alt="...">
    </div>
  </div>

  <div class="row mx-0 mb-3">
    <div class="col-md-6">
      <img src="{{asset('modules/libranza/public/img/banners/hug2.png')}}" class="card-img img-left" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body texto-right">
        <p class="card-text">Monto desde <span class="text-red"><b> $500.000 </b></span> hasta <br><span class="text-red"><b> $80.000.000 </b></p>        
      </div>
    </div>
  </div>

  <div class="row mx-0 final-div mb-3">
    <div class="col-md-6">
      <div class="card-body texto-left">
         <p class="card-text">El monto a otorgar se define <br> de acuerdo con la <span class="text-red"><b> Pagaduría, <br> Capacidad de pago, la edad y <br> Perfil de cada asociado </b></span></p>        
      </div>
    </div>
    <div class="col-md-6">
      <img src="{{asset('modules/libranza/public/img/banners/family.png')}}" class="card-img img-right" alt="...">
    </div>
  </div>

  <div class="col-12 text-center">
    <button type="button" name="" id="" class="btn-bene">Solicita tu crédito</button>
</div>
<br>
<br>
<link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/benefits/app.min.css')}}" />

@endsection