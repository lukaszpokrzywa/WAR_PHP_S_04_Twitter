<?php

$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "WAR_PHP_S_04_Twitter";

//Tworzenie nowego połączenia:
$conn = new mysqli($servername, $username, $password, $baseName);

//sprawdzenie poprawności połączenia
if($conn->connect_error) {
	die("Błąd przy połączeniu do bazy danych: $conn->connect_error");
}
$conn->set_charset("utf8");
