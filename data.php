<?php
require_once __DIR__ . '/Models/categories.php';
require_once __DIR__ . '/Models/prodotti.php';
require_once __DIR__ . '/Models/giochi.php';
require_once __DIR__ . '/Models/cibo.php';
require_once __DIR__ . '/Models/attrezzi.php';

$cane = new Categorie(
    "Ottimo Per Cani"
);
$gatto = new Categorie(
    "Ottimo Per Gatti"
);
$roditore = new Categorie(
    "Ottimo Per Ratti"
);

$prodotti = [
    new Prodotti(
        "https://imgs.search.brave.com/hMTf-3G2CNY1HgLVe5nOzJie5Cy1wCQ-EdIEKlMSoRU/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NzFrSm9xZ0RDQVMu/anBn",
        "Crocchette",
        "15€",
        $cane
    ),
    new Giochi(
        "https://imgs.search.brave.com/sOEo-Trzn4hikkB2umkYdcpCgKT68xH-_nuvoDHbB-Q/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NzFPVlA3cTBKREwu/anBn",
        "Pallina",
        "4€",
        $gatto,
        "40%"
    ),
    new Cibo(
        "https://imgs.search.brave.com/Ma7fjHHV3cJjIG8ojR9N2PTuMgAUJBv4nrXrLBrC3QY/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NTFqYm1RUXpXeEwu/anBn",
        "Bastoncini Di Coniglio",
        "17€",
        $roditore,
        "10/01/10"
    ),
    new Attrezzi(
        "https://imgs.search.brave.com/smNpbGCgu2fDw0HzV0pslrW6faRqUPR_uVrST8QXO2w/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NzFiSG9HSjFiU0wu/anBn",
        "Guinzaglio",
        "20€",
        $gatto,
        "20%"
    ),
];
