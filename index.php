<?php
// Importo lo "strato dati"
require __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <h2 class="text-center mb-4">Cat&Dog House</h2>
        </div>
        <div class="row">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <img class="w-50" src="<?= $prodotto->img ?>"> <br>
                                <?= $prodotto->name . " " . $prodotto->weight . " " . $prodotto->type_of ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?= $prodotto->prodotti->name . " " . $prodotto->prodotti->weight ?>
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?= $prodotto->prodotti->typology . " " . $prodotto->prodotti->expiration ?>
                            </h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>