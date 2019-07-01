<?php

$dbhost = "localhost";
$dbuname = "root";
$dbpass = "";
$dbname = "hacker";

$conn = mysqli_connect($dbhost,$dbuname,$dbpass,$dbname);
if(!$conn){
	die(mysqli_error());
}

?>
