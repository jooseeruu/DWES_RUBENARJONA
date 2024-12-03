<?php
// Configuración de la conexión
$host = 'localhost';
$dbname = 'formulario';
$username = 'root';
$password = '2908';

try {
    // Conectar a la base de datos
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar y ejecutar la consulta
    $sql = "SELECT * FROM personas";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Obtener todos los resultados como un array asociativo
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Mostrar los resultados
    foreach ($resultados as $fila) {
        echo "ID: " . $fila['id'] . " - Nombre: " . $fila['nombre'] . " - Apellido: " . $fila['apellido'] . "<br>";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>