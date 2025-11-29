<?php
session_start();
if (!isset($_SESSION['login'])) {
	header('Location:login.php');
	exit();
}
mysqli_report(MYSQLI_REPORT_OFF);
require "functions.php";

// ambil data di url menggunakan method GET
$id = $_GET['id'];
$ambil_data = query("SELECT * FROM data_mhs WHERE id = $id")[0];
// cek apakah data sudah di submit apa belum
if (isset($_POST['submit'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
				alert('Data berhasil di ubah');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
				alert('Data gagal di ubah');
				document.location.href = 'index.php';
			</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Ubah-Data</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container form-page-container">
		<h1>Ubah Data Mahasiswa</h1>
		<form action="" method="post" enctype="multipart/form-data" class="form-container"> <input type="hidden"
				name="id" value="<?= $ambil_data["id"] ?>">
			<input type="hidden" name="gambarLama" value="<?= $ambil_data['gambar'] ?>">
			<div class="input-user form-group"> <label for="nrp">Nrp : </label>
				<input type="text" name="nrp" id="nrp" value="<?= $ambil_data['nrp'] ?>">
			</div>

			<div class="input-user form-group"> <label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?= $ambil_data['nama'] ?>">
			</div>

			<div class="input-user form-group"> <label for="email">Email : </label>
				<input type="text" name="email" id="email" value="<?= $ambil_data['email'] ?>">
			</div>

			<div class="input-user form-group"> <label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" value="<?= $ambil_data['jurusan'] ?>">
			</div>

			<div class="input-user form-group form-group-image"> <label for="gambar">Gambar : </label>
				<img src="images/<?= $ambil_data['gambar'] ?>" alt="eror" class="current-image"> <input type="file"
					name="gambar" id="gambar" class="input-file">
			</div>

			<button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
		</form>
	</div>
</body>

</html>