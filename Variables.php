<?php
// Este archivo demuestra el uso de diferentes tipos de variables en PHP

// Variables de cadena (strings)
$nombre = "Juan Pérez";
$saludo = 'Hola, mundo!';

// Variables numéricas (enteros y flotantes)
$edad = 30;
$altura = 1.75;

// Variables booleanas
$esEstudiante = true;
$tieneHambre = false;

// Variables de array
$frutas = ["manzana", "banana", "pera"];
$calificaciones = array(8, 9, 7);

// Imprimimos los valores de las variables
echo "Mi nombre es: " . $nombre . "<br>";
echo "Un saludo: " . $saludo . "<br>";
echo "Tengo " . $edad . " años y mido " . $altura . " metros.<br>";

// Condicional utilizando una variable booleana
if ($esEstudiante) {
    echo "Soy estudiante.<br>";
}

// Recorriendo un array
foreach ($frutas as $fruta) {
    echo $fruta . ", ";
}

// Calculando la suma de los elementos de un array
$suma = 0;
foreach ($calificaciones as $calificacion) {
    $suma += $calificacion;
}
echo "<br>El promedio de calificaciones es: " . ($suma / count($calificaciones));
?>