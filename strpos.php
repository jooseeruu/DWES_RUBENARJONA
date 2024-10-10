<?php
$cadena = "¡Hola, mundo!";
$subcadena = "mundo";

$posicion = strpos($cadena, $subcadena);

if ($posicion !== false) {
    echo "Subcadena encontrada en la posición: " . $posicion;
} else {
    echo "Subcadena no encontrada.";
}
?>