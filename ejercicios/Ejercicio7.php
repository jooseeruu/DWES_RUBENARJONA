<!DOCTYPE html>
<html>

<head>
    <title>Factura Eléctrica</title>
</head>

<body>
    <h1>Factura Eléctrica</h1>
    <form method="post" action="">
        <label for="unidades_kw">Introduce las unidades (kW):</label>
        <input type="number" id="unidades_kw" name="unidades_kw" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    function calcularCosto($unidades_kw)
    {
        if ($unidades_kw <= 100) {
            return $unidades_kw * 1.00;
        } elseif ($unidades_kw <= 300) {
            return 100 * 1.00 + ($unidades_kw - 100) * 2.00;
        } elseif ($unidades_kw <= 600) {
            return 100 * 1.00 + 200 * 2.00 + ($unidades_kw - 300) * 3.00;
        } else {
            return 100 * 1.00 + 200 * 2.00 + 300 * 3.00 + ($unidades_kw - 600) * 4.00;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $unidades_kw = $_POST["unidades_kw"];
        $costo_total = calcularCosto($unidades_kw);
        echo "<h3>Resultado: " . $costo_total . " €</h3>";
    }
    ?>
</body>

</html>