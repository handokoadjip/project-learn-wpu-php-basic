<?php 	

// memanggil file mpdf dari composer
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$students = query("SELECT * FROM mahasiswa");

// instansiasi object
$mpdf = new \Mpdf\Mpdf();

// yang ingin di cetak
$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	Daftar Mahasiswa</title>
	<style>
		tr:nth-child(even){
			background-color: red;
		}
	</style>
	// atau linkrel bisa
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>';

		$i = 1;
		foreach ($students as $student) {
			$html .='<tr>
				<td>' . $i++ . '</td>
				<td><img src="image/' . $student["gambar"] . '" width ="50"></td>
				<td>' . $student["nrp"] . '</td>
				<td>' . $student["nama"] . '</td>
				<td>' . $student["email"] . '</td>
				<td>' . $student["jurusan"] . '</td>
			</tr>';	
		}

$html .='</table>
</body>
</html>';

// cetak
$mpdf->WriteHTML($html);
// jika ingin di beri nama, function
// i inline
// d download
$mpdf->Output("Data Mahasiswa.pdf", 'i');

?>
