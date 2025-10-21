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
?>