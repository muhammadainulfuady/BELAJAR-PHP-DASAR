<?php
if (isset($_GET['submit'])) {
    $warna = $_GET['warna'];
    if ($warna == 'blue') {
        echo "<body class='blue'></body>";
    } elseif ($warna == 'default') {
        echo "<body class='white'></body>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blue {
            background-color: blue;
        }

        .white {
            background-color: white;
        }
    </style>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="warna">
        <button type="submit" name="submit">Ubah</button>
    </form>
</body>

</html>