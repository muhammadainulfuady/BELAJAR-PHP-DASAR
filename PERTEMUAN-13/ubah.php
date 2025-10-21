<?php 
mysqli_report(MYSQLI_REPORT_OFF);
require "functions.php";

// ambil data di url menggunakan method GET
$id = $_GET['id'];
$ambil_data = query("SELECT * FROM data_mhs WHERE id = $id")[0];
// cek apakah data sudah di submit apa belum
if(isset($_POST['submit']) ) {
	if(ubah($_POST) > 0) {
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
		<h1>Ubah Data Mahasiswa</h1>
		<form action="" method="post">
			<input type="hidden" name="id" value="<?= $id ?>">
				<div class="input-user">
					<label for="nrp">Nrp : </label>
					<input type="text" name="nrp" id="nrp" value="<?= $ambil_data['nrp'] ?>">
				</div>

				<div class="input-user">
					<label for="nama">Nama : </label>
					<input type="text" name="nama" id="nama" value="<?= $ambil_data['nama'] ?>">
				</div>

				<div class="input-user">
					<label for="email">Email : </label>
					<input type="text" name="email" id="email" value="<?= $ambil_data['email'] ?>">
				</div>

				<div class="input-user">
					<label for="jurusan">Jurusan : </label>
					<input type="text" name="jurusan" id="jurusan" value="<?= $ambil_data['jurusan'] ?>">
				</div>

				<div class="input-user">
					<label for="gambar">Gambar : </label>
					<input type="text" name="gambar" id="gambar" value="<?= $ambil_data['gambar'] ?>">
				</div>

			<button type="submit" name="submit">Ubah Data</button>
		</form>
	</div>
</body>
</html>