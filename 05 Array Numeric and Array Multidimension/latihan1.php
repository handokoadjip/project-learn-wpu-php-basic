<?php 

// Array
// Variable yang dapat menampung nilai yang banyak

// Membuat Array
	// Cara lama sebelum PHP 5.4
		// Array Numeric
		$hari = array("Senin", "Selasa", "Rabu");

	// Cara Baru
		// Array Numeric
		$bulan = ["Januari", "Februari", "Maret"]; 

// Tipe Data boleh beda
	$arr1 = [123, "tulisan", false];

// Menampilkan Array
	// var_dump() / print_r
		var_dump($hari);
		echo '<br/>';
		print_r($bulan); 
		echo '<br/>';

// Menampilkan Array 1 elemen
	echo $hari[0];
	echo '<br/>';
	echo $bulan[1];
	echo '<br/>';

// Menambahkan elemen baru pada array
	var_dump($hari);
	echo '<br/>';
	$hari[] = "Kamis";
	$hari[] = "jum'at";
	var_dump($hari);

?>