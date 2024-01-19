<?php

require_once __DIR__ . '/prodotti.php';

class Cibo extends Prodotti
{
    public $scadenza;

    public function __construct($img, $nome, $prezzo, Categorie $categoria, $scadenza)
    {
        parent::__construct($img, $nome, $prezzo, $categoria);
        $this->scadenza = $scadenza;
    }
}
