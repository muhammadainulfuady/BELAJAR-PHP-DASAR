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
function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
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

function tambah($data)
{
	global $conn;
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	// query untuk insert data ke dalam tabel menggunakan insert into nama tabelnya di ikuti dengan apa yang mau kita isikan dan juga dengan value
	$query = "INSERT INTO data_mhs (nrp, nama, email, jurusan, gambar) values('$nrp', '$nama', '$email', '$jurusan', '$gambar')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function upload()
{
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$eror = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang di upload
	if ($eror === 4) {
		echo "<script>alert('Pilih gambar terlebih dahulu');</script>";
		return false;
	}

	// cek apakah yang di upload sama user itu adalah gambar atau bukan
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode(".", $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>alert('Yang anda upload bukan gambar');</script>";
		return false;
	}

	// cek jika ukuranya terlalu besar
	if ($ukuranFile > 1000000) {
		echo "<script>alert('Ukuran gambar terlalu besar');</script>";
		return false;
	}

	// lolos pengecekan gambar siap di upload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= ".";
	$namaFileBaru .= $ekstensiGambar;
	move_uploaded_file($tmpName, "images/" . $namaFileBaru);
	return $namaFileBaru;
}

function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM data_mhs WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;
	$id = $data["id"];
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$gambarLama = htmlspecialchars($data['gambarLama']);

	// cek apakah user pilih gambar baruatau tidak
	if (($_FILES['gambar']['error']) == 4) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}

	$query = "UPDATE data_mhs SET
		nrp = '$nrp',
		nama = '$nama',
		email = '$email',
		jurusan = '$jurusan',
		gambar = '$gambar' 
		WHERE id = $id";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function cari($keywoard)
{
	$query = "SELECT * FROM data_mhs WHERE 
	LOWER(nrp) LIKE '%$keywoard%' OR
	LOWER(nama) LIKE '%$keywoard%' OR
	LOWER(email) LIKE '%$keywoard%' OR
	LOWER(jurusan) LIKE '%$keywoard%'
	";
	return query($query);
}

function registrasi($data)
{
	global $conn;
	$username = strtolower(stripcslashes($data['username']));
	$password = mysqli_real_escape_string($conn, $data['password']);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);

	// cek username sudah ada atau tidak
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>alert('Username sudah terdaftar');</script>";
		return false;
	}

	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>alert('Password tidak sesuai');</script>";
		return false;
	}
	// enkripsi pasword
	$password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn, "INSERT INTO user VALUES(NULL ,'$username', '$password')");
	return mysqli_affected_rows($conn);

}
?>