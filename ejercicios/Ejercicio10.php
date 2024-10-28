<?php
session_start();

if (!isset($_SESSION['acumulador'])) {
    $_SESSION['acumulador'] = 0;
    $_SESSION['contador'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valor = intval($_POST['valor']);
    $_SESSION['acumulador'] += $valor;
    $_SESSION['contador']++;
}


if ($_SESSION['contador'] > 0) {
    $media = $_SESSION['acumulador'] / $_SESSION['contador'];
} else {
    $media = 0;
}



if ($_SESSION['acumulador'] > 10000) {
    // Guardar los resultados finales
    $total_acumulado = $_SESSION['acumulador'];
    $total_numeros = $_SESSION['contador'];
    $total_media = $media;

    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acumulador de Valores</title>
</head>

<body>
    <h1>Acumulador de Valores</h1>
    <?php if (!isset($total_acumulado)) { ?>
        <p>Valor actual del acumulador: <?php echo $_SESSION['acumulador']; ?></p>
        <p>Números introducidos: <?php echo $_SESSION['contador']; ?></p>
        <p>Media: <?php echo $media; ?></p>
        <form method="post">
            <label for="valor">Introduce un valor:</label>
            <input type="number" id="valor" name="valor" required>
            <button type="submit">Agregar</button>
        </form>
    <?php } else { ?>
        <p>Has alcanzado o superado el límite de 10.000</p>
        <p>Total acumulado: <?php echo $total_acumulado; ?></p>
        <p>Números introducidos: <?php echo $total_numeros; ?></p>
        <p>Media: <?php echo $total_media; ?></p>
    <?php } ?>
</body>

</html>