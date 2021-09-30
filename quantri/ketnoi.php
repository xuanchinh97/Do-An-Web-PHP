<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "shopdienthoai";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($conn) {
	$setLang = mysqli_query($conn, "SET NAMES 'utf8'");
} else {
	die("kết nối thất bại!" . mysqli_connect_error());
}
?>