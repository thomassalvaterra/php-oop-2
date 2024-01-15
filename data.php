<?php

require_once __DIR__ . '/Models/categories.php';
require_once __DIR__ . '/Models/prodotti.php';

$prodotti = [
    new Category(
        "https://www.purina.it/sites/default/files/styles/ttt_image_510/public/2021-02/BREED%20Hero%20Mobile_0026_siberian_husky.jpg?itok=glDRcRov",
        "Bobby",
        "15kg",
        "Husky",
        new Product("BigDog", "250gr", "senior dog", "03/04/2024")
    ),
    new Category(
        "https://www.purina.it/sites/default/files/styles/ttt_image_510/public/2021-02/BREED%20Hero%20Mobile_0103_great_dane.jpg?itok=pBPijdeO",
        "Alex",
        "20kg",
        "Alano",
        new Product("DogSafe", "100gr", "junior dog", "20/07/2024")
    ),
    new Category(
        "https://www.purina.it/sites/default/files/2021-02/CAT%20HERO_0021_Scottish_fold.jpg",
        "Sissi",
        "3kg",
        "Scottish Fold",
        new Product("Felix", "100gr", "junior cat", "24/08/2024")
    ),
    new Category(
        "https://i0.wp.com/www.cremazioneanimali.cloud/wp-content/uploads/2019/11/persiano-blu-1280x720.jpg?resize=640%2C360&ssl=1",
        "Dixi",
        "4.5kg",
        "Persiano",
        new Product("Whisky", "250gr", "senior cat", "14/09/2024")
    )
];
