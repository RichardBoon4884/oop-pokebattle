<?php

class Pokemon
{
    protected $name;
    protected $energyType;
    protected $hitPoints;
    protected $health;
    protected $attacks;
    protected $weaknesses;
    protected $resistances;

    function __construct($name, EnergyType $energyType, $hitPoints, array $attacks, array $weaknesses, array $resistances)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $hitPoints;
        $this->attacks = $attacks;
        $this->weaknesses = $weaknesses;
        $this->resistances = $resistances;
    }

    function __toString()
    {
        return $this->name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEnergyType()
    {
        return $this->energyType;
    }

    public function setEnergyType($energyType)
    {
        $this->energyType = $energyType;
    }

    public function getHitPoints()
    {
        return $this->hitPoints;
    }

    public function setHitPoints($hitPoints)
    {
        $this->hitPoints = $hitPoints;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth($health)
    {
        $this->health = $health;
    }

    public function getAttacks()
    {
        return $this->attacks;
    }

    public function setAttacks($attacks)
    {
        $this->attacks = $attacks;
    }

    public function getWeakness()
    {
        return $this->weaknesses;
    }

    public function setWeakness($weaknesses)
    {
        $this->weaknesses = $weaknesses;
    }

    public function getresistances()
    {
        return $this->resistances;
    }

    public function setresistances($resistances)
    {
        $this->resistances = $resistances;
    }

    public function doAttack(Attack $attack, Pokemon $pokemon)
    {
        if (!in_array($attack, $this->attacks)) {
            // Pokemon can't do this attack.
            return false;
        }

        $pokemon->underAttack($attack, $this->energyType);

        return true;
    }

    public function underAttack(Attack $attack, energyType $energyTypeAttacker)
    {
        $attackDamageLeft = $attack->getDamage(); //

        if (in_array($energyTypeAttacker, $this->resistances)) { // Check if this pokemon has a resistance for the attack.
            $resistancesId =  array_search($energyTypeAttacker, $this->resistances); // Get the ID of the array
            $resistance = $this->resistances[$resistancesId];

            $attackDamageLeft = $attackDamageLeft-$resistance->value;
        }

        if (in_array($energyTypeAttacker, $this->weaknesses)) { // Check if this pokemon has a resistance for the attack.
            $weaknessesId =  array_search($energyTypeAttacker, $this->weaknesses); // Get the ID of the array
            $weaknesses = $this->weaknesses[$weaknessesId];

            $attackDamageLeft = $attackDamageLeft*$weaknesses->weaknessMultiplier;
        }

        $this->health = $this->health-$attackDamageLeft;

        return true;
    }
}