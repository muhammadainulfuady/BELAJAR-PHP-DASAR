<?php if (
    !isset($_GET['nama']) ||
    !isset($_GET['nrp']) ||
    !isset($_GET['email']) ||
    !isset($_GET['jurusan'])
) {
    header("Location: latihan-1.php");
    exit;
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
    <ul>
        <li><img src="gambar1.jpg" alt="eror" width="100"></li>
        <li><?= $_GET['nama'] ?></li>
        <li><?= $_GET['nrp'] ?></li>
        <li><?= $_GET['email'] ?></li>
        <li><?= $_GET['jurusan'] ?></li>
    </ul>
    <a href="latihan-1.php">Kembali</a>
</body>

</html>