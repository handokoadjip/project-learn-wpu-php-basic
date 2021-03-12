<?php 

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
	// U/ User
		// echo, print

	// U/ Debugging
		// print_r  -> cetak isi array
		// var_dump -> melihat isi dari variable
	
// Ex
	// echo 'string';
	// print 'string';
	// print_r('expression');
	// var_dump('expression');

// Penggunaan '' dan ""
	// '' -> biasa
	// "" -> interpolasi
	// echo 'nama : ' . $nama;
	// echo "nama : $nama";

// penulisan sintaks PHP
	// 1. PHP di dalam HTML
	// 2. HTML di dalam PHP

// Tipe Data
	// Number
	//  String
	//  Boolean
	//  Object
	//  Function
	//  Undefined

// Variable
// Tidak boleh diawali angka, tapi boleh mengandung angka
// Variable (Tidak usah di tulis tipe data)
$nama = "Handoko Adji Pangestu";
$interpolasi = "Interpolasi";

// '' dan ""
echo "Ini adalah $interpolasi";
echo '<br/>';
echo 'Ini adalah bukan $interpolasi';

// Operator
	// Binary -> 2 operand 
		// Aritmatika
			// + - / * % ++ --  
				// $x = 10;
				// $y = 20;
				// echo $x * $y;
			
		// Penugasan
			// = += -= .= /= %= |= ^=
				// $x = 1;
				// $x += 5;
				// echo $x;
				// $nama = "Exp";
				// $nama .= " ";
				// $nama .= "Cod";
			
		// Perbandingan
			// == === != atau <> !== < > <= >= 
				// Biasa
				// var_dump(1 == "1");
				// Identitas
				// var_dump(1 === "1");
				
		// Logika
			// && atau And || atau OR ! atau NOT XOR 
				// $x = 30;
				// var_dump($x < 20 || $x % 2 == 0);
				 
		// String
			// .
				// $nama_depan = "Exp";
				// $nama_belakang = "Cod";
				// echo $nama_depan . " " . $nama_belakang 
	
	// Ternary -> 3 operand
		// Kondisional
			// (Kondisi) ? benar : salah 
			// echo '<br/>';
			// $chek = ( 5 < 3 ) ? "siap" : "Ashiap";
			// echo $chek;

	// Unary   -> 1 operand
		// Typeof
			// Typeof(operand)

// Escape Character
	// \
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Halo, Selamat Datang <?php echo $nama; ?>.</h1>	
</body>
</html>