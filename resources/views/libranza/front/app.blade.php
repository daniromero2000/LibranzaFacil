<!DOCTYPE html>
<html lang="es">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
        <meta name="author" content="Oportunidadaes Libranza">
        <title>Libranza Fácil - Oportunidades Libranza</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('modules/libranza/public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/main.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/slick.css"')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/whatsapp.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('modules/libranza/public/css/slick-theme.css')}}" />
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c1313463c5.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" href="resources/assets/oportunidadesServicios.ico" />
        <meta name="description" content="Ingresa a Libranzafacil.com y Obten tu crédito por Libranza para pensionados,
    docentes y militares muy fácil, solicítalo Online." />
        <meta property="og:type" content="Website" />
        <meta property="og:title" content="Libranza Facil" />
        <meta property="og:description" content="Ingresa a Libranzafacil.com y Obten tu crédito por Libranza para pensionados,
    docentes y militares muy fácil, solicítalo Online. Crédito por Libranza para pensionados, docentes y militares, hasta
    con 120 meses de plazo, aprobamos hasta los 84 años y Somos especialistas en Fondos Privados, Si estas reportado, te
    damos una segunda Oportunidad." />
        <meta property="og:image" content="https://libranzafacil.com/resources/assets/Portada_OGV.jpg" />
        <meta property="og:url" content="https://libranzafacil.com/" />
        <meta property="og:site_name" content="LibranzaFacil.com" />
        <!-- Global site tag (gtag.js) - Google Ads: 781153823 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-781153823"></script>
        @yield('og')
        <script>
            window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-781153823');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164894259-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-164894259-1');
        </script>
        <script>
            (function(h, e, a, t, m, p) {
            m = e.createElement(a);
            m.async = !0;
            m.src = t;
            p = e.getElementsByTagName(a)[0];
            p.parentNode.insertBefore(m, p);
        })(window, document, 'script', 'https://u.heatmap.it/log.js');
        </script>
        <style>
            #emailAlert {
                display: block;
                padding: 0px 15px;
                font-size: 11px;
                font-weight: bold;
                position: absolute;
                display: none;
            }

        </style>
        @yield('styles')
    </head>

    <body>
        @include('libranza.front.layouts.header')
        @yield('content')
        @include('libranza.front.footer')

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('modules/libranza/public/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('modules/libranza/public/js/slick.min.js')}}"></script>
    <script src="{{asset('modules/libranza/public/js/jqueryMigrate.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{{asset('modules/libranza/public/js/whatsapp.min.js')}}"> </script>
    <script>

    </script>
    <script type="text/javascript">
        // 1. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '100%',
            width: '100%',
            playerVars: {
                loop: 1,
                controls: 1,
                showinfo: 1,
                autohide: 1,
                modestbranding: 1,
                autoplay: 0,
                vq: 'hd720'
            },
            videoId: 'QQdp5gF7LAw',
            events: {
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // 3. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    var done = false;
    </script>

    <script type="text/javascript">
        $(function() {
        $('#WAButton').floatingWhatsApp({
            phone: '573138701355', //WhatsApp Business phone number
            headerTitle: 'Chatea con nosotros por WhatsApp !', //Popup Title
            popupMessage: 'Hola, como podemos ayudarte?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="whatsapp.svg" />', //Button Image
            // headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            position: "right" //Position: left | right

        });
    });
    </script>
    <script type="text/javascript">
        var email = document.getElementById("email").value;
    var emailConfirm = document.getElementById("emailConfirm").value;

    if (email != emailConfirm) {
        document.getElementById("emailAlert").style.display = "block";
        document.getElementById("email").value = "";
    } else {
        document.getElementById("emailAlert").style.display = "none";
    }
    </script>
    <script type="text/javascript">
        // 1. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    function stopVideo() {
        player.stopVideo();
    }
    </script>
    <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "Libranza Facil",
        "url": "https://libranzafacil.com/",
        "sameAs": [
            "https://www.facebook.com/almacenes.oportunidades/",
            "https://www.instagram.com/almacenes.oportunidades/"
        ],
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://libranzafacil.com/{search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-164894259-1');
    </script>

    @yield('scripts')

</html>