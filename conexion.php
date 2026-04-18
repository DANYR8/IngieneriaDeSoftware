<?php
$host = "localhost";
$port = "5432";
$dbname = "sistema_registro";
$user = "ghost";
$password = "09876";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Error de conexión");
}
?>