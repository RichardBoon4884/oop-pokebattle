<?php

require 'Pokemon.php';
require 'EnergyType.php';
require 'Attack.php';

$energyTypes = [];
$pokemons = [];
$attacks = [];

array_push($energyTypes, new \EnergyType('Lightning'));
array_push($energyTypes, new \EnergyType('Fire'));
array_push($energyTypes, new \EnergyType('Water'));
array_push($energyTypes, new \EnergyType('Fighting'));

array_push($attacks, new \Attack('Electric Ring', 50));
array_push($attacks, new \Attack('Pika Punch', 20));
array_push($attacks, new \Attack('Head Butt', 10));
array_push($attacks, new \Attack('Flare', 30));

array_push($pokemons, new \Pokemon('Pikachu', $energyTypes[0], 60, [$attacks[0], $attacks[1]], $energyTypes[1], 1.5, $energyTypes[3], 20));
array_push($pokemons, new \Pokemon('Charmeleon', $energyTypes[1], 60, [$attacks[2], $attacks[3]], $energyTypes[2], 2.0, $energyTypes[0], 10));

foreach ($pokemons as $pokemon) {
    var_dump($pokemon);
}