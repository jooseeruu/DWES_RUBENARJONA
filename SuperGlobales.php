<?php
// $GLOBALS
$GLOBALS['variableGlobal'] = 'Estoy en cualquier parte';
function mostrarGlobal()
{
    echo $GLOBALS['variableGlobal']; // Accede a una variable global desde cualquier función
}
mostrarGlobal();

// $_SERVER
echo "El nombre del servidor es: " . $_SERVER['SERVER_NAME'] . "\n"; // Muestra el nombre del servidor

// $_GET
if (isset($_GET['nombre'])) {
    echo "Hola, " . htmlspecialchars($_GET['nombre']) . "!"; // Muestra una variable obtenida a través de la URL (query string)
}

// $_POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Has enviado: " . htmlspecialchars($_POST['dato']) . "\n"; // Muestra datos enviados a través de un formulario POST
}

// $_FILES
if (isset($_FILES['archivo'])) {
    $nombreArchivo = $_FILES['archivo']['name'];
    $tipoArchivo = $_FILES['archivo']['type'];
    echo "Has subido el archivo: $nombreArchivo, tipo: $tipoArchivo\n"; // Muestra información sobre un archivo subido
}

// $_COOKIE
if (isset($_COOKIE['usuario'])) {
    echo "Hola de nuevo, " . htmlspecialchars($_COOKIE['usuario']) . "!"; // Muestra el valor de una cookie
}

// $_SESSION
session_start();
$_SESSION['iniciado'] = true;
if ($_SESSION['iniciado']) {
    echo "Sesión iniciada\n"; // Verifica si una sesión ha sido iniciada
}

// $_REQUEST
if (isset($_REQUEST['parametro'])) {
    echo "Has pasado el parámetro: " . htmlspecialchars($_REQUEST['parametro']) . "\n"; // Muestra cualquier variable pasada a través de GET o POST
}

// $_ENV
echo "El entorno es: " . $_ENV['PATH'] . "\n"; // Muestra una variable de entorno
?>