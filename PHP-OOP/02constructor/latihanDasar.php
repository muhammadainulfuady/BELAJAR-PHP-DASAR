<?php
class Lampu
{
    public $warna, $status = "mati";

    public function __construct($warna = "warna")
    {
        $this->warna = $warna;
    }

    public function nyalakan()
    {
        if ($this->status === "mati") {
            $this->status = "nyala";
            return "Lampu dinyalakan";
        }
        return "Lampu sudah menyala";
    }

    public function matikan()
    {
        if ($this->status === "nyala") {
            $this->status = "mati";
            return "Lampu dimatikan";
        }
        return "Lampu sudah mati";
    }

}
$lampu1 = new Lampu("Putih");
echo $lampu1->matikan();
echo "<br>";
echo $lampu1->nyalakan();
echo "<br>";
echo $lampu1->matikan();
?>