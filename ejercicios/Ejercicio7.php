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
        $costo = 0;

        if ($unidades_kw > 300) {
            $costo += ($unidades_kw - 300) * 4.00;
            $unidades_kw = 300;
        }
        if ($unidades_kw > 200) {
            $costo += ($unidades_kw - 200) * 3.00;
            $unidades_kw = 200;
        }
        if ($unidades_kw > 100) {
            $costo += ($unidades_kw - 100) * 2.00;
            $unidades_kw = 100;
        }
        $costo += $unidades_kw * 1.00;

        return $costo;
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $unidades_kw = $_POST["unidades_kw"];
        $costo_total = calcularCosto($unidades_kw);
        echo "<h3>Resultado: " . $costo_total . " €</h3>";
    }
    ?>
</body>

</html>