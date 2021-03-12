<?php 	

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
	<form action="" method="post">
	<!-- untuk memasukan id ke dalam $_POST -->
	<input type="hidden" name="id" value="<?= $student["id"] ?>">
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
			<input type="text" name="gambar" id="gambar" required value="<?= $student["gambar"] ?>" />
		</li>
		<li>
			<button type="submit" name="submit">ubah data</button>
		</li>
	</ul>
	</form>
</body>
</html>