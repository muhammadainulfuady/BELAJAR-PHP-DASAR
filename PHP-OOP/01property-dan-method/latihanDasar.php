<?php
// ini namanya class bisa disebut juga dengan blueprint atau cetakan awal
class Mobil
{
    // dan ini disebut property cetakan itu punya apa saja yah ini
    public $merk = "merk", $warna = "warna";

    // method dengan visibility public biar nanti bisa di akses dari luar
    public function jalan()
    {
        return "Mobil sedang berjalan";
    }

    public function info()
    {
        return "Mobil merk " . $this->merk . " warna " . $this->warna;
    }
}

// membuat object dari mobil 
// 1.1
$mobil1 = new Mobil();
$mobil1->merk = "toyota";
$mobil1->warna = "hitam";

// menampilkan hasil dari objek yang sudah di buat di 1.1
echo $mobil1->info();
echo "<br>";
echo $mobil1->jalan();
?>