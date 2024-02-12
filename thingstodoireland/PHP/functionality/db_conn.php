<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "thingstodoireland";

$conn = mysqli_connect($dbHost,$dbUser,$dbPwd,$dbName);

if($conn->connect_error){
	die("FAILED connecting to database". $conn->connect_error);
}

/* $dbHost = "156.67.74.207";
$dbUser = "u380853468_onteN";
$dbPwd = "Whattodoireland22";
$dbName = "u380853468_Tqxrr";

$conn = mysqli_connect($dbHost,$dbUser,$dbPwd,$dbName);

if($conn->connect_error){
	die("FAILED connecting to database". $conn->connect_error);
} */



?>