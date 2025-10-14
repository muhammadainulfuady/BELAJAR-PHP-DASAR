<?php 
mysqli_report(MYSQLI_REPORT_OFF);
include "functions.php";

// cek apakah data sudah di submit apa belum
if(isset($_POST['submit']) ) {
	if(tambah($_POST) > 0) {
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
	<style>
		body {
		    font-family: Arial, sans-serif;
		    background: #f9f9f9;
		    margin: 0;
		    padding: 0;
		}

		.container {
		    width: 400px;
		    margin: 50px auto;
		    background: #fff;
		    padding: 25px;
		    border-radius: 10px;
		    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
		}

		h1 {
		    text-align: center;
		    color: #333;
		    margin-bottom: 20px;
		}

		form {
		    display: flex;
		    flex-direction: column;
		    gap: 15px;
		}

		.input-user {
		    display: flex;
		    flex-direction: column;
		}

		.input-user label {
		    margin-bottom: 5px;
		    font-weight: bold;
		    color: #555;
		}

		.input-user input {
		    padding: 10px;
		    border: 1px solid #ccc;
		    border-radius: 8px;
		    outline: none;
		    transition: 0.3s;
		}

		.input-user input:focus {
		    border-color: blue;
		    box-shadow: 0 0 5px blue;
		}

		button {
		    padding: 10px;
		    border: none;
		    background: blue;
		    color: white;
		    font-weight: bold;
		    border-radius: 8px;
		    cursor: pointer;
		    transition: 0.3s;
		}

		button:hover {
		    background: darkblue;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Tambah Data Mahasiswa</h1>
		<form action="" method="post">
			<div class="input-user">
				<label for="nrp">Masukkan nrp terbaru : </label>
				<input type="text" name="nrp" id="nrp">
			</div>

			<div class="input-user">
				<label for="nama">Masukkan nama terbaru : </label>
				<input type="text" name="nama" id="nama">
			</div>

			<div class="input-user">
				<label for="email">Masukkan Email terbaru : </label>
				<input type="text" name="email" id="email">
			</div>

			<div class="input-user">
				<label for="jurusan">Masukkan Jurusan terbaru : </label>
				<input type="text" name="jurusan" id="jurusan">
			</div>

			<div class="input-user">
				<label for="gambar">Masukkan Gambar terbaru : </label>
				<input type="text" name="gambar" id="gambar">
			</div>

			<button type="submit" name="submit">Simpan Data</button>
		</form>
	</div>
</body>
</html>