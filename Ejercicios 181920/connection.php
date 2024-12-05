<?php

// Función para conectar a la base de datos
function conectarBBDD($tipoDB, $host, $nombreDB, $usuario, $contrasena, $charset) {
    try {
        // Construcción del DSN
        $dsn = "$tipoDB:host=$host;dbname=$nombreDB;charset=$charset";

        // Crear instancia PDO
        $pdo = new PDO($dsn, $usuario, $contrasena);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch (PDOException $e) {
        // Mostrar error si la conexión falla
        echo "Error de conexión: " . $e->getMessage();
        return null;
    }
}

// Función para obtener usuarios de la tabla `usuarios`
function getUsersByName($pdo) {
    try {
        $sql = "SELECT * FROM `usuarios`"; // Consulta SQL
        $stmt = $pdo->prepare($sql);      // Preparar la consulta
        $stmt->execute();                 // Ejecutar la consulta
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Obtener los resultados
    } catch (PDOException $e) {
        // Mostrar error si la consulta falla
        echo "Error al consultar usuarios: " . $e->getMessage();
        return null;
    }
}

// Conectar a la base de datos
$pdo = conectarBBDD('mysql', 'localhost', 'dwes', 'root', '2908', 'utf8mb4');

if ($pdo) {
    $usuarios = getUsersByName($pdo);
    echo $usuarios;
}

?>

