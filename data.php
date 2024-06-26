<?php

include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Gioco.php";
include __DIR__ . "/models/Cuccia.php";
include __DIR__ . "/models/Cibo.php";

$Cane = new Categoria("Per Cani", "Per tutte le razze");
$Gatto = new Categoria("Per Gatti", "Per tutti i felini");

$prodottoAntiparassitario = new Cibo("Antiparassitario", 25, $Gatto);
$prodottoAntiparassitario->peso = "0.5kg";

$prodottoCuccia = new Cuccia("Cuccia casetta", 100, $Cane);
$prodottoCuccia->dimensioni = "80x80x120 cm";

$prodotti = [
    $prodottoAntiparassitario,
    $prodottoCuccia,
    new Gioco("Pallina rossa", 11, $Gatto, "spugna"),
    new Prodotto("Guinzaglio K-9", 5, $Cane)
];
