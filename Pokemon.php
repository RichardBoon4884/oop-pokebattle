<?php

class Pokemon
{
    protected $name;
    protected $energyType;
    protected $hitPoints;
    protected $health;
    protected $attacks;
    protected $weakness;
    protected $weaknessMultiplier;
    protected $resistance;
    protected $resistanceValue;

    function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $weaknessMultiplier, $resistance, $resistanceValue)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $hitPoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->weaknessMultiplier = $weaknessMultiplier;
        $this->resistance = $resistance;
        $this->resistanceValue = $resistanceValue;
    }

    function __toString()
    {
        return $this->name;
    }
}