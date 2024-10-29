<?php
session_start();

if (!isset($_SESSION['backColor'])) {
    $_SESSION['backColor'] = 'white';
}
if (!isset($_SESSION['textColor'])) {
    $_SESSION['textColor'] = 'black';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['backColor'] = $_POST['backColor'];
    $_SESSION['textColor'] = $_POST['textColor'];
}

$backColor = $_SESSION['backColor'];
$textColor = $_SESSION['textColor'];

session_destroy();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración de Colores</title>
    <style>
        body {
            background-color:
                <?php echo htmlspecialchars($backColor); ?>
            ;
            color:
                <?php echo htmlspecialchars($textColor); ?>
            ;
        }
    </style>
</head>

<body>
    <h1>Selecciona los Colores de la Página</h1>
    <form method="POST" action="">
        <label for="backColor">Color de fondo:</label>
        <select name="backColor" id="backColor">
            <option value="white" <?php echo ($backColor == 'white') ? 'selected' : ''; ?>>Blanco</option>
            <option value="red" <?php echo ($backColor == 'red') ? 'selected' : ''; ?>>Rojo</option>
            <option value="green" <?php echo ($backColor == 'green') ? 'selected' : ''; ?>>Verde</option>
            <option value="blue" <?php echo ($backColor == 'blue') ? 'selected' : ''; ?>>Azul</option>
            <option value="cyan" <?php echo ($backColor == 'cyan') ? 'selected' : ''; ?>>Cian</option>
            <option value="yellow" <?php echo ($backColor == 'yellow') ? 'selected' : ''; ?>>Amarillo</option>
        </select>
        <label for="textColor">Color del texto:</label>
        <select name="textColor" id="textColor">
            <option value="black" <?php echo ($textColor == 'black') ? 'selected' : ''; ?>>Negro</option>
            <option value="red" <?php echo ($textColor == 'red') ? 'selected' : ''; ?>>Rojo</option>
            <option value="green" <?php echo ($textColor == 'green') ? 'selected' : ''; ?>>Verde</option>
            <option value="blue" <?php echo ($textColor == 'blue') ? 'selected' : ''; ?>>Azul</option>
            <option value="cyan" <?php echo ($textColor == 'cyan') ? 'selected' : ''; ?>>Cian</option>
            <option value="yellow" <?php echo ($textColor == 'yellow') ? 'selected' : ''; ?>>Amarillo</option>
        </select>
        <button type="submit">Guardar Configuración</button>
    </form>
</body>

</html>