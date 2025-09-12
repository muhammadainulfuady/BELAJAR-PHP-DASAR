<?php
if (isset($_GET['id'])) {
    $id_pengguna = $_GET['id'];

    echo "<h1>Informasi Pengguna</h1>";
    echo "<p>ID Pengguna: " . $id_pengguna . "</p>";
    echo "<p>Nama: John Doe</p>";
    echo "<p>Email: john.doe@example.com</p>";
} else {
    echo "<h1>Error</h1>";
    echo "<p>Parameter ID pengguna tidak ditemukan di URL. Mohon masukkan ID yang valid.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
</head>

<body>
    <form action="" method="get">
        <label for="">Id</label>
        <input type="text" name="id"> <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>