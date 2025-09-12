<?php
if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    echo "Halo" . $nama;
} else {
    $nama = $_GET['nama'] = "404";
    echo "Halo" . $nama;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="nama">
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>