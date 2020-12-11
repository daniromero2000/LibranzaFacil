<article class="video-container">
    <div class="row mx-0">
        <div class="col-info-video">
            <img src="{{asset('modules/libranza/public/img/banners/banner-2.png')}}" class="img-fluid"
                alt="Con-tu-crédito-por-libranza-ahora-es-más-fácil-unificar-tus-deudas">
            <img src="{{asset('modules/libranza/public/img/icons/play.png')}}" data-toggle="modal"
                data-target="#video-libranza" id="playvideo" alt="" class="play">
        </div>
        <div class="col-info">
            <section>
                <h1>Crédito para <b>pensionados</b></h1>
                <p>
                    Se parte de nuestra comunidad donde podrás conocer y adquirir todos nuestros producto y servicios
                    <b>(Crédito Libre
                        Inversión, Compra de Cartera y Crédito para Electrodomésticos)</b>, brindando un Mundo de
                    Oportunidades
                    para ti.
                </p>
                <a href="{{route('form-libranza')}}">Solicita tu crédito</a>
            </section>
        </div>
    </div>
    <div class="modal fade" data-backdrop="static" id="video-libranza" tabindex="-1"
        aria-labelledby="video-libranzaLabel" aria-hidden="true">
        <div class="modal-dialog modal-reset">
            <div class="modal-content">
                <a class="" data-dismiss="modal" id="close" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </a>
                <div class="embed-responsive embed-responsive-16by9 content-video content-iframe">
                    <iframe id="video1" width="560" height="315" src="https://www.youtube.com/embed/7vphBBaZNjk" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</article>