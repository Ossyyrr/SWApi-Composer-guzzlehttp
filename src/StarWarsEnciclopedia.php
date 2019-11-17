<?php

namespace StarWars;

use GuzzleHttp\Client;

class StarWarsEnciclopedia
{
    private const API_URL = "https://swapi.co/api/";

    public function getPlanetasPorPelicula(Pelicula $pelicula): array
    {
        $planetas = [];

        $client = new Client();

        $response = $client->request('GET', self::API_URL . 'films/' . $pelicula->getId());

        $datosPelicula =  json_decode($response->getBody(), true);

        $urlPlanetas = $datosPelicula['planets'];

        foreach ($urlPlanetas as $urlPlaneta) {
            $datoPlaneta = json_decode($client->request('GET', $urlPlaneta)->getBody(), true);
            $planeta = new Planeta($datoPlaneta['name']);
            $planetas[] = $planeta;
        }

        return $planetas;
    }

}