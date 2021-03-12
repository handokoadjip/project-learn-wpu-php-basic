<?php 

// Variable Scope / lingkup variable
// variable public
$x = 10;

function tampilx(){
	// mencari variable public agar dapat dipakai di function
	global $x;

	// variable local
	// $x = 20;
	
	echo $x;
}

tampilx();

// Metode Request
// GET DAN POST

// Vaariable superglobals
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

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
	<title>Latihan1</title>
</head>
<body>
	
	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($studentss as $students): ?>
		<ul>
			<li><a href="latihan2.php?gambar=<?= $students["gambar"]; ?>&nama=<?= $students["nama"]; ?>&nim=<?= $students["nim"]; ?>&email=<?= $students["email"]; ?>&jurusan=<?= $students["jurusan"]; ?>"><?= $students["nama"]; ?></a></li>
		</ul>
	<?php endforeach ?>

</body>
</html>