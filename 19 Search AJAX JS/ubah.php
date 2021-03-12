<?php 	
// set session
session_start();

// cek apakah session ada atau tidak atau melalui login tidak
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}

// Mengambil functions 
require "functions.php";

$id = $_GET["id"];
$student = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

// cek apakah submit sudah di klik
if(isset($_POST["submit"])){
	// cek apakah data sudah masuk kedalam variable superglobals
	// var_dump($_POST);

	// cek apakah data sudah diubah
	// jika 1 maka berhasil jika -1 maka tidak berhasil
	if(ubah($_POST) > 0){
		echo "
			<script>
					alert('berhasil diubah data');
					document.location.href = 'index.php'
			</script>
		";
	} else {
		echo "
		<script>
				alert('gagal diubah data');
				document.location.href = 'index.php'
		</script>		
		";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubah Mahasiswa</title>
</head>
<body>
	<h1>Ubah data mahasiswa</h1>
	<form action="" method="post" enctype="multipart/form-data">
	<!-- untuk memasukan id ke dalam $_POST -->
	<input type="hidden" name="id" value="<?= $student["id"] ?>">
	<!-- untuk gambar lama ketika tidak upload gambar baru -->
	<input type="hidden" name="gambarLama" value="<?= $student["gambar"] ?>">
	<!-- Tambah Value untuk mengisi textbox sesuai data -->
	<ul>
		<li>
			<label for="nrp">NRP</label>
			<input type="text" name="nrp" id="nrp" required value="<?= $student["nrp"] ?>" />
		</li>
		<li>
			<label for="nama">Nama</label>
			<input type="text" name="nama" id="nama" required value="<?= $student["nama"] ?>" />
		</li>
		<li>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" 
			required value="<?= $student["email"] ?>" />
		</li>
		<li>
			<label for="jurusan">Jurusan</label>
			<input type="text" name="jurusan" id="jurusan" required value="<?= $student["jurusan"] ?>" />
		</li>
		<li>
			<label for="gambar">Gambar</label>
			<br>
			<!-- menampilkan gambar -->
			<img src="image/<?= $student['gambar'] ?>" width = "80" height = "80" alt="">
			<br>
			<input type="file" name="gambar" id="gambar" />
		</li>
		<li>
			<button type="submit" name="submit">ubah data</button>
		</li>
	</ul>
	</form>
</body>
</html>