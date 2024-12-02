<?php
$servidor = 'localhost';
$usuario = 'root';
$contraseña = '2908';

try {
    // Conexión al servidor MySQL (sin seleccionar base de datos aún)
    $conexion = new PDO("mysql:host=$servidor", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión al servidor MySQL exitosa.\n";

    // Crear la base de datos
    $nombreBaseDatos = 'mi_base_datos';
    $sqlCrearBD = "CREATE DATABASE IF NOT EXISTS $nombreBaseDatos";
    $conexion->exec($sqlCrearBD);
    echo "Base de datos '$nombreBaseDatos' creada exitosamente.\n";

    // Seleccionar la base de datos recién creada
    $conexion->exec("USE $nombreBaseDatos");

    // Crear una tabla
    $sqlCrearTabla = "
        CREATE TABLE IF NOT EXISTS usuarios (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE
        )";
    $conexion->exec($sqlCrearTabla);
    echo "Tabla 'usuarios' creada exitosamente.\n";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conexion = null;
?>