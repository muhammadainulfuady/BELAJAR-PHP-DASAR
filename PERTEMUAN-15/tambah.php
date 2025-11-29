<?php
mysqli_report(MYSQLI_REPORT_OFF);
include "functions.php";

// cek apakah data sudah di submit apa belum
if (isset($_POST['submit'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
				alert('Data berhasil di tambah');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo "<script>
				alert('Data gagal di tambah');
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
	<title>Halaman Tambah-Data</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container form-page-container">
		<h1>Tambah Data Mahasiswa</h1>
		<form action="" method="post" enctype="multipart/form-data" class="form-container">
			<div class="input-user form-group"> <label for="nrp">Masukkan nrp terbaru : </label>
				<input type="text" name="nrp" id="nrp">
			</div>

			<div class="input-user form-group"> <label for="nama">Masukkan nama terbaru : </label>
				<input type="text" name="nama" id="nama">
			</div>

			<div class="input-user form-group"> <label for="email">Masukkan Email terbaru : </label>
				<input type="text" name="email" id="email">
			</div>

			<div class="input-user form-group"> <label for="jurusan">Masukkan Jurusan terbaru : </label>
				<input type="text" name="jurusan" id="jurusan">
			</div>

			<div class="input-user form-group"> <label for="gambar">Masukkan Gambar terbaru : </label>
				<input type="file" name="gambar" id="gambar" class="input-file">
			</div>

			<button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
		</form>
	</div>
</body>

</html>