<?php

namespace App\Repositories;
use GuzzleHttp\Client;


class Pokemons extends GuzzleHttpRequest
{
    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function all() {
        return $this->get('pokemon');
    }

    /**
     * @param $pokemon
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function find($pokemon) {
        return $this->get("pokemon/{$pokemon}");
    }
}