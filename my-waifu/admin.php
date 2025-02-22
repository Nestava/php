<?php

require 'functions.php';
$waifu = query("SELECT * FROM waifu");  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <h1>My-Waifu</h1>
    <table border="1" cellpadding="10" cellspacing="0" style="margin-bottom : 70px;">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Anime/Game</th>
            <th>Nama</th>
            <th>Spesies</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($waifu as $row ) : ?>
            <tr>
                <td style="text-align: center;"><?= $i ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td style="text-align: center;">
                    <img src="assets/<?= $row["gambar"] ?>" width="250px">
                </td>
                <td style="text-align: center;"><?= $row["asal"] ?></td>
                <td style="text-align: center;"><?= $row["nama"] ?></td>
                <td style="text-align: center;"><?= $row["spesies"] ?></td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>