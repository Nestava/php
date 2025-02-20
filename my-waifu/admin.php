<?php

// koneksi
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// diambil cangkang
$result = mysqli_query($db, "SELECT * FROM waifu");

// tutor ambil daleman
// mysqli_fetch_row() // mengembalikan array numerik (indeks angka)
//  $waifu = mysqli_fetch_row($result);
//  var_dump($waifu[2]);
// mysqli_fetch_assoc() // mengembalikan array assosiative (indeks have names)
//  $waifu = mysqli_fetch_assoc($result);
//  var_dump($waifu["spesies"]);
// mysqli_fetch_array() // mengembalikan array assosiative dan numerik (data ngedouble, berat)
//  $waifu = mysqli_fetch_array($result);
//  var_dump($waifu["nama"]);
//  var_dump($waifu["1"]);
// mysqli_fetch_object() // senangkepku sih, assoc cuman pake panah
//  $waifu = mysqli_fetch_object($result);
//  var_dump($waifu->nama);

while ($waifu = mysqli_fetch_assoc($result)) {
    var_dump($waifu["nama"]);
}

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
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Anime/Game</th>
            <th>Nama</th>
            <th>Spesies</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td>
                <img src="../assets/ryo.jpg" width="250px">
            </td>
            <td>Bocchi The Rock!</td>
            <td>Ryou Yamada</td>
            <td>Human</td>
        </tr>
    </table>
</body>

</html>