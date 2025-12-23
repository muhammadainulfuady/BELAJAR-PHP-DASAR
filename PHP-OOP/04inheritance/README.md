📌 Konsep

- Class turunan mewarisi property & method parent
- Gunakan extends

```
class User {
    public $nama;
}

class Admin extends User {
    public $role = "admin";
}

```

Catatan

- Child bisa pakai property parent
- Reuse kode (DRY)
