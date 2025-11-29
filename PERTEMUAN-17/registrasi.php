<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location:login.php');
    exit();
}
require_once "functions.php";
if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
		    alert('Data berhasil di tambah');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container registrasi-container">
        <h1>Halaman Registrasi</h1>
        <form action="" method="POST" class="form-container">
            <ul>
                <li class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li class="form-group">
                    <label for="password">Password :</label>
                    <input type="text" name="password" id="password">
                </li>
                <li class="form-group">
                    <label for="password2">Konfirmasi password :</label>
                    <input type="text" name="password2" id="password2">
                </li>
                <li>Sudah punya akun ? <a href="login.php">Login</a></li>
                <li class="form-group">
                    <button type="submit" name="register" class="btn btn-primary">Register</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>