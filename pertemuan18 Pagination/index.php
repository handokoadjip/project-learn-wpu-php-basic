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

// konfigurasi pagination
$jumlahDataPerHalaman = 3;

// Mengitung total berapa halaman dari jumlah data
// jumlah mahasiswa yang ada / jumlah data yang ingin di tampilkan dilayar
// jumlah halaman = total data/ data per halaman

// Total Data
// mengembalikan array
// maka menggunakan count untuk menghitung ada berapa array
$totalData = count(query("SELECT * FROM mahasiswa"));

// cara lain
	// Total Data
	// object
	// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

	// function ini akan mengahsilkan ada berapa record yang ada di table mahasiswa namun object
	// $totalData = mysqli_num_rows($result);

// mencari jumlah halaman ada berapa jika ada data sekian dan yang ditampilkan sekian
// Jika totalData 6 dan jumlahDataPerHalaman 2 maka jumlahHalaman 2
// bagaimana jika totalData 6 dan jumlahDataPerHalaman 5 ? harusnya 2 halaman namun ketika di hitung maka hasilnya 1.2 .. maka dari itu kita menggunakan function
// ceil() > pembulatan keatas
// round() > pembulatan mendekati
// floor() > pembulatan kebawah

$jumlahHalaman = ceil($totalData / $jumlahDataPerHalaman);

// cara mengetahui ada di halaman berapa agar Limit data tidak dimulai dari itu itu lagi
// menggunakan url namun ketika $halamanAktif = $_GET["page"]; maka akan error karena data belum dikirim
// maka ketika buka tanpa ada data yang dikirim kita hrus memberi nilai default 1
// Kalau sudah di set makan halaman aktif diambil dari url
// IF
// if ( isset($_GET["page"]) ){
// 	$halamanAktif = $_GET["page"];
// } else {
// 	$halamanAktif = 1;
// }

// TERNARY
$halamanAktif = ( isset($_GET["page"]) ) ? $_GET["page"] : 1;

// menentukan ketika halaman aktif halaman berapa, maka kita mulai dari data mana
// Jika jumlah dataperhalaman 2
// halaman = 2, awalData = 2
// halaman = 3, awawlData = 4

// jika jumlah dataperhalaman 4
// halaman = 2, awalData = 4 karena halaman 1 di mulai dari 0,1,2,3
// halaman = 3, awalData = 8
  
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman; 

// memanggil function query
$students = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");
// $students = query("SELECT * FROM mahasiswa");


// Pagination
// $students = query("SELECT * FROM mahasiswa LIMIT (dimulai index), (berapa data yang di tampilkan)");
// ex
// $students = query("SELECT * FROM mahasiswa LIMIT 0,5");

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
	
	<?php if( $halamanAktif > 1 ) : ?>
		<a href="?page=<?= $halamanAktif - 1 ?>">&laquo;</a>
	<?php endif; ?>

	<!-- menampikan nav -->
	<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
		<!-- memberi isual feedback -->
		<?php if ( $i == $halamanAktif ) : ?>
			<!-- mengirim data url ke halaman ini -->
			<a href="?page=<?= $i ?>" style="font-weight: bold;color: red"><?= $i ?></a>
		<?php else : ?>
			<a href="?page=<?= $i ?>"><?= $i ?></a>
		<?php endif; ?>
	<?php endfor; ?>
	
	<?php if( $halamanAktif < $jumlahHalaman ) : ?>
		<a href="?page=<?= $halamanAktif + 1 ?>">&raquo;</a>
	<?php endif; ?>

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
		
		<?php $i = 1 + $awalData ?>
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

<br>
<a href="logout.php">Logout</a>
</body>
</html>