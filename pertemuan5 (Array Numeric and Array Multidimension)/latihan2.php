<?php 

// Menampilkan Array dengan benar

// Melakukan pengulangan pada Array
	// for / foreach
	$numbers = [3,2,15,20,11,77,89];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan2</title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}

		.clear{
			clear: both;
		}
	</style>
</head>
<body>
	
	<?php for($i = 0; $i < count($numbers); $i++) : ?>
		<div class="kotak"><?= $numbers[$i]; ?></div>
	<?php endfor; ?>

	<div class="clear"></div>

	<?php foreach($numbers as $number) : ?>
		<div class="kotak"><?= $number ?></div>
	<?php endforeach; ?>
</body>
</html>