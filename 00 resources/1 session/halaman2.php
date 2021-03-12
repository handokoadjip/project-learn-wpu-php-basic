<?php 

// nyalakan juga function session agar dapat mengambil variable nya
session_start();

// tampilkan session, namun harus di set terlebih dahulu agar tidak error. di set di halaman 1
// nilai ini berlaku 1 sesi atau ketika browser di close dan laptop di restart maka kembali lagi ke pertama
// atau bisa mematikan nya secara manual dengan function session destroy di halaman3
echo $_SESSION["nama"];

?>