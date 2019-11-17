<?php
use GuzzleHttp\Client;
require 'vendor/autoload.php';

$apiUrl = "https://swapi.co/api/";

$client = new Client();

try{   
    //hacemos la petición a un endpoint 
    $res = $client->request('GET', $apiUrl . 'people/1');
    $peli = $client->request('GET', $apiUrl . 'films/4');

}catch(Exception $e){
    echo "ERROR";
    return;
}


//     https://swapi.co/api/films/4/
//     https://swapi.co/api/planets/8/

echo "El nombre del personaje con ID 1 es: " . json_decode($res->getBody(), true)['name'] . "\n";  //True devuelve un array.
echo '<br/>';
echo "Pelicula amenaza fantasma: " . json_decode($peli->getBody(), true)['title'] . "\n";
echo '<br/>';
echo "Array Planetas: " . json_decode($peli->getBody(), true)['planets'] . "\n";
echo '<br/>';
echo '<br/>';


$arrayPlanetas = json_decode($peli->getBody(), true)['planets'];


foreach($arrayPlanetas as $clave => $valor){
    $p = $client->request('GET', $valor);
    echo "Paneta: " . json_decode($p->getBody(), true)['name'] . "\n";
    echo '<br/>';


}