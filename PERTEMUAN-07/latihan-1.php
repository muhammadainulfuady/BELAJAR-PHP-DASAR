<?php
$mahasiswa = [
    [
        "nrp" => "043040023",
        "nama" => "Sandhika Galih",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "gambar1.jpg"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "033040001",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "gambar1.jpg"
    ]
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <a
                href="latihan-2.php?nama=<?= $mhs['nama']; ?>&nrp=<?= $mhs['nrp']; ?>&email=<?= $mhs['email']; ?>&jurusan=<?= $mhs['jurusan']; ?>">
                <li><?= $mhs['nama']; ?></li>
            </a>
        <?php endforeach; ?>
    </ul>

</body>

</html>