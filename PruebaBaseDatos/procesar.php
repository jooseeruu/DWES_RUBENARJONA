<?php
require_once 'config/Database.php';
require_once 'models/Usuario.php';

$database = new Database();
$db = $database->getConnection();
$usuario = new Usuario($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];
    $id = $_POST['id'] ?? null;
    $nombre = $_POST['nombre'] ?? null;
    $email = $_POST['email'] ?? null;

    switch ($accion) {
        case 'crear':
            if ($id) { // Si existe ID, actualizamos
                $usuario->id = $id;
                $usuario->nombre = $nombre;
                $usuario->email = $email;
                $usuario->actualizar();
            } else { // Si no, creamos un nuevo registro
                $usuario->nombre = $nombre;
                $usuario->email = $email;
                $usuario->crear();
            }
            break;

        case 'eliminar':
            $usuario->id = $id;
            $usuario->eliminar();
            break;
    }
}

// Redirigir a la página principal
header('Location: index.php');
exit;
?>