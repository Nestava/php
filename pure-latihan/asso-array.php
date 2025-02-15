<?php

// var_dump($_SERVER)

$waifu =
    [
        [
            "asal" => "Bocchi The Rock!",
            "nama" => "Ryō Yamada",
            "spesies" => "Manusia",
            "foto" => "../assets/ryo.jpg"
        ],
        [
            "asal" => "Honkai : Star Rail",
            "nama" => "Fugue",
            "spesies" => "Foxian",
            "foto" => "../assets/fugue.png"
        ],
        [
            "asal" => "Genshin Impact",
            "nama" => "Yumemizuki Mizuki",
            "spesies" => "Yumekui-baku",
            "foto" => "../assets/mizuki.jpg"
        ],
    ]
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waifu</title>
</head>

<body>
    <h1>List Waifu Non-Karbit gw</h1>
    <h3>dalam artian gw gak asal claim, tapi mendalami terlebih dahulu tentang char-char ini.</h3>
    <br>
    <ul>
        <?php foreach ($waifu as $wife): ?>
            <img src="<?= $wife["foto"]; ?>" width="350px">
            <li>Game/Anime: <?= $wife["asal"]; ?></li>
            <li>Nama: <?= $wife["nama"]; ?></li>
            <li>Spesies: <?= $wife["spesies"]; ?></li>
            <br><br>
        <?php endforeach; ?>
    </ul>
</body>

</html>