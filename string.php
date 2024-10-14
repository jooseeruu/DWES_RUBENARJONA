<?php
// Declarar una cadena de texto
$saludo = "Hola, mundo";

// Concatenar cadenas
$nombre = "Juan";
$mensaje = $saludo . " " . $nombre; // Imprime: Hola, mundo Juan

// Longitud de una cadena
$longitud = strlen($saludo); // Imprime: 10

// Convertir a minúsculas y mayúsculas
$minusculas = strtolower($saludo); // Imprime: hola, mundo
$mayusculas = strtoupper($saludo); // Imprime: HOLA, MUNDO

// Extraer una subcadena
$subcadena = substr($saludo, 0, 4); // Imprime: Hola

// Reemplazar texto en una cadena
$texto = "La vida es bella";
$texto_modificado = str_replace("bella", "increíble", $texto); // Imprime: La vida es increíble

// Buscar una cadena dentro de otra
$posicion = strpos($saludo, "mundo"); // Imprime: 6

// Dividir una cadena en un array
$frase = "Manzana, Pera, Plátano";
$frutas = explode(", ", $frase); // Crea el array ["Manzana", "Pera", "Plátano"]

// Unir elementos de un array en una cadena
$cadena_unida = implode(", ", $frutas); // Imprime: Manzana, Pera, Plátano

// Quitar espacios en blanco
$cadena_con_espacios = "  Hola, mundo  ";
$cadena_sin_espacios = trim($cadena_con_espacios); // Imprime: Hola, mundo

// Formatear cadenas
$precio = 99.99;
$producto = "café";
$frase_formateada = sprintf("El precio de un %s es %.2f euros", $producto, $precio); // Imprime: El precio de un café es 99.99 euros

// Comparar cadenas
if (strcmp($saludo, "Hola, mundo") == 0) {
    echo "Las cadenas son iguales.";
} else {
    echo "Las cadenas son diferentes.";
}

// Repetir cadenas
$repetida = str_repeat("Hola ", 3); // Imprime: Hola Hola Hola

// Revertir una cadena
$reversa = strrev($saludo); // Imprime: odnum ,aloH

// Obtener parte de una cadena
$cadena = "Hola, mundo!";
$parte = substr($cadena, 5, 5); // Imprime: mundo

// Convertir a array de caracteres
$caracteres = str_split($cadena); // Crea el array ['H', 'o', 'l', 'a', ',', ' ', 'm', 'u', 'n', 'd', 'o', '!']

// Quitar caracteres específicos
$limpio = trim($cadena, "H!"); // Imprime: ola, mundo

?>