<?php
abstract class Produk
{
    protected $judul,
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
    abstract public function getInfo();
}
?>