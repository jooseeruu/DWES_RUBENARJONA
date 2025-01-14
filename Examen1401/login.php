<?php
// He rescatado codigo de otras actividades de mi git
//MI CODIGO SOLO REALIZA READ QUE ES LO QUE HE ENTENDIDO DE LA ACTIVIDAD
session_start();
require_once 'connector.php'; // Archivo con la conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Si se envió el formulario
    $username = $_POST['username'] ?? ''; // Si no se envió el campo, se asigna un string vacío
    $password = $_POST['password'] ?? ''; // Si no se envió el campo, se asigna un string vacío

    try {
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = :username"); // Se prepara la consulta
        $stmt->execute([':username' => $username]); // Se ejecuta la consulta que busca al usuario
        $user = $stmt->fetch(PDO::FETCH_ASSOC); // he consultado al chatgpt para saber si me conviene más usar fetch o fetchAll

        if ($user && password_verify($password, $user['password'])) { // Si el usuario existe y la contraseña es correcta
            $_SESSION['user'] = $user['username'];
            header('Location: chat.php'); //Lo mandamos al chat
            exit();
        } else {
            $error = "Usuario o contraseña incorrectos.";
        }
    } catch (PDOException $e) {
        die("ERROR" . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Iniciar Sesión</h1>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>

</html>