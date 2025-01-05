<?php

session_start();
if (isset($_SESSION['username'])) {
    // Si ya hay una sesión activa, redirige al usuario a la intranet
    header('Location: pages/intranet.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if (isset($_SESSION['message'])): ?>
        <p style="color:red;"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
    <?php endif; ?>
    <form method="post" action="pages/login.php">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <p>¿No tienes cuenta? <a href="pages/register.php">Regístrate aquí</a></p>
</body>
</html>
