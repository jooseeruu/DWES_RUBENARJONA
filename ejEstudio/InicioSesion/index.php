<?php
require 'includes/Usuario.php';
require 'includes/sessionHandler.php';

$mensaje = "No hay ningún usuario registrado en la sesión.";
$usuario = obtenerUsuarioDeSesion();

// Verificar si se ha enviado el formulario para iniciar sesión
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['nombre'], $_POST['password'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    $password = htmlspecialchars($_POST['password']);

    // Crear usuario solo si no existe en la sesión
    if (!$usuario) {
        $usuario = new Usuario($nombre, $password);
        iniciarSesion($usuario);
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
    } else if ($usuario->verificarPassword($password)) {
        $mensaje = $usuario->saludar();
    } else {
        $mensaje = "Contraseña incorrecta. Inténtalo de nuevo.";
    }
}

// Manejar cierre de sesión
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['logout'])) {
    cerrarSesion();
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

// Mensaje de saludo si el usuario ya está en sesión
if ($usuario) {
    $mensaje = $usuario->saludar();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Objetos y Sesión</title>
</head>

<body>
    <h1>Formulario con Objetos, Sesión y Contraseñas</h1>

    <!-- Mostrar el mensaje -->
    <p><?php echo $mensaje; ?></p>

    <?php if (!$usuario): ?>
        <!-- Formulario de inicio de sesión -->
        <form method="post" action="">
            <label for="nombre">Introduce tu nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="password">Introduce tu contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
    <?php else: ?>
        <!-- Botón para cerrar sesión -->
        <form method="post" action="">
            <button type="submit" name="logout">Cerrar Sesión</button>
        </form>
    <?php endif; ?>
</body>

</html>
<?php
//Guardar el nombre de usuario en una cookie si el usuario ha iniciado sesión
if ($usuario) {
    setcookie("nombre_usuario", $usuario->getNombre(), time() + (86400 * 30), "/"); // 86400 = 1 día
} else {
    // Eliminar la cookie si el usuario cierra sesión
    if (isset($_COOKIE["nombre_usuario"])) {
        setcookie("nombre_usuario", "", time() - 3600, "/");
    }
}