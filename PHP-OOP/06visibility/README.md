📌 Konsep

Mengatur hak akses property & method

- Visibility Akses
  | public | dimana saja
  | protected | class & turunan
  | private | hanya class itu

class Kendaraan {
public $merk;
protected $mesin;
private $nomorRangka;
}

Catatan

- private tidak diwariskan
- protected diwariskan tapi tidak bisa diakses dari luar
