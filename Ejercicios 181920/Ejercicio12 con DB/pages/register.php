<?php


require '../includes/connection.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    // Verificar si el usuario ya existe
    $existingUser = getUsersByName($pdo, $nombre_usuario);
    if ($existingUser) {
        echo "El nombre de usuario ya está registrado.";
    } else {
        // Insertar el usuario
        $estado = true; // Activo por defecto
        $nuevoUsuario = insertUser($pdo, $nombre, $apellidos, $nombre_usuario, $contrasena, $estado);
        if ($nuevoUsuario) {
            echo "Usuario registrado con éxito. ID: $nuevoUsuario";
            header('Location: ../index.php');
            exit;
        } else {
            echo "Error al registrar el usuario.";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
</head>

<body>
    <h2>Registro de Usuario</h2>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>
        <br>
        <label for="nombre_usuario">Nombre de Usuario:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>

</html>