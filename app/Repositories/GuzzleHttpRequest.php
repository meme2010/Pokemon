<?php

namespace App\Repositories;


use GuzzleHttp\Client;

class GuzzleHttpRequest
{
    protected $client;

    /**
     * GuzzleHttpRequest constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $url
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function get($url) {
        $response = $this->client->request('GET', $url);
        $pokemons = json_decode($response->getBody()->getContents());
        return $pokemons;

    }

}