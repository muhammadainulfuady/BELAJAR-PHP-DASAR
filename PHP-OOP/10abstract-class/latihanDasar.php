<!-- Studi Kasus: Sistem Pembayaran -->
<?php
abstract class Pembayaran
{
    protected $jumlah;

    public function __construct($jumlah = 0)
    {
        $this->jumlah = $jumlah;
    }

    abstract public function proses();
}

class Tunai extends Pembayaran
{
    public function proses()
    {
        return "Pembayaran tunai sebesar {$this->jumlah}";
    }
}
class Transfer extends Pembayaran
{
    public function proses()
    {
        return "Pembayaran transfer sebesar {$this->jumlah}";
    }
}
$tunai = new Tunai(50000);
$transfer = new Transfer(100000);

echo $tunai->proses();
echo "<br>";
echo $transfer->proses();
?>