<?php

class Product
{
    public $name;
    public $weight;
    public $typology;
    public $expiration;

    public function __construct($name, $weight, $typology, $expiration)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->typology = $typology;
        $this->expiration = $expiration;
    }
}
