<?php
include "functions.php";

// ambil data dari mahasiswa
$mahasiswa = query("SELECT * FROM data_mhs");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Admin</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      background-color: grey;
    }

    .container h1.judul {
      text-align: center;
      background-color: lightgoldenrodyellow;
    }

    .container table {
      margin: 0 auto;
      background-color: lightblue;
      width: 100%;
      border-collapse: collapse;
    }

    .container table td,
    th {
      padding: 0.5rem;
      text-align: center;
      color: lightslategrey;
    }

    .container table th {
      background-color: orange;
      color: white;
    }

    .container table th {
      text-transform: uppercase;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="judul">Daftar Mahasiswa</h1>
    <table border="1" cellpadding="20" cellspacing="0">
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
        <td><a href="">Hapus</a> | <a href="">Ubah</a></td>
        <td><img src="images/<?= $row['gambar'] ?>" alt="" width="100px" /></td>
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