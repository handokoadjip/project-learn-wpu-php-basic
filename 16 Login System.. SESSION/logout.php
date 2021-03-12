<?php 

// menjalakan session
session_start();

// menghapus session secara keren
session_destroy();
session_unset();
$_SESSION = [];

// redirect ke login.php
header("Location: login.php");
?>