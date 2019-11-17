<?php

use StarWars\Pelicula;
use StarWars\StarWarsEnciclopedia;

require 'vendor/autoload.php';


$pelicula = new Pelicula(4, 'La amenaza fantasma');

$enciclopedia = new StarWarsEnciclopedia();

$planetas = $enciclopedia->getPlanetasPorPelicula($pelicula);

echo "<h2>PLANETAS QUE SALEN EN LA AMENAZA FANTASMA:</h2>";

echo "<ul>";
foreach ($planetas as $planeta) {
    echo "<li>" . $planeta->getNombre() . "</li>";
}

echo "</ul>";