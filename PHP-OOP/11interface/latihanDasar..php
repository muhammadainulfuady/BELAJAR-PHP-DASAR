<!-- Studi Kasus: Sistem Notifikasi -->
<?php
interface NotifikasiInterface
{
    public function kirim($pesan);
}


class Email implements NotifikasiInterface
{
    public function kirim($pesan)
    {
        if (empty($pesan)) {
            return "Pesan Email tidak boleh kosong";
        } else {
            return "Email terkirim : {$pesan}";
        }
    }
}

class SMS implements NotifikasiInterface
{
    public function kirim($pesan)
    {
        if (empty($pesan)) {
            return "Pesan SMS tidak boleh kosong";
        } else {
            return "SMS terkirim : {$pesan}";
        }
    }
}

function kirimNotifikasi(NotifikasiInterface $tipe, $pesan)
{
    return $tipe->kirim($pesan);
}

$email = new Email();
$sms = new SMS();

echo kirimNotifikasi($email, "Halo via Email");
echo "<br>";
echo kirimNotifikasi($sms, "");
?>