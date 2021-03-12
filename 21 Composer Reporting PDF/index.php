<?php 
// set session
session_start();

// cek apakah session ada atau tidak atau melalui login tidak
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}

// memanggil file functions
require 'functions.php';

// memanggil file mpdf dari composer
// require_once __DIR__ . '/vendor/autoload.php';

// memanggil function query
$students = query("SELECT * FROM mahasiswa");

// mencari data
if( isset($_GET["cari"]) ){
	$students = cari($_GET["cari_nama"]);
}

// menampilkan mahasiswa dari lama ke baru
// SELECT * FROM  mahasiswa ORDER BY id ASC
// menampilkan mahasiswa dari terbaru ke lama
// SELECT * FROM  mahasiswa ORDER BY id DSC
// menampilkan mahasiswa sesuai nrp
// SELECT * FROM mahasiswa WHERE nrp = '11217052'

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/script.js"></script>
	<style>	
		.loader{
			width: 100px;
			position: absolute;
			top: 76px;
			left: 150px;
			z-index: -1;
			display: none;
		}
		
		
		/*print bisa menggunakan browser dan library*/

		/*sintaks css untuk print menggunakan browser*/
		@media print{
			.no-p{
				display: none;
			}
		}

	</style>
</head>
<body>
	<h1 class="no-p">Tabel Mahasiswa</h1>
	<a href="tambah.php" class="no-p">Tambah data mahasiswa</a>
	<br><br>
	<form action="" method="get">
		<!-- autofocus agar langsung input ketika fi refresh -->
		<!-- autocomplete agar tidak menyimpan history pengetikan -->
		<!-- ajax jalan -->
		<input type="text" name="cari_nama" placeholder="cari data" autofocus autocomplete="off" id="keyword" class="no-p">
		<!-- php jalan -->
	<!-- 	<button type="submit" name="cari" id="tombol-cari">Cari</button> -->

		<img src="image/loader.gif" alt="" class="loader">
	</form>
	<br>
	
	<div id="container">
	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<th>No</th>
			<th class="no-p">Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</thead>
		
		<?php $i = 1 ?>
		<?php foreach ($students as $student): ?>
		
			<tbody>
				<td><?= $i; ?></td>
				<td class="no-p"><a href="ubah.php?id=<?= $student["id"] ?>">Ubah</a> || <a href="hapus.php?id=<?= $student["id"] ?>" onclick = "return confirm('Apakah anda yakin?')">Hapus</a></td>
				<td><img src="image/<?= $student["gambar"]; ?>" alt="" width = "100" height = "100"></td>
				<td><?= $student["nrp"] ?></td>
				<td><?= $student["nama"] ?></td>
				<td><?= $student["email"] ?></td>
				<td><?= $student["jurusan"] ?></td>
			</tbody>

		<?php $i++; ?>
		<?php endforeach ?>	
	</table>
	</div>

<br>
<a href="cetak.php" target="_blank">cetak</a> || <a href="logout.php" class="no-p">Logout</a>

</body>
</html>