<?php
class Pemilik
{
    public $nama;

    public function __construct($nama = "nama")
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
}

class Kartu
{
    public $nomor, $pemilik;

    public function __construct($nomor = 0, Pemilik $pemilik)
    {
        $this->nomor = $nomor;
        $this->pemilik = $pemilik;
    }

    public function infoKartu()
    {
        return "Kartu nomer {$this->nomor} milik {$this->pemilik->getNama()}";
    }
}
$pemilik1 = new Pemilik("Ainul");
$kartu1 = new Kartu("1234-5678", $pemilik1);

echo $pemilik1->getNama();
echo "<br>";
echo $kartu1->infoKartu();
?>