<?php

// jualan produk
// komik
// game

// class utama
class Produk
{
    private $judul,
    $penulis,
    $penerbit, $harga,
    $diskon = 0;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function setJudul($judulBaru)
    {
        $this->judul = $judulBaru;
    }
    public function getJudul()
    {
        return $this->judul;
    }
    public function setPenulis($penulisBaru)
    {
        $this->penulis = $penulisBaru;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($penerbitBaru)
    {
        $this->penerbit = $penerbitBaru;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon()
    {
        return $this->diskon;
    }
    public function setHarga($hargaBaru)
    {
        $this->harga = $hargaBaru;
    }
    public function getHarga()
    {
        $hargaDiskon = $this->harga - ($this->harga * $this->diskon / 100);
        return $hargaDiskon;
    }
    public function getLabel()
    {
        return "$this->penulis, $this->judul";
    }
    public function getInfoProduk()
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
    public function getInfoProduk()
    {
        $temp = parent::getInfoProduk();
        return "Komik : {$temp} - {$this->jumlahHalaman} Halaman.";
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

    public function getInfoProduk()
    {
        $temp = parent::getInfoProduk();
        return "Game : {$temp} ~ {$this->waktuMain} Jam.";
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
$produk2 = new Game("Mobile Legends", "Gatau", "Moonton", 250000, 50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenulis("Ainulfuady");
echo $produk1->getPenulis();
?>