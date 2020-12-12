<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "perpus";
$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
	die("error in connection");
}

//echo "database connected"
?>