<?php

require 'functions.php';
$students = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
</head>

<body>
	<h1>Tabel Mahasiswa</h1>
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
		<?php foreach ($students as $student) : ?>

			<tbody>
				<td><?= $i; ?></td>
				<td><a href="">Ubah</a> || <a href="">Hapus</a></td>
				<td><img src="image/<?= $student["gambar"]; ?>" alt="" width="100" height="100"></td>
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