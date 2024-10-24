<!DOCTYPE html>
<html>

<head>
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <input type="submit" name="operacion" value="Suma">
        <input type="submit" name="operacion" value="Resta">
        <input type="submit" name="operacion" value="Multiplicación">
        <input type="submit" name="operacion" value="División">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        $resultado = "";

        switch ($operacion) {
            case "Suma":
                $resultado = $num1 + $num2;
                break;
            case "Resta":
                $resultado = $num1 - $num2;
                break;
            case "Multiplicación":
                $resultado = $num1 * $num2;
                break;
            case "División":
                if ($num2 == 0) {
                    $resultado = "No se puede dividir por cero!";
                } else {
                    $resultado = $num1 / $num2;
                }
                break;
        }

        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>

</html>