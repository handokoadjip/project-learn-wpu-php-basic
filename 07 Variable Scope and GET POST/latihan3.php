<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan3</title>
</head>
<body>
	
	<!-- ketika action tidak di isi, default nya akan mengirin ke halaman ini juga -->
	<!-- ketika method tidak di isi, default nya terisi GET -->
	<!-- POST Harus menggunakan form sedangkan GET bisa tidak -->
	<h1>Unruk mengirim ke halaman lain</h1>
	<form action="latihan4.php" method="POST">
		<label for="nama">Nama : </label>
		<input type="text" name="nama" id="nama" />
		<button type="submit" name="submit">kirim</button>
	</form>
	
	<h1>Untuk mengirim ke halaman sini</h1>
	<form action="" method="POST">
		<label for="nama">Nama : </label>
		<input type="text" name="nama" id="nama" />
		<button type="submit" name="submit">kirim</button>
	</form>

	<?php if (isset($_POST["submit"])): ?>	
		<h1>Selamat Datang <?= $_POST["nama"]; ?></h1>
	<?php endif ?>
</body>
</html>