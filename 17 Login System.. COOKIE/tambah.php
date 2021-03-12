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

// cek apakah submit sudah di klik
if(isset($_POST["submit"])){
	// cek apakah data sudah masuk kedalam variable superglobals
	// var_dump($_POST);

	// cek apakah file sudah di kelola  $_FILES
	// var_dump($_FILES); die;

	// cek apakah data sudah masuk
	// jika 1 maka berhasil jika -1 maka tidak berhasil
	if(tambah($_POST) > 0){
		echo "
			<script>
					alert('berhasil menambahkan data');
					document.location.href = 'index.php'
			</script>
		";
	} else {
		echo "
		<script>
				alert('gagal menambahkan data');
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
	<title>Tambah Mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>
	<!-- untuk string akan di kelola $_POST -->
	<!-- untuk file akan di kelola $_FILES -->
	<!-- Dengan syarat ada atrb enctype -->
	<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="nrp">NRP</label>
			<input type="text" name="nrp" id="nrp" required />
		</li>
		<li>
			<label for="nama">Nama</label>
			<input type="text" name="nama" id="nama" required />
		</li>
		<li>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" 
			required />
		</li>
		<li>
			<label for="jurusan">Jurusan</label>
			<input type="text" name="jurusan" id="jurusan" required />
		</li>
		<!-- input type file untuk mengelola file -->
		<li>
			<label for="gambar">Gambar</label>
			<input type="file" name="gambar" id="gambar" required />
		</li>
		<li>
			<button type="submit" name="submit">tambah data</button>
		</li>
	</ul>
	</form>
</body>
</html>