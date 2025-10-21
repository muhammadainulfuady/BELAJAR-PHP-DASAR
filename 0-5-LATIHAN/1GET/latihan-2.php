<?php
if (!isset($_GET['submit'])) {
    $number_1 = 10;
    $number_2 = 5;
    echo $number_1 + $number_2;
} else {
    $number_1 = $_GET['angka1'];
    $number_2 = $_GET['angka2'];
    echo $number_1 + $number_2;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="angka1" id="">
        <input type="text" name="angka2" id="">
        <button type="submit" name="submit">Hitung</button>
    </form>
</body>

</html>