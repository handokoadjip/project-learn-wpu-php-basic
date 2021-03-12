<?php 

// User-defined-function
	function salam($waktu = "Datang", $nama = "Admin"){
		return "Selamat $waktu, $nama!";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Function</title>
</head>
<body>
	
	<!-- Panggil Function Berparameter -->
	<h1><?= salam("Pagi", "Expcod"); ?></h1>

	<!-- Panggil Function menggunakan default function -->
	<h1><?= salam(); ?></h1>
</body>
</html>