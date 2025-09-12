<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "belajar_mysql";

$conect = mysqli_connect($host, $user, $password, $database);

$data = mysqli_query(mysql: $conect, query: "select * from products");
$data = mysqli_query(mysql: $conect, query: "select id as Kode, name as Nama, category as Kategori, description as Deskripsi, price as Harga, quantity as Stok, created_at as Waktu_Membuat from products");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            color: white;
            background-color: black;
        }
    </style>
</head>

<body>
    <table border="1" align="center" cellpadding="9" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>KATEGORI</th>
            <th>DESKRIPSI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th>WAKTU MEMBUAT</th>
        </tr>
        <?php while ($i = mysqli_fetch_assoc($data)): ?>
            <tr>
                <td><?php echo $i["Kode"]; ?></td>
                <td><?php echo $i["Nama"]; ?></td>
                <td><?php echo $i["Deskripsi"]; ?></td>
                <td><?php echo $i["Harga"]; ?></td>
                <td><?php echo $i["Harga"]; ?></td>
                <td><?php echo $i["Stok"]; ?></td>
                <td><?php echo $i["Waktu_Membuat"]; ?></td>
            </tr>
        <?php endwhile ?>

    </table>

</body>

</html>