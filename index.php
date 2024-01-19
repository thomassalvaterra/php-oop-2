<?php

require __DIR__ . '/data.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <h2 class="text-center my-5">PetFriendly</h2>
        </div>
        <div class="row">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <img class="w-50 center" src="<?= $prodotto->img ?>"> <br>
                            <h5 class="card-title">
                                <?= $prodotto->categoria->descrizione ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?= $prodotto->nome . " " . $prodotto->prezzo ?>

                            </h6>
                            <p class="card-text">
                                <?php
                                if ($prodotto instanceof Giochi) {
                                    echo "Prodotto Soggetto ad una scontistica del ->  " . $prodotto->sconto;
                                } else if ($prodotto instanceof Cibo) {
                                    echo "Il prodotto scade il " . $prodotto->scadenza;
                                } else if ($prodotto instanceof Attrezzi) {
                                    echo "Prodotto Soggetto ad una scontistica del -> " . $prodotto->sconto;
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>