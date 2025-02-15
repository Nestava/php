<?php

// var_dump($_SERVER)

$waifu =
    [
        [
            "asal" => "Bocchi The Rock!",
            "nama" => "Ryō Yamada",
            "spesies" => "Manusia",
            "foto" => "../../assets/ryo.jpg"
        ],
        [
            "asal" => "Honkai: Star Rail",
            "nama" => "Fugue",
            "spesies" => "Foxian",
            "foto" => "../../assets/fugue.png"
        ],
        [
            "asal" => "Genshin Impact",
            "nama" => "Yumemizuki Mizuki",
            "spesies" => "Yumekui-baku",
            "foto" => "../../assets/mizuki.jpg"
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
    <h1 style="margin-left : 30px">List Waifu Non-Karbit gw</h1>
    <h3 style="margin-left : 30px">dalam artian gw gak asal claim, tapi mendalami terlebih dahulu tentang char-char ini sehingga gw benar-benar jatuh cinta.</h3>
    <br>
    <ul>
        <?php foreach ($waifu as $wife): ?>
            <li><a
                    href="page2.php?asal=<?= $wife["asal"]; ?>&nama=<?= $wife["nama"]; ?>&spesies=<?= $wife["spesies"]; ?>&foto=<?= $wife["foto"]; ?>">
                    <?= $wife["nama"]; ?>
                </a></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>