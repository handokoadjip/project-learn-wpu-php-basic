<?php 

// menjalakan session
session_start();

// menghapus session secara keren
session_destroy();
session_unset();
$_SESSION = [];

// menghapus cookie 
setcookie('key', '', time() - 3600);
setcookie('user', '', time() - 3600);

// redirect ke login.php
header("Location: login.php");
?>