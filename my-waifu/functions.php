<?php

// koneksi
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// diambil cangkang
// $result = mysqli_query($db, "SELECT * FROM waifu");


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


// while ($waifu = mysqli_fetch_assoc($result)) {
//     var_dump($waifu);
// }

function query($query) {
    global $db; // agar var $db diluar bisa digunakan dalam function ini
    $result = mysqli_query($db, $query); // mysql: $db, ya buat gunain db
                                                       // query: $query, command mysql nya 
    $rows = []; // nyediain tempat buat nanti diisi data
    while ($row = mysqli_fetch_assoc($result)) { // nyimpen data dari db ke $row
        $rows[] = $row; // array $rows diisi dengan data $row secara rapi dan berurutan
    }
    return $rows; // mengembalikan hasil fungsi ke $rows (masih ga ngerti fungsi return, wek)
}

?>