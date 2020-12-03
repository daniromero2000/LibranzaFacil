<div class="container-banner-form">
    <img src="{{ asset('modules/libranza/public/img/banners/banner-form.png') }}" class="w-100"
        alt="Con-tu-crédito-por-libranza-ahora-es-más-fácil-unificar-tus-deudas">
    <div class="container-form">
        <h1>¡La manera mas fácil de tener <span>crédito por libranza!</span></h1>
        <h2>Prestamos hasta los 84 años de edad</h2>

        <div class="form">
            <h3>Cuéntanos sobre ti <b>(ingresa tus datos personales)</b></h3>
            <form method="post" id="form-libranza" onsubmit="event.preventDefault();validateEmails()"
                action="{{ route('libranza.store') }}">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="name" placeholder="Nombres*" validation-pattern="name" required>

                    </div>
                    <div class="col-6">
                        <input type="text" name="last_name" placeholder="Apellidos*" validation-pattern="name" required>

                    </div>
                    <div class="col-6">
                        <input type="text" name="identification_number" placeholder="Número de cédula*"
                            validation-pattern="IdentificationNumber" required>

                    </div>
                    <div class="col-6">
                        <input type="text" name="telephone" placeholder="Teléfono celular*"
                            validation-pattern="telephone" required>

                    </div>
                    <div class="col-6">
                        <input type="email" id="email" name="email" placeholder="Correo electrónico*"
                            validation-pattern="email" required>

                    </div>
                    <div class="col-6">
                        <input type="email" id="emailConfirm" class="" name="emailConfirm"
                            placeholder="Confirmar correo electrónico*" validation-pattern="email" required>
                        <div id="invalid" class="invalid hide">
                            Los correos no coinciden, vuelve a intentar !
                        </div>
                        <div id="valid" class="valid hide">
                            Los correos coinciden.
                        </div>
                    </div>
                    <div class="col-6">
                        <select id="city_id" class="select" name="city_id" required>
                            <option value="" selected>Busca tu ciudad*</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->city }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <select id="kind_of_person" class="select" name="kind_of_person" required>
                            <option value="Pensionado" selected>Pensionado</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select name="amount" id="amount" class="select" required>
                            <option value selected>Indícanos el monto a solicitar*</option>
                            <option value="500000">$ 500.000 </option>
                              @foreach ($amounts as $amount)
                                <option {{ $amountOrigin == $amount ? 'selected="selected"' : ''}} value="{{ $amount }}">$ {{ number_format($amount) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <select name="term" id="term" class="select" required>
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
                            <option value="120">132</option>
                            <option value="120">144</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <select name="entity" class="select" id="entity" required>
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

                    @if ($product)
                        <div class="col-12">
                            <select name="lead_product_id" class="select" id="lead_product_id" required>
                                @foreach ($products as $product)
                                    <option {{ request()->input('linea') == $product->product ? 'selected="selected"' : ''}} value="{{ $product->id }}">{{ $product->product }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                </div>
                <div class="container-conditions">
                    <p>
                        <a target="_blank" href="{{ route('terms.and.conditions') }}">Acepto Términos, condiciones</a> y
                        <a target="_blank" href="{{ route('data.treatment.policy') }}">Política de tratamiento de
                            datos</a>
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                    </p>
                </div>
                <div>
                    <button type="submit" class="btn-form">Ya estoy listo para solicitarlo</button>

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
