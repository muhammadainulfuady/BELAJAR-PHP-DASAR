📌 Konsep

- Constructor (\_\_construct) otomatis dipanggil saat object dibuat
- Dipakai untuk inisialisasi data awal

```
class User {
    public $nama;
    public function __construct($nama) {
        $this->nama = $nama;
    }
}
$user = new User("Ainul");
```
Catatan

- Tidak perlu dipanggil manual
- Membantu object langsung siap dipakai
