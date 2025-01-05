<?php
session_start();
require '../includes/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre_usuario = :nombre_usuario");
    $stmt->execute(['nombre_usuario' => $nombre_usuario]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
        if ($usuario['estado']) {
            $_SESSION['username'] = $usuario['nombre_usuario'];
            header('Location: intranet.php');
            exit;
        } else {
            $_SESSION['message'] = 'Usuario deshabilitado. Contacte al administrador.';
            header('Location: ../index.php');
            exit;
        }
    } else {
        $_SESSION['message'] = 'Credenciales inválidas.';
        header('Location: ../index.php');
        exit;
    }
}


