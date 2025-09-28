<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulario workshop2</title>
</head>
<body>
    <h2>Registro de usuario</h2>
    <form action="insert.php" method="post">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br>
        <label>Apellido:</label><br>
        <input type="text" name="apellido" required><br>
        <label>Email:</label><br>
        <input type="email" name="correo" required><br>
        <label>Teléfono:</label><br>
        <input type="text" name="telefono" required><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>