<?php

require_once __DIR__ . '/prodotti.php';

class Category
{
    public $img;
    public $name;
    public $weight;
    public $type_of;
    public $prodotti;

    public function __construct($img, $name, $weight, $type_of, Product $prodotti)
    {
        $this->img = $img;
        $this->name = $name;
        $this->weight = $weight;
        $this->type_of = $type_of;
        $this->prodotti = $prodotti;
    }
}
