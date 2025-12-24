<?php
class Komik extends Produk implements InfoProduk
{
    public $jumlahHalaman = 0;
    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfo()
    {
        $judul = $this->judul;
        $label = $this->getLabel();
        $harga = $this->harga;
        $str = "{$judul} | {$label} (Rp $harga)";
        return $str;
    }
    public function getInfoProduk()
    {
        return "Komik : {$this->getInfo()} - {$this->jumlahHalaman} Halaman.";
    }
}
?>