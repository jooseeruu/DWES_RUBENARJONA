<?php
session_start(); // Inicia la sesión
require 'calculadora.php'; // Se requiere el archivo calculadora.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Si se envia el formulario utilizando el método POST
    if ($_POST['num1'] == null) {
        session_start(); // Inicia la sesión
        session_unset(); // Elimina todas las variables de sesión
        session_destroy(); // Destruye la sesión
        header('Location: index.php'); // Reinicia la página
        exit();
    }
    $num1 = $_POST['num1']; // Obtenemos el valor del num1
    if ($_POST['num2'] == null) { // Si el valor de num2 es nulo, se le asigna el valor 0 y se realiza la operación
        $_POST['num2'] = 0; // tecnicamente eso ya lo maneja el required en el input del formulario pero como no he conseguido lo de emplear el calculo anterior como número he decidido hacerlo así

    }
    $num2 = $_POST['num2']; // obtenemos el valor del num2
    $operacion = $_POST['operacion']; // obtenemos la operación a realizar
    $calculadora = new Calculadora(); // Creamos la instancia de la clase calculadora para poder utilizar sus métodos
    $resultado = ""; // Inicio la variable resultado vacía para poder almacenar el resultado de la operación a realizar

    switch ($operacion) { // Mediante un switch recojo la operacion a realizar y llamo al método correspondiente 
        // según el valor de la variable operación
        case 'sumar':
            $resultado = $calculadora->sumar($num1, $num2); // Todas las operaciones reciben los dos numeros como parametros
            break;
        case 'restar':
            $resultado = $calculadora->restar($num1, $num2);
            break;
        case 'multiplicar':
            $resultado = $calculadora->multiplicar($num1, $num2);
            break;
        case 'dividir':
            $resultado = $calculadora->dividir($num1, $num2); // No hay gestión de errores en el caso de división por 0
            break;
        case 'elevar':
            $resultado = $calculadora->elevar($num1, $num2);
            break;
    }

    $_SESSION['resultado'] = $resultado; // Guardo el resultado en la variable de sesión resultado
    header('Location: index.php');// Redirige a index.php para mostrar el resultado de la operación realizada
    // Si no se redirige a index.php, el resultado no se mostrará porque nos quedariamos en controlador.php
    // Creo que no es necesario el exit() ya que el header() redirige y con eso se finaliza la ejecución del script
}

?>