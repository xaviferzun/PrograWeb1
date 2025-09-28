<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'workshop2';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connección fallida: " . $conn->connect_error);
}
?>