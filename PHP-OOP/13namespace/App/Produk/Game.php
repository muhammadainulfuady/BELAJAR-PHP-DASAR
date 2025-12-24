<?php
class Game extends Produk implements InfoProduk
{
    public $waktuMain;
    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
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
        return "Game : {$this->getInfo()} ~ {$this->waktuMain} Jam.";
    }
}
?>