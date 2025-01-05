<?php
session_start();
require '../includes/connection.php';

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}

$nombre_usuario = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Intranet</title>
</head>

<body>
    <h2>Bienvenido, <?php echo htmlspecialchars($nombre_usuario); ?>!</h2>
    <a href="logout.php">Cerrar Sesión</a>
    <br><br>

    <form method="post" action="disable.php"
        onsubmit="return confirm('¿Estás seguro de que deseas deshabilitar tu cuenta? Esta acción no se puede deshacer.')">
        <!-- Enviamos el nombre del usuario como campo oculto -->
        <input type="hidden" name="nombre_usuario" value="<?php echo htmlspecialchars($nombre_usuario); ?>">
        <button type="submit">Deshabilitar mi cuenta</button>
    </form>
</body>

</html>