<?php

class Attack
{
    protected $name;
    protected $damage;

    function __construct($name, $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }

    function __toString()
    {
        return $this->name;
    }
}