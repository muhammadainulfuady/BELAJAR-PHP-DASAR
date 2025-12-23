<!-- soal oop php untuk studikasus keranjang belanja -->
<?php
class Keranjang
{
    public $pemilik;
    private $totalItem,
    $totalHarga;

    public function __construct($pemilik = "pemilik", $totalItem = 0, $totalHarga = 0)
    {
        $this->pemilik = $pemilik;
        $this->totalItem = $totalItem;
        $this->totalHarga = $totalHarga;
    }

    public function getTotalItem()
    {
        return "Jumlah item adalah {$this->totalItem}";
    }

    public function getTotalHarga()
    {
        return "Total harga adalah {$this->totalHarga}";
    }

    public function tambahItem($harga)
    {
        if ($harga > 0) {
            $this->totalItem += 1;
            $this->totalHarga += $harga;
            return "Item berhasil di tambahkan";
        } else {
            return "Harga tidak valid";
        }
    }

    public function hapusItem($harga)
    {
        if ($harga > 0 && $this->totalHarga >= $harga && $this->totalItem > 0) {
            $this->totalHarga -= $harga;
            $this->totalItem -= 1;
            return "Item berhasil dihapus";
        } else {
            return "Item tidak bisa dihapus";
        }
    }
}
$cart = new Keranjang("Ainul");

echo $cart->tambahItem(10000);
echo "<br>";

echo $cart->tambahItem(20000);
echo "<br>";

echo $cart->getTotalItem();
echo "<br>";

echo $cart->getTotalHarga();
?>