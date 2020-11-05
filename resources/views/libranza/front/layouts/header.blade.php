<div id="contenedor_carga">
    <div class="loader"></div>
</div>
<script>
    window.onload = function() {
            var contenedor = document.getElementById('contenedor_carga');
            contenedor.style.visibility = 'hidden';
            contenedor.style.opacity = '0';
        }
</script>
<script>
    function soloLetras(e) {
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
            especiales = [8, 37, 39, 46];

            tecla_especial = false
            for (var i in especiales) {
                if (key == especiales[i]) {
                    tecla_especial = true;
                    break;
                }
            }

            if (letras.indexOf(tecla) == -1 && !tecla_especial)
                return false;
        }

        function limpia() {
            var val = document.getElementById("miInput").value;
            var tam = val.length;
            for (i = 0; i < tam; i++) {
                if (!isNaN(val[i]))
                    document.getElementById("miInput").value = '';
            }
        }
</script>
<script>
    function validaNumericos(event) {
            if (event.charCode >= 48 && event.charCode <= 57) {
                return true;
            }
            return false;
        }
</script>
<!-- <div id="WAButton" style="z-index: 99999;"></div> -->
<nav class="navbar navbar-expand navbar-light bg-white">
    <div class="row w-100 d-flex align-items-center text-center row-reset">

        <div style="margin-left: auto;margin-right: auto;" class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-3 col-reset">
            <a href="/" style=" margin-top: 5px;" class="nav-link centrado"> <img class="w-imgLog"
                    src="{{asset('modules/libranza/public/resources/assets/LogoLibranza.png')}}" alt=""> <span
                    class="sr-only">(current)</span></a>
        </div>
        <div class="col-12 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-reset content-textTitleNav">
            <p class="titleNav">
                <span class="title-form mt-1 text-center ">
                    <strong>¿REPORTADO?</strong>
                </span>
                <br>
                <span class="title-form2 text-center" style="color:#1cbaf8">
                    Te damos una segunda <br>
                </span>
                <span class="title-form2 text-left" style="color:#1cbaf8">
                    <strong> oportunidad </strong>
                </span>
            </p>
        </div>
        <div style="margin-left: auto;margin-right: auto;"
            class="col-12 col-sm-3 col-md-2 col-lg-2 col-xl-2 col-reset siguenos text-center">
            <a class="contact-fb" href="https://www.facebook.com/almacenes.oportunidades/" target="_blank"><span
                    class="text-contact" style="color:#b1b1b1">Síguenos </span><i style="font-size: 40px;"
                    class="fab fa-facebook"></i></a>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand navbar-light bg-navbar">
    <div class="row w-100 d-flex align-items-center text-center row-reset">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="row w-100 d-flex align-items-center text-center row-reset">
                <div style="margin-left: auto;margin-right: auto;"
                    class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-reset">
                    <a href="/"><span class="text-nav">Inicio</span></a>
                </div>
                <div style="margin-left: auto;margin-right: auto;"
                    class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 col-reset">
                    <a href="https://www.oportunidades.com.co/"><span class="text-nav">Crédito para
                            Electrodomésticos </span></a>
                </div>
            </div>
        </div>
    </div>
</nav>