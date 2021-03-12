<?php 

// cek apakah tidak ada di $_GET
	if ( !isset($_GET["gambar"]) ||
		!isset($_GET["nama"]) ||
		!isset($_GET["nim"]) ||
		!isset($_GET["email"]) ||
		!isset($_GET["jurusan"])
	   ){
		
		// Redirect
		header("location: latihan1.php");
		exit;
		
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan2</title>
</head>
<body>
	
	<a href="latihan1.php">Kembali</a>
	<ul>
		<li><img src="image/<?= $_GET["gambar"]; ?>" alt="" width="100px"></li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["nim"]; ?></li>
		<li><?= $_GET["email"]; ?></li>
		<li><?= $_GET["jurusan"]; ?></li>
	</ul>
</body>
</html>