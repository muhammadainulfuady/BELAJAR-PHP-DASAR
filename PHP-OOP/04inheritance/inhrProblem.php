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
    $waktuMain,
    $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0, $tipe = "tipe")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->waktuMain = $waktuMain;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->tipe = $tipe;

    }

    public function getLabel()
    {
        return "$this->penulis, $this->judul";
    }

    public function detailsProduk()
    {
        $tipe = strtolower($this->tipe);
        $judul = $this->judul;
        $label = $this->getLabel();
        $harga = $this->harga;
        $waktuMain = $this->waktuMain;
        $jumlahHalaman = $this->jumlahHalaman;
        $str = "{$tipe} : {$judul} | {$label} (Rp $harga)";
        if ($tipe === "komik") {
            $str .= " - {$jumlahHalaman} Halaman.";
        } elseif ($tipe === "game") {
            $str .= " ~ {$waktuMain} Jam.";
        }
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
$produk1 = new Produk("One Piece", "Echiro Oda", "Mangatonn", 300000, 100, 0, "komik");
$produk2 = new Produk("Mobile Legends", "Gatau", "Moonton", 20000, 0, 50, "game");
$info = new CetakInfoProduk();
echo $produk1->detailsProduk();
echo "<br>";
echo $produk2->detailsProduk();
?>