<?php
require_once "App/init.php";
$produk1 = new Komik("One Piece", "Echiro Oda", "Mangatonn", 300000, 100);
$produk2 = new Game("Mobile Legends", "Gatau", "Moonton", 250000, 50);
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
echo "<hr>";
new Coba();
?>