<?php

if (isset($_POST['submit'])) {
    if (trim($_POST['name']) == "") {
        echo "tidak boleh kosong";
    }
}
$name = $_POST['name'] ?? 'Nama anda silahkan di isikan';
echo $name;

?>

<form action="" method="POST">
    <label for="name">Nama anda</label>
    <input type="text" name="name">
    <button type="submit" name="submit">Kirim</button>
</form>