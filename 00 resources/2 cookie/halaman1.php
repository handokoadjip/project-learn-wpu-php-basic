<?php 

// membuat cookie
// parameter 3 (key, value, expired);
// kalau tidak menggunapkan expired maka berlaku 1 sesi
setcookie('nama', 'Handoko', time()+60);

?>