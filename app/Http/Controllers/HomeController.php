<?php

namespace App\Http\Controllers;

use App\Repositories\Pokemons;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $pokemons;
    protected $pokeImages;

    /**
     * Create a new controller instance.
     *
     * @param Pokemons $pokemons
     * @param Pokemons $pokeImages
     */
    public function __construct(Pokemons $pokemons, Pokemons $pokeImages)
    {
        $this->middleware('auth');
        $this->pokemons = $pokemons;
        $this->pokeImages = $pokeImages;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index()
    {
        $pokemons = $this->pokemons->all();
        $pokeImages = $this->pokemons->allImages();

        return view('home.index', [
            'pokemons' => $pokemons->results,
            'pokeImages' => $pokeImages->sprites->front_default

        ]);

    }


}
