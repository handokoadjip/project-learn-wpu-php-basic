<?php 

$students1 = ["Handoko Adji Pangestu", "11217052", "Teknik Informatika", "Handokoadjipangestu@gmail.com"];

$students2 = [
	[
		"Handoko Adji Pangestu",
		"11217052",
		"Teknik Informatika",
		"Handokoadjipangestu@gmail.com"
	],
	[
		"Chirstoper Glenn",
		"11217021",
		"Teknik Informatika",
		"meow@gmail.com"
	]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>latihan3</title>
</head>
<body>
	
	<h1>Daftar Mahasiswa</h1>
	
	<ul>
		<!-- Menggunakan Echo -->
		<li><?= $students1[0] ?></li>
		<li><?= $students1[1] ?></li>
		<li><?= $students1[2] ?></li>
		<li><?= $students1[3] ?></li>
	</ul>

	<ul>
		<!-- Menggunakan Foreach -->
		<?php foreach ($students1 as $student1): ?>
			<li><?= $student1 ?></li>
		<?php endforeach ?>
	</ul>

	<h1>Daftar Mahasiswa Gaib</h1>
		<!-- Menggunakan foreach dan echo -->
		<?php foreach ($students2 as $student3): ?>
			<ul>
				<li><?= $student3[0] ?></li>
				<li><?= $student3[1] ?></li>
				<li><?= $student3[2] ?></li>
				<li><?= $student3[3] ?></li>
			</ul>
		<?php endforeach ?>
		
		<!-- Menggunakan foreach dalam foreach -->
		<?php foreach ($students2 as $student4): ?>
		<ul>
			<?php foreach ($student4 as $student5): ?>
				<li><?= $student5 ?></li>
			<?php endforeach ?>
		</ul>		
		<?php endforeach ?>

</body>
</html>