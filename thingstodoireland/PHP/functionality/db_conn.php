<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "thingstodoireland";

$conn = mysqli_connect($dbHost,$dbUser,$dbPwd,$dbName);

if($conn->connect_error){
	die("FAILED connecting to database". $conn->connect_error);
}




?>
