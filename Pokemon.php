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
        return $this->weakness;
    }

    public function setWeakness($weakness)
    {
        $this->weakness = $weakness;
    }

    public function getWeaknessMultiplier()
    {
        return $this->weaknessMultiplier;
    }

    public function setWeaknessMultiplier($weaknessMultiplier)
    {
        $this->weaknessMultiplier = $weaknessMultiplier;
    }

    public function getResistance()
    {
        return $this->resistance;
    }

    public function setResistance($resistance)
    {
        $this->resistance = $resistance;
    }

    public function getResistanceValue()
    {
        return $this->resistanceValue;
    }

    public function setResistanceValue($resistanceValue)
    {
        $this->resistanceValue = $resistanceValue;
    }
}