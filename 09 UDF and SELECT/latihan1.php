 <?php 
// Menghubungkan halaman web dengan mySQL dengan PHP
// Dappat menggunakan ekstensi atau driver atau fungsi
// 1. Ekstensi MySQL -> versi lama 5.4
// 2. Ekstensi MySQLi -> versi baru i -> improve
// 3. PDO (PHP Data Object) -> terhubung ke banyak database

// koneksi ke database

// (nama server, username, password, nama database)
// dimasukan ke variable link/db/conn
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
// mysqli_query(mysqli_connect(), query) jika menggunakan mySQLi. kalau mySQL tidak perlu mysql_connct();

// Kalau seperti ini ketika salah input nama table maka tidak ada error
// mysqli_query($conn, 'SELECT * FROM mahasiswa')


// makanya dimasukan kedalam variable result
// agar mengembalikan nilai berhasil ditambah dan nilai true. jika gagal tidak menjalakna query nya 
// mengembalikan object
$result = mysqli_query($conn, 'SELECT * FROM mahasiswa');

// cek apakah nama table ada
if( !$result ){
	echo mysqli_error($conn);
}

// mengambil data yang ada di object $result tapi hanya satu record
// mysqli_fetch_row(); -> mengembalikan array numeric
// mysqli_fetch_assoc(); -> mengembalikan array associative
// mysqli_fetch_array(); -> mengembalikan array numeric dan associative
// mysqli_fetch_object(); -> mengembalikan object

// contoh

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs);
// echo $mhs[2];

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs);
// echo $mhs["nama"];
 
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);
// echo $mhs["nama"];
// echo $mhs[2];

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs);
// echo $mhs->nama;

// Gunakan while untuk mengambil semua record
// while ( $mhs = mysqli_fetch_assoc($result) ) {
// 	var_dump($mhs);
// }

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

		<?php $i = 0 ?>
		<?php while ( $mhs = mysqli_fetch_assoc($result) ) : ?>
			<tbody>
				<td><?= $i; ?></td>
				<td><a href="">Ubah</a> || <a href="">Hapus</a></td>
				<td><img src="image/<?= $mhs["gambar"]; ?>" alt="" width = "100" height = "100"></td>
				<td><?= $mhs["nrp"] ?></td>
				<td><?= $mhs["nama"] ?></td>
				<td><?= $mhs["email"] ?></td>
				<td><?= $mhs["jurusan"] ?></td>
			</tbody>
		<?php $i++ ?>
		<?php endwhile; ?>
	</table>

</body>
</html>