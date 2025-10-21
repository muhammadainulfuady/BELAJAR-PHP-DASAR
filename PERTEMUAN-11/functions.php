<?php
// mysqli_report(MYSQLI_REPORT_OFF);

// koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$db_name = "mahasiswa";
$conn = mysqli_connect($host, $user, $password, $db_name);

// setupu query yang akan kita ambil di dalam databases
$query_databases = "SELECT * FROM data_mhs";

// ambil data dari mahasiswa
$result = mysqli_query($conn, $query_databases);

// mebuat function query untuk menagmbil data dengan fungsi
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

// ambil data (fetch) mahasiswa dari object result
// 1. mysqli_fetch_row(), mengembalikan nilai numerik
// 2. mysqli_fetch_assoc(), mengembalikan nilai associatif
// 3. mysqli_fetch_array(), bisa mengembalikan nilai numerik dan juga nilai associatif
// 4. mysqli_fetch_object(), mengembalikan object

// while($mhs = mysqli_fetch_assoc($result)) {
//   var_dump($mhs);
// }

// function tambah akan menrima sebuiah data baru
function tambah($data) {
	global $conn;
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambar = htmlspecialchars($data['gambar']);

	// query untuk insert data ke dalam tabel menggunakan insert into nama tabelnya di ikuti dengan apa yang mau kita isikan dan juga dengan value
	$query = "INSERT INTO data_mhs (nrp, nama, email, jurusan, gambar) values('$nrp', '$nama', '$email', '$jurusan', '$gambar')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM data_mhs WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;
	$id = $data["id"];
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambar = htmlspecialchars($data['gambar']);

	$query = "UPDATE data_mhs SET
		nrp = '$nrp',
		nama = '$nama',
		email = '$email',
		jurusan = '$jurusan',
		gambar = '$gambar' 
		WHERE id = $id";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
	// die;
}
?>