<?php 	

// Mengambil functions 
require "functions.php";

// cek apakah submit sudah di klik
if(isset($_POST["submit"])){
	// cek apakah data sudah masuk kedalam variable superglobals
	// var_dump($_POST);

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
	<form action="" method="post">
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
		<li>
			<label for="gambar">Gambar</label>
			<input type="text" name="gambar" id="gambar" required />
		</li>
		<li>
			<button type="submit" name="submit">tambah data</button>
		</li>
	</ul>
	</form>
</body>
</html>