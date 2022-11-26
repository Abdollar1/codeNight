<?php 
$url = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = mysqli_connect($url, $username, $password, $dbname);
if (!$conn) {
	die("Could not connect to database");
}

?>