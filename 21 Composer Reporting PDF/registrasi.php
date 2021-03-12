<?php

// memanggil file functions
require 'functions.php';

// cek ketika tombol registrasi sudah di tekan
if( isset($_POST["registrasi"]) ){
	if( registrasi($_POST) > 0 ) {
		echo '<script>
			alert("User baru berhasil di tambah");
		</script>';
	} else {
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrasi</title>
</head>
<body>
	<h1>Registrasi</h1>
	<form action="" method="POST">
		
		<ul>
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username">
			</li>
			
			<li>
				<label for="password1">Password : </label>
				<input type="password" name="password1" id="password1">		
			</li>
			
			<li>
				<label for="password2">Konfirmasi Password : </label>
				<input type="password" name="password2" id="password2">
			</li>

			<li>
				<button type="submit" name="registrasi">Registrasi</button>
			</li>

		</ul>
		

		
	</form>
</body>
</html>