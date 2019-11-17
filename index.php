<?php

use StarWars\Pelicula;
use StarWars\StarWarsEnciclopedia;

require 'vendor/autoload.php';


$pelicula = new Pelicula(4, 'La amenaza fantasma');

$enciclopedia = new StarWarsEnciclopedia();

$planetas = $enciclopedia->getPlanetasPorPelicula($pelicula);

echo "<h2>Datos de Star Wars Episodio I: La Amenaza Fantasma</h2>";

echo "<ul>";
foreach ($planetas as $planeta) {
    echo "<li>" . $planeta->getNombre() . "</li>";
}

echo "</ul>";



//  $response = $client->request('GET', self::API_URL . 'films/' . $pelicula->getId());

//  $datosPelicula =  json_decode($response->getBody(), true);

$datosPelicula = $enciclopedia->getDatos($pelicula);

//print_r($datosPelicula);




// echo "<ul>";
// foreach ($datosPelicula as $k => $v) {
//     if (is_array (  $v )){
//         echo "<li>" . $k . "</li>";
//         echo "<ul>";
//         foreach ($v as $k2 => $v2) {
//             echo "<li>" . $v2. "</li>";
//         }
//         echo "</ul>";
//     }else{
//         echo "<li>" . $k . ' : ' . $v. "</li>";
//     }
// }
// echo "</ul>";

include('index.html');
