<?php
$mahasiswa = [
    [
        "nama" => "Muhammad Ainul Fuady",
        "nim" => "240411100009",
        "asal" => "Gresik",
        "ttl" => "18/05/2006",
        "umur" => 19,
        "gambar" => "gambar.jpg"
    ],
    [
        "nama" => "Muhammad Afifuddin",
        "nim" => "1511127",
        "asal" => "Gresik",
        "ttl" => "29/01/1997",
        "umur" => 26,
        "gambar" => "images.jpg"

    ]
]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <img src="<?= $mhs["gambar"] ?>" width="100px">
            <li>Nama <?= $mhs["nama"]; ?></li>
            <li>Nim <?= $mhs["nim"]; ?></li>
            <li>Asal <?= $mhs["asal"]; ?></li>
            <li>TTL <?= $mhs["ttl"]; ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>