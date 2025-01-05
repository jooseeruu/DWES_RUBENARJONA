<?php
require '../includes/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_usuario = $_POST['nombre_usuario'];

    try {
        $stmt = $pdo->prepare("UPDATE usuarios SET estado = 0 WHERE nombre_usuario = :nombre_usuario");
        $stmt->execute(['nombre_usuario' => $nombre_usuario]);

        echo "Tu cuenta ha sido deshabilitada. Serás redirigido al inicio en 3 segundos.";
        header('Refresh: 3; URL=../index.php');
    } catch (PDOException $e) {
        echo "Error al deshabilitar la cuenta: " . $e->getMessage();
    }
}
?>