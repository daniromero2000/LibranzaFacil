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
        return view('libranza.front.index', [
            'cities' => $this->cityInterface->listCities()
        ]);
    }
}
