📌 Konsep

- Object bisa dijadikan parameter
- Menjamin parameter adalah object dari class tertentu

```
class Pemilik {
    public $nama;
    public function __construct($nama) {
        $this->nama = $nama;
    }
}

class Kartu {
    public $pemilik;
    public function __construct(Pemilik $pemilik) {
        $this->pemilik = $pemilik;
    }

}
```

Catatan

- Pemilik $pemilik → hanya terima object Pemilik
- Mencegah salah tipe data
