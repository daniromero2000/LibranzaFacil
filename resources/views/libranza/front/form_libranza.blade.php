@extends('libranza.front.app')
@section('styles')
@endsection
@section('content')
{{-- <article> --}}
<div class="container-banner-form">
    <img src="{{asset('modules/libranza/public/img/banners/banner-form.png')}}" class="w-100"
        alt="Con-tu-crédito-por-libranza-ahora-es-más-fácil-unificar-tus-deudas">
    <div class="container-form">
        <h1>¡La manera mas fácil de tener <span>crédito por libranza!</span></h1>
        <h2>Prestamos hasta los 84 años de edad</h2>

        <div class="form">
            <h3>Cuéntanos sobre ti <b>(ingresa tus datos personales)</b></h3>
            <form method="get" action="">
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="" placeholder="Nombres*">
                    </div>
                    <div class="col-6">
                        <input type="text" name="" placeholder="Apellidos*">
                    </div>
                    <div class="col-6">
                        <input type="text" name="" placeholder="Número de cédula*">
                    </div>
                    <div class="col-6">
                        <input type="text" name="" placeholder="Teléfono celular*">
                    </div>
                    <div class="col-6">
                        <input type="email" name="" placeholder="Correo electrónico*">
                    </div>
                    <div class="col-6">
                        <input type="email" name="" placeholder="Confirmar correo electrónico*">
                    </div>
                    <div class="col-6">
                        <select id="city_id" name="city_id" required>
                            <option value="" selected>Busca tu ciudad*</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select id="kind_of_person" name="kind_of_person" required>
                            <option value="Pensionado" selected>Pensionado</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select name="amount" id="amount" required>
                            <option value selected>Indícanos el monto a solicitar*</option>
                            <option value="500000">$ 500.000</option>
                            <option value="1000000">$ 1.000.000</option>
                            <option value="2000000">$ 2.000.000</option>
                            <option value="3000000">$ 3.000.000</option>
                            <option value="4000000">$ 4.000.000</option>
                            <option value="5000000">$ 5.000.000</option>
                            <option value="6000000">$ 6.000.000</option>
                            <option value="7000000">$ 7.000.000</option>
                            <option value="8000000">$ 8.000.000</option>
                            <option value="9000000">$ 9.000.000</option>
                            <option value="10000000">$ 10.000.000</option>
                            <option value="11000000">$ 11.000.000</option>
                            <option value="12000000">$ 12.000.000</option>
                            <option value="13000000">$ 13.000.000</option>
                            <option value="14000000">$ 14.000.000</option>
                            <option value="15000000">$ 15.000.000</option>
                            <option value="16000000">$ 16.000.000</option>
                            <option value="17000000">$ 17.000.000</option>
                            <option value="18000000">$ 18.000.000</option>
                            <option value="19000000">$ 19.000.000</option>
                            <option value="20000000">$ 20.000.000</option>
                            <option value="21000000">$ 21.000.000</option>
                            <option value="22000000">$ 22.000.000</option>
                            <option value="23000000">$ 23.000.000</option>
                            <option value="24000000">$ 24.000.000</option>
                            <option value="25000000">$ 25.000.000</option>
                            <option value="26000000">$ 26.000.000</option>
                            <option value="27000000">$ 27.000.000</option>
                            <option value="28000000">$ 28.000.000</option>
                            <option value="29000000">$ 29.000.000</option>
                            <option value="30000000">$ 30.000.000</option>
                            <option value="31000000">$ 31.000.000</option>
                            <option value="32000000">$ 32.000.000</option>
                            <option value="33000000">$ 33.000.000</option>
                            <option value="34000000">$ 34.000.000</option>
                            <option value="35000000">$ 35.000.000</option>
                            <option value="36000000">$ 36.000.000</option>
                            <option value="37000000">$ 37.000.000</option>
                            <option value="38000000">$ 38.000.000</option>
                            <option value="39000000">$ 39.000.000</option>
                            <option value="40000000">$ 40.000.000</option>
                            <option value="41000000">$ 41.000.000</option>
                            <option value="42000000">$ 42.000.000</option>
                            <option value="43000000">$ 43.000.000</option>
                            <option value="44000000">$ 44.000.000</option>
                            <option value="45000000">$ 45.000.000</option>
                            <option value="46000000">$ 46.000.000</option>
                            <option value="47000000">$ 47.000.000</option>
                            <option value="48000000">$ 48.000.000</option>
                            <option value="49000000">$ 49.000.000</option>
                            <option value="50000000">$ 50.000.000</option>
                            <option value="51000000">$ 51.000.000</option>
                            <option value="52000000">$ 52.000.000</option>
                            <option value="53000000">$ 53.000.000</option>
                            <option value="54000000">$ 54.000.000</option>
                            <option value="55000000">$ 55.000.000</option>
                            <option value="56000000">$ 56.000.000</option>
                            <option value="57000000">$ 57.000.000</option>
                            <option value="58000000">$ 58.000.000</option>
                            <option value="59000000">$ 59.000.000</option>
                            <option value="60000000">$ 60.000.000</option>
                            <option value="61000000">$ 61.000.000</option>
                            <option value="62000000">$ 62.000.000</option>
                            <option value="63000000">$ 63.000.000</option>
                            <option value="64000000">$ 64.000.000</option>
                            <option value="65000000">$ 65.000.000</option>
                            <option value="66000000">$ 66.000.000</option>
                            <option value="67000000">$ 67.000.000</option>
                            <option value="68000000">$ 68.000.000</option>
                            <option value="69000000">$ 69.000.000</option>
                            <option value="70000000">$ 70.000.000</option>
                            <option value="71000000">$ 71.000.000</option>
                            <option value="72000000">$ 72.000.000</option>
                            <option value="73000000">$ 73.000.000</option>
                            <option value="74000000">$ 74.000.000</option>
                            <option value="75000000">$ 75.000.000</option>
                            <option value="76000000">$ 76.000.000</option>
                            <option value="77000000">$ 77.000.000</option>
                            <option value="78000000">$ 78.000.000</option>
                            <option value="79000000">$ 79.000.000</option>
                            <option value="80000000">$ 80.000.000</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select name="term" id="term" required>
                            <option value selected>Indícanos el plazo que deseas*</option>
                            <option value="13">13</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                            <option value="48">48</option>
                            <option value="60">60</option>
                            <option value="72">72</option>
                            <option value="84">84</option>
                            <option value="96">96</option>
                            <option value="108">108</option>
                            <option value="120">120</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <select name="entity" id="entity" required>
                            <option value selected>De que entidad eres*</option>
                            <option value="Axa Colpatria Renta Vitalicia">Axa Colpatria Renta
                                Vitalicia
                            </option>
                            <option value="BBVA Seguros">BBVA Seguros </option>
                            <option value="Casur">Casur</option>
                            <option value="Colfondos">Colfondos</option>
                            <option value="Colpensiones">Colpensiones</option>
                            <option value="Ferrocarriles">Ferrocarriles</option>
                            <option value="Foncep">Foncep</option>
                            <option value="Fopep">Fopep</option>
                            <option value="Global Seguros ">Global Seguros </option>
                            <option value="Mapfre">Mapfre</option>
                            <option value="Porvenir">Porvenir</option>
                            <option value="Protección">Proteccion</option>
                            <option value="Seguros Alfa">Seguros Alfa </option>
                            <option value="Seguros Bolívar ARL">Seguros Bolivar ARL </option>
                            <option value="Seguros Bolívar Renta">Seguros Bolivar Renta </option>
                            <option value="Seguros Alfa">Seguros Alfa</option>
                            <option value="Suramericana">Suramericana</option>
                            <option value="Skandia">Skandia</option>
                        </select>

                    </div>
                </div>
                <div class="container-conditions">
                    <p>
                        <a target="_blank" href="">Acepto Términos, condiciones</a> y <a target="_blank"
                            href="">Política de tratamiento de
                            datos</a>
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    </p>
                </div>

                <div>
                    <button type="button" name="" id="" class="btn-form">Ya estoy listo para solicitarlo</button>

                    <p class="text-exeption">La aprobación del monto y plazo sujetos a políticas de crédito. Dejanos tus
                        datos y un asesor se
                        comunicara contigo para
                        continuar con tu solicitud. Si quieres más información comunicate con nosotros a este WhatsApp
                        312 2399959</p>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- </article> --}}
@endsection