<header>
    <div class="row mx-0 justify-content-center container-header">
        <div class="first-div-header d-flex">
            <img src="{{asset('modules/libranza/public/img/logos/logo-libranzafacil.png')}}" alt="" onclick="reloadUrl('{{route('home')}}',1)" class="m-auto">
        </div>

        <div class="col px-0 d-flex">
            <div class="row w-100 mx-0">
                <div class="col-12 px-0 m-auto py-2">
                    <div class="row w-100 mx-0">
                        <div class="container-icon-call d-flex">
                            <img src="{{asset('modules/libranza/public/img/icons/call-light.png')}}" class="icon-call"
                                alt="">
                        </div>
                        <div class="col pl-2 pr-0">
                            <span>Linea nacional</span>
                            <br>
                            <span>
                                <b>57 (1)484-2122 - 01 000 18 05 20</b> </span>
                        </div>
                    </div>
                </div>
                <div class=" col pl-1">
                    <img src=" {{asset('modules/libranza/public/img/icons/facebook-logo.png')}}" class="icons" alt="">
                    <img src="{{asset('modules/libranza/public/img/icons/instagram-logo.png')}}"
                        class="icons ml-2-responsive" alt="">
                    <span class="ml-2-responsive">
                        <b>Siguenos</b>
                    </span>
                </div>
            </div>
        </div>
        <div class="col d-flex px-0 col-header-responsive">
            <img src="{{asset('modules/libranza/public/img/logos/logo-oportunidades.png')}}" alt="" onclick="reloadUrl('https://www.oportunidades.com.co/',2)" class="m-auto second-logo">
        </div>

        <div class="last-div-header pl-0" id="logo-hide">
            <img src="{{asset('modules/libranza/public/img/icons/50-años.png')}}" alt="" class="logo-yellow-header">
        </div>
    </div>
</header>

<nav class="navbar navbar-expand navbar-light bg-white">
    <div class="mr-auto">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->url() == route('home')  ? 'active' : '' }}"  href="{{route('home')}}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->url() == route('benefit') ? 'active' : '' }}" href="{{route('benefit')}}">Beneficios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->url() == route('about') ? 'active' : '' }}" href="{{route('about')}}">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->url() == route('form-libranza') ? 'active' : '' }}"  href="{{route('form-libranza')}}">¿como adquirir tu crédito?</a>
            </li>
        </ul>
    </div>
    <a href="{{route('form-libranza')}}" class="button-nav">
        <img src="{{asset('modules/libranza/public/img/icons/peso.png')}}" class="" alt="">
        Solicita tu crédito aqui
    </a>
</nav>