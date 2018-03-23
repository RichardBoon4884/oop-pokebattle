<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 23-Mar-18
 * Time: 09:13
 */
class Weakness
{
    protected $weaknessFor;
    protected $weaknessMultiplier;

    public function __construct(EnergyType $weaknessFor, $weaknessMultiplier)
    {
        $this->weaknessFor = $weaknessFor;
        $this->weaknessMultiplier = $weaknessMultiplier;
    }
}