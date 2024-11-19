<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <!-- Se crea un formulario con dos inputs de tipo number para introducir los números a operar y
        un select para seleccionar la operación a realizar. Utilizamos el metodo POST y un boton submit para enviar los datos al controlador  -->
    <form action="Controlador.php" method="POST">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
            <option value="elevar">Elevar</option>
        </select>
        <button type="submit">Calcular</button>
    </form>

    <?php
    session_start();
    if (isset($_SESSION['resultado'])) { // si la variable de sesión resultado está definida, se muestra el resultado de la operación
        echo "<p>Resultado: " . $_SESSION['resultado'] . "</p>"; // muestra el resultado de la operación
        unset($_SESSION['resultado']); // elimina la variable de sesión resultado
    }
    ?>
</body>

</html>