<?php

require __DIR__ . "/Models/Movie.php";

$starWars = new Movie('Star Wars, la minacciafantasma', 'starwars.jpeg', 160);

$avatar2 = new Movie('Star Wars, la minacciafantasma', 'avatar2.jpeg', 240);

$avengersInfinityWar = new Movie('Star Wars, la minacciafantasma', 'images/avengersinfinitywar.jpeg', 20);

echo $starWars->getMovieDetails();

echo '<br/>';

echo $avatar2->getMovieDetails();

echo '<br/>';

echo $avengersInfinityWar->getMovieDetails();
    
echo '<br/>';