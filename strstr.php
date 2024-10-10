<?php
$cadena = "¡Hola, mundo!";
$subcadena = "mundo";

$resultado = strstr($cadena, $subcadena);

if ($resultado) {
    echo "Subcadena encontrada: " . $resultado;
} else {
    echo "Subcadena no encontrada.";
}
?>