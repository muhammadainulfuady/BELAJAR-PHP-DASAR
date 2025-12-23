<?php
class Kendaraan
{
    public $merk;
    protected $mesin;
    private $nomorRangka;

    public function __construct($merk = "merk", $mesin = "mesin", $nomorRangka = "nomorRangka")
    {
        $this->merk = $merk;
        $this->mesin = $mesin;
        $this->nomorRangka = $nomorRangka;
    }

    public function infoDasar()
    {
        return "Kendaraan merk {$this->merk}";
    }
}

class Mobil extends Kendaraan
{
    function __construct($merk, $mesin, $nomorRangka)
    {
        parent::__construct($merk, $mesin, $nomorRangka);
    }

    public function infoLengkap()
    {
        return "Mobil {$this->merk} dengan mesin {$this->mesin}";
    }
}

$mobil = new Mobil("Toyota", "V8", "123XYZ");
echo $mobil->infoDasar();
echo "<br>";
echo $mobil->infoLengkap();
?>