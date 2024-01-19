<?php

require_once __DIR__ . '/prodotti.php';

class Attrezzi extends Prodotti
{
    public $sconto;

    public function __construct($img, $nome, $prezzo, Categorie $categoria, $sconto)
    {
        parent::__construct($img, $nome, $prezzo, $categoria);
        $this->sconto = $sconto;
    }
}
