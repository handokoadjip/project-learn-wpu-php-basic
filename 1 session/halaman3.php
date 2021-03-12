<?php 

session_start();

// mematikan session agar benar benar dipastikan mati
session_destroy();
session_unset();
$_SESSION = [];

?>