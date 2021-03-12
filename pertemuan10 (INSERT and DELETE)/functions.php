<?php 

// Koneksi Database
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

function query($query){
	
	// Mengambil variable conn dari atas
	global $conn;

	// Membuat QUERY
	$result = mysqli_query($conn, $query);

	// Membuat tampungan untuk megisi record
	$rows = [];

	// Mengambil query
	while ( $row = mysqli_fetch_assoc($result)) {
	    $rows[] = $row;
	}

	return $rows;
}

function tambah($data){
	
	global $conn;

	// Masukan data dari $_POST
	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// Masukan query kedalam variable agar tidak panjang di mysqli_query
	$query = "INSERT INTO mahasiswa
				VALUES
			('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
			";
	// Masukan variable tersebut
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id){

	global $conn;

	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

	return mysqli_affected_rows($conn);
}

?>