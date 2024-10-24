<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario con Cookies y Sesiones</title>
</head>

<body>

    <?php
    session_start();

    // Procesar el formulario cuando se envía
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Configurar cookies
        setcookie("nombre", $_POST["nombre"], time() + (86400 * 30), "/");
        setcookie("email", $_POST["email"], time() + (86400 * 30), "/");

        // Configurar variables de sesión
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["email"] = $_POST["email"];

        echo "<p>Datos guardados en cookies y sesiones</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <h2>Datos guardados</h2>
    <?php
    // Mostrar datos de las cookies
    if (isset($_COOKIE["nombre"]) && isset($_COOKIE["email"])) {
        echo "<p>Cookie Nombre: " . $_COOKIE["nombre"] . "</p>";
        echo "<p>Cookie Email: " . $_COOKIE["email"] . "</p>";
    } else {
        echo "<p>No hay cookies configuradas</p>";
    }

    // Mostrar datos de la sesión
    if (isset($_SESSION["nombre"]) && isset($_SESSION["email"])) {
        echo "<p>Sesión Nombre: " . $_SESSION["nombre"] . "</p>";
        echo "<p>Sesión Email: " . $_SESSION["email"] . "</p>";
    } else {
        echo "<p>No hay sesión iniciada</p>";
    }
    ?>

</body>

</html>