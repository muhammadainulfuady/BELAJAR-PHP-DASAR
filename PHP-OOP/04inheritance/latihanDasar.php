<?php
class ProdukLatihan
{
    public $nama, $harga;

    public function __construct($nama = "nama", $harga = 0)
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function info()
    {
        return "Produk : {$this->nama}, Harga : {$this->harga}";
    }
}

class ProdukDiskon extends ProdukLatihan
{
    public $diskon = 0;

    public function __construct($nama, $harga, $diskon)
    {
        parent::__construct($nama, $harga);
        $this->diskon = $diskon;
    }

    public function info()
    {
        $hargaDiskon = $this->harga - ($this->harga * $this->diskon / 100);
        return "Produk: {$this->nama}, Harga Setelah Diskon: {$hargaDiskon}";
    }
}

$produk1 = new ProdukDiskon("Rokok", 15000, 10);
echo $produk1->info();
?>