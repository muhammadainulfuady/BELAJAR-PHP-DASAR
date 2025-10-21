<?php
// mysqli_report(MYSQLI_REPORT_OFF);

// koneksi ke database
$host = "localhost";
$user = "root";
$passwrd = "";
$db_name = "mahasiswa";
$conn = mysqli_connect($host, $user, $passwrd, $db_name);

// ambil data dari mahasiswa
$result = mysqli_query($conn, "SELECT * FROM data_mhs");

// ambil data (fetch) mahasiswa dari object result
// 1. mysqli_fetch_row(), mengembalikan nilai numerik
// 2. mysqli_fetch_assoc(), mengembalikan nilai associatif
// 3. mysqli_fetch_array(), bisa mengembalikan nilai numerik dan juga nilai associatif
// 4. mysqli_fetch_object(), mengembalikan object

// while($mhs = mysqli_fetch_assoc($result)) {
//   var_dump($mhs);
// }
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
      <?php while($row = mysqli_fetch_assoc($result)) :?>
      <tr>
        <td><?= $iterasi += 1 ?></td>
        <td><a href="">Hapus</a> | <a href="">Ubah</a></td>
        <td><img src="images/<?= $row['gambar'] ?>" alt="" width="100px" /></td>
        <td><?= $row['nrp'] ?></td>
        <td><?= $row['nama']  ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['jurusan'] ?></td>
      </tr>
      <?php endwhile ?>
    </table>
  </div>
  <script src="index.js"></script>
</body>

</html>