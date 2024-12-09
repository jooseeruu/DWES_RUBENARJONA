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

// Función para obtener usuarios de la tabla usuarios
function getUsersByName($pdo, $nombreUsuario) {
    try {
        $sql = "SELECT * FROM `usuarios` WHERE nombre_usuario = :nombre_usuario"; // Consulta SQL
        $stmt = $pdo->prepare($sql); // Preparar la consulta
        $stmt->bindParam(':nombre_usuario', $nombreUsuario, PDO::PARAM_STR);
        $stmt->execute(); // Ejecutar la consulta
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
    // nombre del usuario que deseas buscar
    $nombreUsuario = 'Mago';
    $usuarios = getUsersByName($pdo, $nombreUsuario);

    if ($usuarios) {
        // Mostrar los usuarios en una tabla
        echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; width: 100%;'>";
        echo "<thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Nombre de Usuario</th>
                    <th>Contraseña</th>
                    <th>Estado</th>
                </tr>
              </thead>";
        echo "<tbody>";

        foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($usuario['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($usuario['apellidos']) . "</td>";
            echo "<td>" . htmlspecialchars($usuario['nombre_usuario']) . "</td>";
            echo "<td>" . htmlspecialchars($usuario['contrasena']) . "</td>";
            echo "<td>" . ($usuario['estado'] ? 'Activo' : 'Inactivo') . "</td>";
            echo "</tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "No se encontraron usuarios con ese nombre.";
    }
}

// Función para insertar un usuario en la tabla usuarios.
// Sé que no se pide explicitamentente un insert, pero da igual porque luego lo necesitaré usar en el register.php
function insertUser($pdo, $nombre, $apellidos, $nombre_usuario, $contrasena, $estado) {
    try {
        $passwordHash = password_hash($contrasena, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nombre, apellidos, nombre_usuario, contrasena, estado) 
                VALUES (:nombre, :apellidos, :nombre_usuario, :contrasena, :estado)";
        $stmt = $pdo->prepare($sql);

        // Asignar valores a los parámetros
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
        $stmt->bindParam(':nombre_usuario', $nombre_usuario, PDO::PARAM_STR);
        $stmt->bindParam(':contrasena', $passwordHash, PDO::PARAM_STR);
        $stmt->bindParam(':estado', $estado, PDO::PARAM_BOOL);

        // Ejecutar la consulta
        $stmt->execute();

        // Devolvemos el ID del nuevo usuario insertado
        return $pdo->lastInsertId();
    } catch (PDOException $e) {
        echo "Error al insertar usuario: " . $e->getMessage();
        return false;
    }
}

// Si necesitas insertar usuarios, descomenta el siguiente código:
// try {
//     $nuevoUsuario = insertUser($pdo, 'Manolo', 'Gorrion', 'Mago', '4321', true);
//     if ($nuevoUsuario) {
//         echo "Nuevo usuario insertado con ID: $nuevoUsuario";
//     } else {
//         echo "No se pudo insertar el usuario.";
//     }
// } catch (PDOException $e) {
//     if ($e->getCode() === 23000) { // código SQLSTATE para error de clave duplicada
//         echo "Error: El nombre de usuario ya está registrado.";
//     } else {
//         echo "Error al insertar usuario: " . $e->getMessage();
//     }
// }

