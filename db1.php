<?php

$dbhost = "localhost";
$dbuname = "root";
$dbpass = "";
$dbname = "injectable";

$connp = mysqli_connect($dbhost,$dbuname,$dbpass,$dbname);
if(!$connp){
	die(mysqli_error());
}

?>
