<?php

require 'Pokemon.php';
require 'EnergyType.php';
require 'Attack.php';
require 'Weakness.php';
require 'Resistances.php';

$energyTypes = [];
$pokemons = [];
$attacks = [];
$weaknesses = [];
$resistances = [];

array_push($energyTypes, new \EnergyType('Lightning'));
array_push($energyTypes, new \EnergyType('Fire'));
array_push($energyTypes, new \EnergyType('Water'));
array_push($energyTypes, new \EnergyType('Fighting'));

array_push($attacks, new \Attack('Electric Ring', 50));
array_push($attacks, new \Attack('Pika Punch', 20));
array_push($attacks, new \Attack('Head Butt', 10));
array_push($attacks, new \Attack('Flare', 30));

array_push($weaknesses, new \Weakness($energyTypes[1], 1.5));
array_push($weaknesses, new \Weakness($energyTypes[2], 2.0));

array_push($resistances, new \Resistances($energyTypes[3], 20));
array_push($resistances, new \Resistances($energyTypes[0], 10));

array_push($pokemons, new \Pokemon('Pikachu', $energyTypes[0], 60, [$attacks[0], $attacks[1]], [$weaknesses[0]], [$resistances[0]]));
array_push($pokemons, new \Pokemon('Charmeleon', $energyTypes[1], 60, [$attacks[2], $attacks[3]], [$weaknesses[1]], [$resistances[0]]));

foreach ($pokemons as $pokemon) {
    var_dump($pokemon->getHealth());
}

$pokemons[0]->doAttack($attacks[0], $pokemons[1]);
$pokemons[1]->doAttack($attacks[3], $pokemons[0]);

foreach ($pokemons as $pokemon) {
    var_dump($pokemon->getHealth());
}