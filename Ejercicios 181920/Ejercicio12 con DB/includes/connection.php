<?php
// Función para conectar a la base de datos
function conectarBBDD($tipoDB, $host, $nombreDB, $usuario, $contrasena, $charset) {
    try {
        $dsn = "$tipoDB:host=$host;dbname=$nombreDB;charset=$charset";
        $pdo = new PDO($dsn, $usuario, $contrasena);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
        return null;
    }
}

// Función para obtener usuarios
function getUsersByName($pdo, $nombreUsuario) {
    try {
        $sql = "SELECT * FROM `usuarios` WHERE nombre_usuario = :nombre_usuario";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nombre_usuario', $nombreUsuario, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error al consultar usuarios: " . $e->getMessage();
        return null;
    }
}

// Función para insertar un usuario
function insertUser($pdo, $nombre, $apellidos, $nombre_usuario, $contrasena, $estado) {
    try {
        $passwordHash = password_hash($contrasena, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nombre, apellidos, nombre_usuario, contrasena, estado) 
                VALUES (:nombre, :apellidos, :nombre_usuario, :contrasena, :estado)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
        $stmt->bindParam(':nombre_usuario', $nombre_usuario, PDO::PARAM_STR);
        $stmt->bindParam(':contrasena', $passwordHash, PDO::PARAM_STR);
        $stmt->bindParam(':estado', $estado, PDO::PARAM_BOOL);
        $stmt->execute();
        return $pdo->lastInsertId();
    } catch (PDOException $e) {
        echo "Error al insertar usuario: " . $e->getMessage();
        return false;
    }
}

// Conectar a la base de datos
$pdo = conectarBBDD('mysql', 'localhost', 'dwes', 'root', '2908', 'utf8mb4');
?>
