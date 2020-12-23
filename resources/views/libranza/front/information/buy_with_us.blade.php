@extends('libranza.front.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('modules/libranza/public/css/information/app.min.css') }}" />
@endsection
@section('tags')
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-164894259-1', {
            'page_title': 'Por qué comprar con nosotros',
            'page_path': "/por-que-comprar-con-nosotros"
        });

    </script>
@endsection
@section('content')
    <article class="contianer-text-information">
        <h1>¿Por qué comprar con nosotros?</h1>
        <h2>49 años respaldan tu compra</h2>
        <section>
            <p>Lagobo Distribuciones S.A.S. ha entregado satisfactoriamente electrodomésticos y tecnología a más de
                500mil clientes y ha sido considerada por Samsung, LG, Sony y otras marcas como la empresa con los más
                altos niveles de atención y servicio al cliente.
            </p>
        </section>
        <section>
            <h2>Por economía</h2>
        </section>
        <section>
            <p>Con Oportunidades.com.co siempre encuentras las mejores ofertas del mercado para que compres con la
                satisfacción de obtener el mejor producto y al mejor precio.
            </p>
        </section>
        <section>
            <h2>Por Comodidad</h2>
        </section>
        <section>
            <p>Compra desde la comodidad de tu casa, en tu computador o desde tu dispositivo móvil y recibe tus
                productos
                en tu casa. Evita largas filas para pagar los productos que quieres comprar, caminar interminablemente
                por
                los pasillos de esas grandes tiendas y cargar paquetes
            </p>
        </section>
        <section>
            <h2>Por seguridad</h2>
        </section>
        <section>
            <p>Oportunidades.com.co cen alianza con Pay U, ofrece a sus cliente una pasarela confiable y segura que
                cuenta
                con certificados y protocolos de seguridad antifraude para garantizar su compra segura.
            </p>
        </section>
        <section>
            <h2>Facilidad de pago</h2>
        </section>
        <section>
            <p>Nuestro sistema de pago integrado con la Pasarela de pagos Pay U te permitirá elegir la opción de pago
                con
                tarjeta de crédito, PSE y otros como Efecty y Vía Baloto. Selecciona la opción que se ajuste a tu
                necesidad
                y disfruta de tus nuevos productos
            </p>
        </section>
        <section>
            <h2>Velocidad en las entregas</h2>
        </section>
        <section>
            <p>Trabajamos para que tus productos estén en el menor tiempo posible en tu casa, porque no hay nada más
                satisfactorio que tener rápido lo que compras para disfrutarlo a plenitud.
            </p>
        </section>
    </article class="contianer-text-information">
@endsection
