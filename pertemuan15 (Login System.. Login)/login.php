<?php 
	
	require 'functions.php';

	if( isset($_POST["login"]) ){

		if( login($_POST) <= 0 ){
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
				<button type="submit" name="login">login</button>
			</li>
		</ul>
	</form>

</body>
</html>