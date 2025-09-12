<?php
mysqli_report(MYSQLI_REPORT_OFF);
// koneksi ke database
$host = "localhost";
$user = "root";
$passwrd = "";
$db_name = "mahasiswa";
$conn = mysqli_connect($host, $user, $passwrd, $db_name);
// ambil data dari mahasiswa
$qry = mysqli_query($conn, "SELECT * FROM data_mhsas");
if (!$qry) {
  echo mysqli_error($conn);
}
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
      <tr>
        <td>1</td>
        <td><a href="">Hapus</a> | <a href="">Ubah</a></td>
        <td><img src="images/gambar-1.png" alt="" width="100px" /></td>
        <td>240411100009</td>
        <td>Muhammad Ainul Fuady</td>
        <td>240411100009@student.trunojoyo.ac.id</td>
        <td>Teknik Informatika</td>
      </tr>
    </table>
  </div>
  <script src="index.js"></script>
</body>

</html>