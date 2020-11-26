<?php

namespace App\Http\Controllers\Front;

use Modules\Generals\Entities\Cities\Repositories\Interfaces\CityRepositoryInterface;

class HomeController
{
    private $cityInterface;

    public function __construct(
        CityRepositoryInterface $cityRepositoryInterface
    ) {
        $this->cityInterface  = $cityRepositoryInterface;
    }

    public function index()
    {
        $sliders = collect([
            ['img' => 'importanciaSIC.jpg', 'texto' => '', 'textoBoton' => 'Ver más', 'title' => 'Crédito Libranza', 'color' => '#fdbf3c', 'position_text' => 'left2', 'enlace' => 'covid'],
            ['img' => 'tarjetaCreditoOportuya.jpg', 'texto' => '<p class="sliderPrincipal-textSlider">Obtén beneficios que otros no tienen con <br /> nuestra tarjeta de crédito Oportuya</p>', 'textoBoton' => 'Solicita tu tarjeta ya', 'title' => 'Tarjeta Oportuya', 'color' => '#1d84c3', 'position_text' => 'bottom', 'enlace' => '/credito-electrodomesticos/catalogo'],
            // ['img' => 'creditoMotos.jpg', 'texto' => '<h1 class="sliderPrincipal-titleSlider">Crédito <strong>Motos</strong></h1><p class="sliderPrincipal-textSlider">Te damos crédito para que pongas a rodar tus aventuras.</p>', 'textoBoton' => 'Obtener mi moto Ya', 'title' => 'Crédito Motos', 'color' => '#ec2d35', 'position_text' => 'left', 'enlace' => '/motos'],
            ['img' => 'creditoLibranza.jpg', 'texto' => '<h1 class="sliderPrincipal-titleSlider">Crédito <strong>Libranza</strong></h1><p class="sliderPrincipal-textSlider">¡Porque es momento de disfrutar la vida!</p>', 'textoBoton' => 'Solicitar crédito', 'title' => 'Crédito Libranza', 'color' => '#fdbf3c', 'position_text' => 'left', 'enlace' => 'libranza'],
            ['img' => 'seguros.jpg', 'texto' => '<p class="sliderPrincipal-textSlider">Asegura tu patrimonio y el bienestar <br /> de quienes están a tu lado</p>', 'textoBoton' => 'Asegúrate Ya', 'title' => 'Seguros', 'color' => '#2aace0', 'position_text' => 'bottom', 'enlace' => '/seguros']
        ]);
        return view('libranza.front.index', [
            'cities' => $this->cityInterface->listCities()
        ]);
    }
}
