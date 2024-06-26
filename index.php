<?php
include __DIR__ . "/data.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>

    <?php
    foreach ($prodotti as $prodotto) {
        echo "<p>" . $prodotto->getDescrizione() . "</p>";
    }
    ?>

</body>

</html>