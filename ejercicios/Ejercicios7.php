<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $unidades_kw = $_POST["unidades_kw"];
    $costo_total = calcularCosto($unidades_kw);
}

function calcularCosto($unidades_kw)
{
    $costo_total = 0;

    if ($unidades_kw <= 100) {
        $costo_total = $unidades_kw * 1.00;
    } elseif ($unidades_kw <= 300) {
        $costo_total = (100 * 1.00) + (($unidades_kw - 100) * 2.00);
    } elseif ($unidades_kw <= 600) {
        $costo_total = (100 * 1.00) + (200 * 2.00) + (($unidades_kw - 300) * 3.00);
    } else {
        $costo_total = (100 * 1.00) + (200 * 2.00) + (300 * 3.00) + (($unidades_kw - 600) * 4.00);
    }

    return $costo_total;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Calculadora de Factura Eléctrica</title>
</head>

<body>
    <h1>Calculadora de Factura Eléctrica</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="unidades_kw">Introduce las unidades (kW):</label>
        <input type="number" id="unidades_kw" name="unidades_kw" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Resultado: " . $costo_total . " €</h3>";
    }
    ?>
</body>

</html>