📌 Konsep

- Method child menimpa method parent
- Bisa panggil method parent pakai parent::

```class Produk {
        public function info() {
        return "Produk umum";
    }
}
```

```class Komik extends Produk {
        public function info() {
        return "Komik khusus";
    }
}
```

Catatan

- Nama method sama
- Versi child yang dipakai
