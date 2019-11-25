<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Pokemons;


class HomeController extends Controller
{
    protected $pokemons;


    /**
     * Create a new controller instance.
     *
     * @param Pokemons $pokemons
     */
    public function __construct(Pokemons $pokemons)
    {
        $this->middleware('auth');
        $this->pokemons = $pokemons;
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

        dd($pokemons->results);

        return view('home', [
            'pokemons' => $pokemons->results,
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function pokemon()
    {
        $pokemon = $this->pokemons->findById($id);

        dd($pokemons->results);

        return view('home', [
            'pokenmon' => $pokemon->results,
        ]);
    }
}
