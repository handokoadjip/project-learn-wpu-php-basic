<?php 
	
	// memanggil vendor
	require_once 'vendor/fzaninotto/faker/src/autoload.php';

	// instansiasi faker
	$faker = Faker\Factory::create('id_ID');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Composer Faker</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<?php for ($i = 0; $i < 20; $i++) : ?>
		
	<ul>
		<li><?= $faker->name; ?></li>
		<li><?= $faker->address; ?></li>
		<li><?= $faker->email; ?></li>
	</ul>

	<?php endfor; ?>

</body>
</html>