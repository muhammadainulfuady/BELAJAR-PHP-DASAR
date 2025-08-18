<!-- // form.html -->
<form method="post" action="proses.php">
    <input type="text" name="username">
    <button type="submit">Kirim</button>
</form>

<!-- // proses.php -->
<?php
echo "Username: " . $_POST["username"];
?>