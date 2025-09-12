<?php
$username = "admin";
$password = "123";

if (isset($_POST['submit'])) {
    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        header("Location:admin.php");
        echo "('Login anda berhasil yah!!')";
        exit;
    } else {
        $check = true;
    }
} else {
    echo "<p>Tolong anda isi username dan paswordnya yut!!</p>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login Admin</h1>
    <?php if (isset($check)): ?>
        <p style="color: red; font-style: italic;">Maaf username dan sandi anda salah</p>
    <?php endif ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="text" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>

</html>