<?php 

// Array Associative
// Key-nya adalah string yang dibuat sendiri
	
$studentss = [
	[
	"gambar" => "1.jpg",
	"nama" => "Handoko Adji Pangestu",
	"nim" => "11217052",
	"email" => "Handokoadjipangestu@gmail.com",
	"jurusan" => "Teknik Informatika"
	],

	[
	"gambar" => "2.jpg",
	"nama" => "Christoper Glenn",
	"nim" => "11217052",
	"email" => "Handokoadjipangestu@gmail.com",
	"jurusan" => "Teknik Informatika"
	],

	[
	"gambar" => "3.jpg",
	"nama" => "Mahmud Setyoaji",
	"nim" => "11217052",
	"email" => "Handokoadjipangestu@gmail.com",
	"jurusan" => "Teknik Informatika"
	],

	[
	"gambar" => "4.jpg",
	"nama" => "Iqbal Rizal P",
	"nim" => "11217052",
	"email" => "Handokoadjipangestu@gmail.com",
	"jurusan" => "Teknik Informatika"
	],

	[
	"gambar" => "5.jpg",
	"nama" => "Bagas Rizayanto",
	"nim" => "11217052",
	"email" => "Handokoadjipangestu@gmail.com",
	"jurusan" => "Teknik Informatika"
	]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan2</title>
</head>
<body>
	
	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($studentss as $students): ?>
		<ul>
			<li><img src="image/<?= $students["gambar"] ?>" alt="" width="100px"></li>
			<li>Nama     : <?= $students["nama"] ?></li>
			<li>Nim      : <?= $students["nim"] ?></li>
			<li>email    : <?= $students["email"] ?></li>
			<li>jurusan  : <?= $students["jurusan"] ?></li>
		</ul>
	<?php endforeach ?>

</body>
</html>