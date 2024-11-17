<?php
session_start();
use GestionUsuarios\Clases\Usuario as Usuario;
use GestionUsuarios\Clases\Admin as Admin;
require 'clases/usuario.php';
require 'clases/admin.php';

// Capturar los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Crear una cookie para recordar el email
setcookie('email', $email, time() + (86400 * 30), "/"); // 86400 = 1 día

// Crear instancias de usuarios para comparar
$usuario = new Usuario('Juan', 'Perez', 'perez@gmail.com', '1234');
$admin = new Admin('Paco', 'Otero', 'paco@gmail.com', '7777');

// Función para autenticar usuario
function autenticar($email, $password, $usuario, $admin)
{
    if ($email == $usuario->getEmail() && $password == $usuario->getPassword()) {
        $_SESSION['usuario'] = $usuario->getNombre();
        $_SESSION['tipo'] = 'usuario';
        return true;
    } elseif ($email == $admin->getEmail() && $password == $admin->getPassword()) {
        $_SESSION['usuario'] = $admin->getNombre();
        $_SESSION['tipo'] = 'admin';
        return true;
    } else {
        return false;
    }
}

// Autenticar usuario
if (autenticar($email, $password, $usuario, $admin)) {
    header("Location: dashboard.php");
    exit();
} else {
    echo "Credenciales incorrectas.";
}
?>