<?php

namespace App\Http\Controllers;

use App\Repositories\Pokemons;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $pokemons;

    /**
     * HomeController constructor.
     * @param Pokemons $pokemons
     */
    public function __construct(Pokemons $pokemons)
    {
        $this->middleware('auth');
        $this->pokemons = $pokemons;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index()
    {
        $pokemons = $this->pokemons->all();
        return view('home.index', [
            'pokemons' => $pokemons,

        ]);
    }

    /**
     * @param $pokemon
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($pokemon)
    {
        $pokemon = $this->pokemons->find($pokemon);
        return view('home.show', compact('pokemon') );

    }

    /**
     * @param Request $req
     */
    public function create(Request $req) {

    }


}
