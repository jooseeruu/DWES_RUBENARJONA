<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

use GestionUsuarios\Clases\Admin as Admin;
use GestionUsuarios\Clases\Usuario as Usuario;
require 'clases/usuario.php';
require 'clases/admin.php';

$usuario = $_SESSION['usuario'];
$tipo = $_SESSION['tipo'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $tipo == 'admin') {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $admin = new Admin('Paco', 'Otero', 'paco@gmail.com', '7777'); // Instancia del admin actual

    if (isset($_POST['crear_usuario'])) {
        $nuevoUsuario = $admin->crearUsuario($nombre, $apellidos, $email, $password);
        echo "Usuario creado: " . $nuevoUsuario->mostrarInfo();
    } elseif (isset($_POST['crear_admin'])) {
        $nuevoAdmin = $admin->crearAdmin($nombre, $apellidos, $email, $password);
        echo "Admin creado: " . $nuevoAdmin->mostrarInfo();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Bienvenido, <?php echo $usuario; ?></h1>
    <?php if ($tipo == 'usuario'): ?>
        <p>Autenticación exitosa.</p>
    <?php elseif ($tipo == 'admin'): ?>
        <p>Autenticación exitosa. Aquí puedes crear y eliminar usuarios y admins.</p>
        <form action="dashboard.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" name="crear_usuario" value="Crear usuario">
            <input type="submit" name="crear_admin" value="Crear admin">
        </form>
    <?php endif; ?>
</body>

</html>