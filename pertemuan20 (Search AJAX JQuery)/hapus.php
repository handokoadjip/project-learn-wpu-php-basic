<?php 
// set session
session_start();

// cek apakah session ada atau tidak atau melalui login tidak
// walaupun hanya bisa di akses di index tapi untuk jaga2 ketika ada orang yang ingin menghapus lewat url atau get
if( !isset($_SESSION["login"]) ){
	header("Location: login.php");
	exit;
}

	require "functions.php";

	$id = $_GET["id"];
	if( hapus($id) > 0 ){
		echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'index.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal dihapus');
				document.location.href = 'index.php'
			</script>
		";
	}
?>