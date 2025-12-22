<?php

// jualan produk
// komik
// game

// class utama
class Produk
{
    public $judul,
    $penulis,
    $penerbit,
    $harga;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
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
    public function detailsProduk()
    {
        $judul = $this->judul;
        $label = $this->getLabel();
        $harga = $this->harga;
        $str = "{$judul} | {$label} (Rp $harga)";
        return $str;
    }
}

// class child komik
class Komik extends Produk
{
    public $jumlahHalaman = 0;
    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahHalaman = $jumlahHalaman;

    }
    public function detailsKomik()
    {
        $jumlahHalaman = $this->jumlahHalaman;
        $temp = parent::detailsProduk();
        $str = "Komik : {$temp} - {$jumlahHalaman} Halaman.";
        return $str;
    }
}

// class child game
class Game extends Produk
{
    public $waktuMain;
    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;

    }
    public function detailsGame()
    {
        $waktuMain = $this->waktuMain;
        $temp = parent::detailsProduk();
        $str = "Game : {$temp} ~ {$waktuMain} Jam.";
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

$produk1 = new Komik("One Piece", "Echiro Oda", "Mangatonn", 300000, 100);
$produk2 = new Game("Mobile Legends", "Gatau", "Moonton", 20000, 50);
echo $produk1->detailsKomik();
echo "<br>";
echo $produk2->detailsGame();

?>