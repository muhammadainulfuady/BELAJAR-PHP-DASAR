<?php if (!isset($_GET['submit'])): ?>
    <p>Isi pesan ini boy</p>
<?php else: ?>
    <?php $pesan = htmlspecialchars($_GET['iuser']) ?>
    <p><?= $pesan ?></p>
<?php ?>
<?php endif ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 form</title>
</head>

<body>
    <form action="" method="get">
        <label for="text">Pesan anonim</label>
        <input type="text" name="iuser">
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>