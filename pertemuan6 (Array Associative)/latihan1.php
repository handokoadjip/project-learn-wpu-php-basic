<?php 

$numberss = [
	[1,2,3],
	[4,5,6],
	[7,8,9]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan1</title>
	<style>
		.kotak{
			width: 30px;
			height: 30px;
			background-color: red;
			text-align: center;
			margin: 3px;
			line-height: 30px;
			float: left;
		}

		.clear{
			clear: both;
		}
	</style>
</head>
<body>
	<?php foreach ($numberss as $numbers): ?>
		<?php foreach ($numbers as $number): ?>
			<div class="kotak"><?= $number ?></div>			
		<?php endforeach ?>
		<div class="clear"></div>
	<?php endforeach ?>
</body>
</html>