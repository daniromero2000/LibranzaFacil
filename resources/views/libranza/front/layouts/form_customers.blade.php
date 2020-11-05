<div class="imgFon">
    <div class="form-fondo shadow-lg clearfix">
        <form class="form-group " method="POST" action="{{route('leads.store')}}">
            @csrf
            <div class=" text-center ">
                <div class="col-reset">
                    <p class="title-start">¡La manera mas fácil de tener crédito por libranza!</p>
                    <span class="title-form3 text-center">
                        Prestamos hasta los <b>84 años de edad</b>
                    </span>
                    <div class="form-row mt-2">
                        <div class="col-md-12 mb-3">
                            <span class="point badge "> </span>
                            <div class="form-control input-color">
                                <p><img class="img-fluid icono-form"
                                        src="{{asset('modules/libranza/public/resources/assets/Icono.png')}}" alt="">
                                    <span class="text-input"> Cuéntanos sobre ti </span> <span
                                        class="text-input2">(ingresa tus datos personales)</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 mb-3 ">
                            <label class="labelInput" id="name" for="name">Nombres <span class="text-danger"
                                    style=" font-weight: bold; "> * </span></label>
                            <input type="text" onkeypress="return soloLetras(event)"
                                class="form-control form-control-reset" id="name" name="name" required>
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 mb-3">
                            <label class="labelInput" id="last_name" for="last_name">Apellidos <span class="text-danger"
                                    style=" font-weight: bold; "> * </span></label>
                            <input type="text" onkeypress="return soloLetras(event)" class="form-control" id="last_name"
                                name="last_name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 mb-3">
                            <label class="labelInput" for="identification_number">N° de Cédula <span class="text-danger"
                                    style=" font-weight: bold; ">
                                    * </span></label>
                            <input type="text" onkeypress='return validaNumericos(event)' class="form-control"
                                id="identification_number" name="identification_number" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 mb-3">
                            <label class="labelInput" for="email">Correo electrónico <span class="text-danger"
                                    style=" font-weight: bold; "> * </span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <span class="alert alert-danger" id="emailAlert">Los correos no coinciden</span>
                            <p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 mb-3">
                            <label class="labelInput" id="telephone" for="telephone">Teléfono Celular<span
                                    class="text-danger" style=" font-weight: bold; "> * </span></label>
                            <input type="text" class="form-control" minlength="10" maxlength="10"
                                onkeypress='return validaNumericos(event)' id="telephone" name="telephone" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 mb-3">
                            <label class="labelInput" for="emailconfirm">Confirmar correo electrónico <span
                                    class="text-danger" style=" font-weight: bold; "> * </span></label>
                            <input type="email" class="form-control" id="emailConfirm" name="emailConfirm" required
                                onblur="confirmEmail()">
                            <!-- <span id="emailOK"></span> -->
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 mb-3">
                            <label class="labelInput" for="city_id">Buscar Ciudad <span class="text-danger"
                                    style=" font-weight: bold; "> * </span></label>
                            <select class="form-control" id="city_id" name="city_id" required>
                                @foreach ($cities as $city)
                                <option value="{{$city->id}}">{{$city->city}}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 mb-3">
                            <label class="labelInput" for="kind_of_person">Ocupación <span class="text-danger"
                                    style=" font-weight: bold; "> *
                                </span></label>
                            <select class="form-control" id="kind_of_person" name="kind_of_person"
                                placeholder="Seleccione los programas de su interes" required>
                                <option value="Pensionado" selected>Pensionado</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <input type="hidden" value="17" class="form-control" id="department_id" name="department_id"
                                type="text">
                            <input type="hidden" value="12" class="form-control" id="lead_status_id"
                                name="lead_status_id" type="text">
                            <input type="hidden" value="12" class="form-control" id="lead_service_id"
                                name="lead_service_id" type="text">
                            <input type="hidden" value="1" class="form-control" id="lead_product_id"
                                name="lead_channel_id" type="text">
                            <input type="hidden" value="45" class="form-control" id="lead_product_id"
                                name="lead_product_id" type="text">
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 mb-3">
                            <label class="labelInput" for="amount">Indícanos el monto a solicitar <span
                                    class="text-danger" style=" font-weight: bold; "> * </span></label>
                            <select style="font-size:12px" class="form-control" name="amount"
                                placeholder="Seleccione los programas de su interes" required>
                                <option value selected>Desde $500.000 hasta $80.000.000</option>
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
                        <div class="col-12 col-sm-6 col-md-6 mb-3">
                            <label class="labelInput" for="term">Indícanos el plazo que deseas<span class="text-danger"
                                    style=" font-weight: bold; "> * </span></label>
                            <select style="font-size: 14px" class="form-control" name="term"
                                placeholder="Seleccione los programas de su interes" required>
                                <option value selected>Desde 13 hasta 120 meses...</option>
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
                        <div class="col-md-12 mb-3">
                            <label class="labelInput" for="entity">De que entidad eres <span class="text-danger"
                                    style=" font-weight: bold; "> * </span></label>
                            <select class="form-control" name="entity"
                                placeholder="Seleccione los programas de su interes" required>
                                <option value selected>Selecciona tu entidad...</option>
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
                </div>
                <div class="form-group " style="text-align:center; font-size:11px;margin-bottom: 2%;">
                    <p style="margin-bottom: 2%;">Acepto Términos, condiciones y Política de tratamiento de
                        datos
                        <input required style="height:auto " type="checkbox" name="terms_and_conditions" value="1">
                    </p>
                </div>
                <div class="form-row   ">
                    <div class="col-md-12  ">

                        <button onclick="confirmEmail()" id=" boton" style="cursor: pointer;" type="submit"
                            class="input-button boton-form2 form-control"> YA ESTOY LISTO PARA
                            SOLICITARLO</button>

                    </div>
                </div>
                <p class="mt-2" style="font-size: 12px;margin-top: 4px !important;margin-bottom: -2%;">
                    La aprobación del monto y plazo sujetos a políticas de crédito.</p>
                <p class="mt-2" style="font-size: 12px;margin-top: 8px !important;margin-bottom: 0%;">
                    Dejanos tus datos y un
                    asesor se comunicara contigo para continuar con tu solicitud. </p>
                <p style="font-size: 10px; margin-top: 2px !important; margin-bottom: -24px !important;"> Si
                    quieres más información comunicate con nosotros a este WhatsApp 312 2399959
                </p>
            </div>
    </div>
</div>