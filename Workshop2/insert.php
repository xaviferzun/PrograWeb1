<?php
include 'db.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO usuarios (nombre, apellido, correo, telefono) VALUES ('$nombre', '$apellido', '$correo', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Registro de usuario exitoso.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>