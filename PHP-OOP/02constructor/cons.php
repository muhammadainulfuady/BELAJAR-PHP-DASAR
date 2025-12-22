<?php
// jualan produk
// komik
// game

class Produk
{
    public $judul,
    $penulis,
    $penerbit,
    $harga;

    public function __construct($judul = "juudul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->judul";
    }
}


$judul_komik = "One Piece";
$penulis_komik = "Eichiro Oda";
$penerbit_komik = "Manga";
$harga_komik = 3000;
$produk_komik = new Produk($judul_komik, $penulis_komik, $penerbit_komik, $harga_komik);

$judul_game = "Mobile Legends";
$penulis_game = "Gatau";
$penerbit_game = "Moonton";
$harga_game = 3000;
$produk_game = new Produk($judul_game, $penulis_game, $penerbit_game, $harga_game);

$produk_komik2 = new Produk("Upin Ipin");
var_dump($produk_komik2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        Komik : <?= $produk_komik->judul ?>
    </p>
    <p>
        Penulis : <?= $produk_komik->penulis ?>
    </p>
    <p>
        Penerbit : <?= $produk_komik->penerbit ?>
    </p>
    <p>
        Harga : <?= $produk_komik->harga ?>
    </p>
    <p>
        Hello : <?= $produk_komik->getLabel() ?>
    </p>
    <hr>
    <p>
        Game : <?= $produk_game->judul ?>
    </p>
    <p>
        Penulis : <?= $produk_game->penulis ?>
    </p>
    <p>
        Penerbit : <?= $produk_game->penerbit ?>
    </p>
    <p>
        Harga : <?= $produk_game->harga ?>
    </p>
    <p>
        Hello : <?= $produk_game->getLabel() ?>
    </p>
</body>

</html>