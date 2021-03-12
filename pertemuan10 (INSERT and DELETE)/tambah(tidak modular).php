<?php 	
// koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

// cek apakah submit sudah di klik
if(isset($_POST["submit"])){
	// cek apakah data sudah masuk kedalam variable superglobals
	// var_dump($_POST);
	
	// ambil data
	$nama = $_POST["nama"];
	$nrp = $_POST["nrp"];
	$email = $_POST["email"];
	$jurusan = $_POST["jurusan"];
	$gambar = $_POST["gambar"];

	// Masukan query kedalam variable agar tidak panjang di mysqli_query
	$query = "INSERT INTO mahasiswa
				VALUES
			('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
			";
	// Masukan variable tersebut
	mysqli_query($conn, $query);

	// cek apakah data sudah masuk
	// jika 1 maka berhasil jika -1 maka tidak berhasil
	if(mysqli_affected_rows($conn) > 0){
		echo "berhasil masukan data";
	} else {
		echo "gagal masukan data";
		echo "<br/>";
		echo mysqli_error($conn);
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>
	<form action="" method="post">
	<ul>
		<li>
			<label for="nrp">NRP</label>
			<input type="text" name="nrp" id="nrp" />
		</li>
		<li>
			<label for="nama">Nama</label>
			<input type="text" name="nama" id="nama" />
		</li>
		<li>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" />
		</li>
		<li>
			<label for="jurusan">Jurusan</label>
			<input type="text" name="jurusan" id="jurusan" />
		</li>
		<li>
			<label for="gambar">Gambar</label>
			<input type="text" name="gambar" id="gambar" />
		</li>
		<li>
			<button type="submit" name="submit">tambah data</button>
		</li>
	</ul>
	</form>
</body>
</html>