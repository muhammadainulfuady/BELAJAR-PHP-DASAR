<?php
if (!isset($_GET['submit'])) {
    echo 'Halo, apa kabar';
} else {
    echo 'Halo, ' . $_GET['nama'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman sapaan</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="nama" id="">
        <button type="submit" name="submit">Kirim form</button>
    </form>
</body>

</html>