<?php 
// memanggil file functions
require 'functions.php';

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
</head>
<body>
	<h1>Tabel Mahasiswa</h1>
	<a href="tambah.php">Tambah data mahasiswa</a>
	<br><br>
	<form action="" method="get">
		<!-- autofocus agar langsung input ketika fi refresh -->
		<!-- autocomplete agar tidak menyimpan history pengetikan -->
		<input type="text" name="cari_nama" id="cari" placeholder="cari data" autofocus autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>
	<br>

	<table border="1" cellpadding="10" cellspacing="0">
		<thead>
			<th>No</th>
			<th>Aksi</th>
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
				<td><a href="ubah.php?id=<?= $student["id"] ?>">Ubah</a> || <a href="hapus.php?id=<?= $student["id"] ?>" onclick = "return confirm('Apakah anda yakin?')">Hapus</a></td>
				<td><img src="image/<?= $student["gambar"]; ?>" alt="" width = "100" height = "100"></td>
				<td><?= $student["nrp"] ?></td>
				<td><?= $student["nama"] ?></td>
				<td><?= $student["email"] ?></td>
				<td><?= $student["jurusan"] ?></td>
			</tbody>

		<?php $i++; ?>
		<?php endforeach ?>
		
	</table>

</body>
</html>