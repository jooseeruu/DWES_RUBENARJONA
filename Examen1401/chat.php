<?php

session_start();
require_once 'connector.php'; // CONEXION


$mensajeEnviado = false; // Variable para mostrar mensaje de éxito

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['mensaje'])) { // Si se envió el formulario y el mensaje no está vacío
    $mensaje = $_POST['mensaje']; // Se obtiene el mensaje
    $usuario = $_SESSION['user']; // Se obtiene el usuario

    try {
        $pdo->beginTransaction(); //  TRANSACCION PARA INSERTAR EL MENSAJE (1pt)
        $stmt = $pdo->prepare("INSERT INTO mensajes (usuario, mensaje) VALUES (:usuario, :mensaje)"); // Se prepara la consulta
        $stmt->execute([':usuario' => $usuario, ':mensaje' => $mensaje]); // Se ejecuta la consulta
        $pdo->commit(); // Hay que hacer commit para que se guarden los cambios
        $mensajeEnviado = true; // Se cambia la variable para mostrar mensaje de éxito
    } catch (PDOException $e) {
        die("ERROR" . $e->getMessage()); // die sirve para mostrar un mensaje y terminar la ejecución del script  https://www.w3schools.com/php/func_misc_die.asp
    }
}

try { // AQUI SE REALIZA EL READ DE LOS MENSAJES Y LOS MUESTRA
    $stmt = $pdo->prepare("SELECT * FROM mensajes ORDER BY fecha DESC"); // Se prepara la consulta (1pt)
    $stmt->execute(); // Ejecutamos para obtener los mensajes
    $mensajes = $stmt->fetchAll(PDO::FETCH_ASSOC); // Vuelvo a usar el chatgpt para saber si me conviene más usar fetch o fetchAll
} catch (PDOException $e) {
    die("ERROR" . $e->getMessage()); // Si hay error, se muestra el mensaje
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>

<body>
    <h1>Bienvenido, <?= htmlspecialchars($_SESSION['user']) ?></h1>

    <?php if ($mensajeEnviado): ?>
        <p>Mensaje enviado con éxito.</p>
    <?php endif; ?>

    <h2>Mensajes</h2>
    <ul>
        <?php foreach ($mensajes as $mensaje): ?>
            <li>
                <strong><?= htmlspecialchars($mensaje['usuario']) ?>:</strong>
                <?= htmlspecialchars($mensaje['mensaje']) ?>
                <em>(<?= $mensaje['fecha'] ?>)</em>
            </li>
        <?php endforeach; ?>
    </ul>

    <form method="post" action="">
        <textarea name="mensaje" required placeholder="Mimsg"></textarea>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>