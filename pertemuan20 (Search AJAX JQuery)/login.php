<?php 
// set session
session_start();
require 'functions.php';

// cek apakah ada cookie
// mudah di tebak
// if( isset($_COOKIE["login"]) ){
// 	// cek cookie nya, takut user yang membuat cookie
// 	if ($_COOKIE["login"] == "true") {
// 		$_SESSION["login"] = true;
// 	}
// }

// cek cookie encrypt
if (isset($_COOKIE["id"]) && $_COOKIE["key"]) {
	$key = $_COOKIE["id"];
	$user = $_COOKIE["user"];

	// cocokan antara $user dengan user database, jika match boleh masuk
	
	// ambil username berdasarkan id
	$result = mysqli_query("SELECT username FROM user WHERE id = $id");

	// row berisi username
	$row = mysqli_fetch_assoc($result);

	// cek cookie dengan username
	if( $user === hash("sha256", $row["username"]) ){
		$_SESSION["login"] = true;
	}
}

// jika session sudah di set maka pindahkan ke index.php
if( isset($_SESSION["login"]) ){
	header("Location: index.php");
	exit;
}

	if( isset($_POST["login"]) ){

		if( login($_POST) == 0 ){
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
	
	<h1>halaman login</h1>
	
	<?php if ( isset($error) ) : ?>
		<p>username / password salah</p>
	<?php endif ?>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username">
			</li>

			<li>
				<label for="password">Password : </label>
				<input type="password" name="password" id="password">
			</li>
			
			<li>
				<input type="checkbox" name="remember" id="remember">
				<label for="remember">Remember me</label>
			</li>

			<li>
				<button type="submit" name="login">login</button>
			</li>
		</ul>
	</form>

</body>
</html>