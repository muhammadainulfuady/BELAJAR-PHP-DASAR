```
<!-- soal oop php untuk studikasus rekening pada bank -->
<?php
class Rekening
{
    public $namaPemilik;
    private $saldo;

    public function __construct($namaPemilik = "namaPemilik", $saldo = 0)
    {
        $this->namaPemilik = $namaPemilik;
        $this->saldo = $saldo;
    }

    public function setSaldo($jumlah)
    {
        if ($jumlah <= 0) {
            echo "Saldo harus positif";
        } else {
            return $this->saldo = $jumlah;
        }
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function tarikTunai($jumlah)
    {
        $saldo = $this->saldo;
        if ($saldo >= $jumlah) {
            $hasilPenarikan = $saldo - $jumlah;
            $this->saldo = $hasilPenarikan;
            return "Penarikan berhasil";
        } else {
            $saldo = $this->saldo;
            return "Saldo anda tidak cukup";
        }
    }
}
$rek = new Rekening("Ainul", 90000);

echo $rek->getSaldo();
echo "<br>";

echo $rek->tarikTunai(90000);
echo "<br>";

echo $rek->getSaldo();
?>
```

```
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
```

- 📒 Catatan OOP: Setter & Getter (Manual Version)📌 Konsep DasarDalam OOP, kita tidak boleh membiarkan isi "jeroan" class (property) diacak-acak dari luar. Maka dari itu, property dibuat private, lalu kita buatkan pintu resmi untuk mengaksesnya:Getter: Pintu keluar (mengambil data).Setter: Pintu masuk (mengubah data + validasi).🛠️ Struktur Kode StandarPHP

```
<?php
class Produk {
private $nama;
private $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    // 📥 SETTER: Tempat buat filter/validasi
    public function setNama($nama) {
        if (is_string($nama) && $nama !== "") {
            $this->nama = $nama;
        }
    }

    public function setHarga($harga) {
        if (is_numeric($harga) && $harga > 0) {
            $this->harga = $harga;
        }
    }

    // 📤 GETTER: Tempat buat ambil data
    public function getNama() {
        return $this->nama;
    }

    public function getHarga() {
        return $this->harga;
    }

}

// --- CARA PAKAI ---
$item = new Produk("Kopi", 5000);

// Gak bisa panggil $item->harga (Error!)
// Harus lewat jalur resmi:
$item->setHarga(7000);
echo $item->getHarga();
```

⚠️ Kenapa Harus Ribet Begini? (Tanpa Magic Method)KelebihanPenjelasanValidasiKamu bisa cek dulu datanya. Kalau harganya minus, tinggal tolak di Setter.KeamananMencegah "Property Bayangan" (public property liar) yang tidak sengaja terbuat.Read-OnlyKalau kamu cuma bikin Getter tanpa Setter, property itu cuma bisa dibaca, gak bisa diubah.Gampang DebugKalau ada data salah masuk, kamu cukup cek di fungsi set-nya saja.💡 Tips ProJangan buat Setter & Getter untuk semua property. Kalau datanya memang rahasia dan cuma buat internal class, biarkan saja tetap private tanpa pintu akses keluar.
