<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location:index.php");
    exit();
}
require_once "functions.php";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password']))
            ; {
            $_SESSION['login'] = true;
            if (isset($_POST['remember'])) {
                setcookie('login', true, time() + 60);
            }
            header("Location:index.php");
            exit();
        }
    }
    $eror = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container registrasi-container">
        <h1>Halaman Login</h1>

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
                    <label for="remember">Remember me <input type="checkbox" name="remember" id="remember">
                    </label>
                </li>
                <li>Belum punya akun ? <a href="registrasi.php">Registrasi</a></li>
                <li class="form-group">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </li>
                <?php if (isset($eror)): ?>
                    <p>Username atau password salah</p>
                <?php endif ?>
            </ul>
        </form>
    </div>
</body>

</html>