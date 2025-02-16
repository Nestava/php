<?php

if (
    !isset($_GET["nama"]) ||
    !isset($_GET["spesies"]) ||
    !isset($_GET["foto"]) ||
    !isset($_GET["asal"])
) {
    header("Location: page1.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_GET["nama"] ?></title>
</head>

<body>
    <h1 style="margin-left : 30px">
        <?= $_GET["nama"]; ?>
    </h1>
    <ul>
        <img src="<?= $_GET["foto"]; ?>" width="350px">
        <li>Anime/Game: <?= $_GET["asal"]; ?></li>
        <li>Nama: <?= $_GET["nama"]; ?></li>
        <li>Spesies: <?= $_GET["spesies"]; ?></li>
    </ul>

    <a href="page1.php">
        <h1 style="margin-left : 30px">Balik</h1>
    </a>
</body>

</html>