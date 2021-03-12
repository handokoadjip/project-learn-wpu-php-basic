<?php 

require '../functions.php';

// mengambil get dari js
$keyword = $_GET["keyword"];

// query
$query = "SELECT * FROM mahasiswa
				WHERE
			nrp LIKE '%$keyword%' OR
			nama LIKE '%$keyword%'
			";

$students = query($query);

?>

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
