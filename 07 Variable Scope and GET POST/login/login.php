<?php 

// cek apakah user sudah pencet submit
if(isset($_POST["submit"])){
	// cek apakah password benar
	if($_POST["nama"] == "admin" && $_POST["password"] == "admin"){
		// jika benar
		header("location: admin.php");
		exit();
	} else {
		// jika salah
		$error = true;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	
	<h1>Login</h1>
	<form action="" method="POST">
		<label for="nama">Nama : </label>
		<input type="text" name="nama" id="nama" />
		<label for="password">Password : </label>
		<input type="password" name="password" id="password" />
		
		<button type="submit" name="submit">kirim</button>
	</form>
	<?php if (isset($error)): ?>
		<p>username atau password salah</p>
	<?php endif ?>
	
</body>
</html>