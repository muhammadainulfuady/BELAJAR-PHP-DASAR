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

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} | {$produk->harga}";
        return $str;
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

echo "Komik : {$produk_komik->getLabel()}";
echo "<br>";
echo "Game : {$produk_game->getLabel()}";
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk_game);
?>