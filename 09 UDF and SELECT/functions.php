<?php 

$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

function query($query){
	
	// Mengambil variable conn dari atas
	global $conn;

	// Membuat QUERY
	$result = mysqli_query($conn, $query);

	// Membuat tampungan untuk megisi record
	$rows = [];

	// Mengambil query
	while ( $row = mysqli_fetch_assoc($result)) {
	    $rows[] = $row;
	}

	return $rows;
}

?>