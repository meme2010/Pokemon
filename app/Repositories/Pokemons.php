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
    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function findById(int $id) {
        $client = new Client(['base_uri' => 'https://pokeapi.co/api/v2/' ]);
        $response = $client->request('GET', 'pokemon/' . $id);
        $pokemons = json_decode($response->getBody()->getContents());
        return $pokemons;
    }


}
