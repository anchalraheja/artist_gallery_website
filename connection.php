<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "root");
define("DB", "art");
$connection = mysqli_connect(HOST,USER,PASS,DB) or die('Cannot Connect To DB');
mysqli_set_charset($connection, 'utf8');
?>