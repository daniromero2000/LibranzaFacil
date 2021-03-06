<header>
    <div class="row mx-0 justify-content-center container-header">
        <div class="first-div-header d-flex"> <img
                src="{{ asset('modules/libranza/public/img/logos/logo-libranzafacil.png') }}" alt=""
                onclick="reloadUrl('{{ route('home') }}',1)" class="m-auto"> </div>
        <div class="col d-flex px-0 col-header-responsive"> <img
                src="{{ asset('modules/libranza/public/img/logos/logo-oportunidades.png') }}" alt=""
                onclick="reloadUrl('https://www.oportunidades.com.co/',2)" class="m-auto second-logo"> </div>
        <div class="col d-flex px-0 col-header-responsive"> <img
                src="{{ asset('modules/libranza/public/img/logos/lagobo-grupo.png') }}" alt=""
                onclick="reloadUrl('https://www.lagobo.com/',2)" class="m-auto second-logo"> </div>
        <div class="last-div-header pl-0" id="logo-hide"> <img
                src="{{ asset('modules/libranza/public/img/icons/51-años.jpg') }}" alt="" class="logo-yellow-header">
        </div>
    </div>
</header>
<nav class="navbar navbar-expand navbar-light bg-white">
    <div class="mr-auto">
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link {{ request()->url() == route('home') ? 'active' : '' }}"
                    href="{{ route('home') }}">Inicio</a> </li>
            <li class="nav-item"> <a class="nav-link {{ request()->url() == route('benefit') ? 'active' : '' }}"
                    href="{{ route('benefit') }}">Beneficios</a> </li>
            <li class="nav-item"> <a class="nav-link {{ request()->url() == route('about') ? 'active' : '' }}"
                    href="{{ route('about') }}">Nosotros</a> </li> {{-- <li
                class="nav-item"> <a class="nav-link {{ request()->url() == route('regulation') ? 'active' : '' }}"
                    href="{{ route('regulation') }}">¿como adquirir tu crédito?</a> </li>
            --}}
        </ul>
    </div> <a href="{{ route('form-libranza') }}" class="button-nav"> <img
            src="{{ asset('modules/libranza/public/img/icons/peso.png') }}" class="" alt=""> Solicita tu crédito aqui
    </a>
</nav>
