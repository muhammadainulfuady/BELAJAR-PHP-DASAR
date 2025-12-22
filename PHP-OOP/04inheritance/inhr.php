<?php
// jualan produk
// komik
// game

class Produk
{
    public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jumlahHalaman,
    $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->waktuMain = $waktuMain;
        $this->jumlahHalaman = $jumlahHalaman;

    }

    public function getLabel()
    {
        return "$this->penulis, $this->judul";
    }

    public function detailsProduk()
    {
        $judul = $this->judul;
        $label = $this->getLabel();
        $harga = $this->harga;
        $str = "{$judul} | {$label} (Rp $harga)";
        return $str;
    }
}

class Komik extends Produk
{
    public function detailsKomik()
    {
        $judul = $this->judul;
        $label = $this->getLabel();
        $harga = $this->harga;
        $jumlahHalaman = $this->jumlahHalaman;
        $str = "Komik : {$judul} | {$label} (Rp $harga) - {$jumlahHalaman} Halaman.";
        return $str;
    }
}
class Game extends Produk
{
    public function detailsGame()
    {
        $judul = $this->judul;
        $label = $this->getLabel();
        $harga = $this->harga;
        $waktuMain = $this->waktuMain;
        $str = "Game : {$judul} | {$label} (Rp $harga) ~ {$waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("One Piece", "Echiro Oda", "Mangatonn", 300000, 100, 0);
$produk2 = new Game("Mobile Legends", "Gatau", "Moonton", 20000, 0, 50);
echo $produk1->detailsKomik();
echo "<br>";
echo $produk2->detailsGame();
?>