<?php

$sname= "localhost";
$unmae= "root";
$password = "12345678";

$db_name = "mydb";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Bağlantı hatası!";
}