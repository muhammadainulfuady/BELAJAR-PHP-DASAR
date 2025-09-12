<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <?php if (!isset($_POST['nama'])): ?>
        <p>Harap isi form bang</p>
    <?php else: ?>
        <h1>Selama datang, <?= $_POST['nama'] ?></h1>
    <?php endif ?>
    <form action="" method="post">
        <label for="nama">Masukkan nama</label>
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>