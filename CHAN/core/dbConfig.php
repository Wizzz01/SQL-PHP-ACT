<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "chan";
$dsn = "mysql:host={$host};dbname={$dbname}";

$pdo = new PDO($dsn, username: $user, password: $password);
$pdo -> exec("SET time_zone = '+08:00'");
?>