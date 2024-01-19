<?php
require_once __DIR__ . '/categories.php';

class Prodotti
{
    public $img;
    public $nome;
    public $prezzo;
    public $categoria;

    public function __construct($img, $nome, $prezzo, Categorie $categoria)
    {
        $this->img = $img;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }
}
