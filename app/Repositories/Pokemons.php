<?php

namespace App\Repositories;
use GuzzleHttp\Client;


class Pokemons
{
    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function all() {
        $client = new Client(['base_uri' => 'https://pokeapi.co/api/v2/']);
        $response = $client->request('GET', 'pokemon');
        $pokemons = json_decode($response->getBody()->getContents());

        return $pokemons;
    }
    public function allImages() {
        $client = new Client(['base_uri' => 'https://pokeapi.co/api/v2/pokemon/']);
        $response = $client->request('GET', '{$id}');
        $pokemons = json_decode($response->getBody()->getContents());
        dd($response);

        return $pokemons;
    }


}