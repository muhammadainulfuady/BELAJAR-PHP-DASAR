<?php
// jualan produk
// komik
// game

class Produk
{
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->judul";
    }
}


$produk3 = new Produk();
$produk3->judul = "One Piece";
$produk3->penulis = "Eichiro Oda";
$produk3->penerbit = "Manga";
$produk3->harga = 3000;

$produk4 = new Produk();
$produk4->judul = "Mobile Legends";
$produk4->penulis = "Gatau";
$produk4->penerbit = "Moonton";
$produk4->harga = 3000; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        Komik : <?= $produk3->judul ?>
    </p>
    <p>
        Penulis : <?= $produk3->penulis ?>
    </p>
    <p>
        Penerbit : <?= $produk3->penerbit ?>
    </p>
    <p>
        Harga : <?= $produk3->harga ?>
    </p>
    <p>
        Hello : <?= $produk3->getLabel() ?>
    </p>
    <hr>
    <p>
        Game : <?= $produk4->judul ?>
    </p>
    <p>
        Penulis : <?= $produk4->penulis ?>
    </p>
    <p>
        Penerbit : <?= $produk4->penerbit ?>
    </p>
    <p>
        Harga : <?= $produk4->harga ?>
    </p>
    <p>
        Hello : <?= $produk4->getLabel() ?>
    </p>
</body>

</html>