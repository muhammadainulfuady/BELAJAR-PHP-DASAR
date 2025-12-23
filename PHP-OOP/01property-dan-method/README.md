📌 Konsep

- Property → data / atribut object
- Method → perilaku / aksi object

class Mobil {
public $merk;
public $warna;

    public function jalan() {
        return "Mobil berjalan";
    }

}

$mobil = new Mobil();
$mobil->merk = "Toyota";
echo $mobil->jalan();

Catatan

- Property diakses pakai ->
- Method adalah fungsi di dalam class
- Object dibuat dari class
