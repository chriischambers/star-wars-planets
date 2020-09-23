<?php

namespace ChriisChambers\StarWarsPlanets;

use GuzzleHttp\Client;

class PlanetFactory
{
    const API_ENDPOINT = 'http://swapi.dev/api/planets/';

    private $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    public function getRandomPlanet()
    {
        $response = $this->client->get(self::API_ENDPOINT . rand(1, 64));

        $planet = json_decode($response->getBody()->getContents());

        return $planet->name;
    }
}
