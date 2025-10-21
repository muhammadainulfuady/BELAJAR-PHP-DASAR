<?php
require "functions.php";

// ambil data dari mahasiswa
$mahasiswa = query("SELECT * FROM data_mhs");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Utama</title>
  <link rel="stylesheet" href="style.css">
  <style>

  </style>
</head>

<body>
  <div class="container">
    <h1 class="judul">Daftar Mahasiswa</h1>
    <div class="link-tambah-data">
      <a href="tambah.php">Tambah data mahasiswa</a>
    </div>
    <table border="1" cellpadding="20" cellspacing="0" class="tbl">
      <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nrp</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>
      <?php $iterasi = 0 ?>
      <?php foreach($mahasiswa as $row) :?>
      <tr>
        <td><?= $iterasi += 1 ?></td>
        <td>
          <a href="hapus.php?id=<?= $row["id"]?>" class="del" onclick="return confirm('yakin di hapus?')">Hapus</a> | 
          <a href="ubah.php?id=<?= $row["id"]?>" class="ubah">Ubah</a>
        </td>
        <td>
          <img src="images/<?= $row['gambar'] ?>" alt="" width="100px" />
        </td>
        <td><?= $row['nrp'] ?></td>
        <td><?= $row['nama']  ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['jurusan'] ?></td>
      </tr>
      <?php endforeach ?>
    </table>
  </div>
  <script src="index.js"></script>
</body>

</html>