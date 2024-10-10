<?php
// Definición de variables
$var = "ruquiti";
$var2 = "Hola mundo";
$cadena = "HOLA MUNDO";
$cadena2 = "Hola Mundo";

// Función strlen() - Devuelve la longitud de una cadena
echo "Longitud de \$var: " . strlen($var) . "\n"; // 7

// Imprimir la cadena $var2
echo "Contenido de \$var2: " . $var2 . "\n"; // "Hola mundo"

// Función substr() - Devuelve una parte de una cadena
echo "Subcadena de \$var2 (0, 4): " . substr($var2, 0, 4) . "\n"; // "Hola"
echo "Subcadena de \$var2 (5, 3): " . substr($var2, 5, 3) . "\n"; // "mun"

// Función str_word_count() - Cuenta el número de palabras en una cadena
echo "Número de palabras en \$var: " . str_word_count($var) . "\n"; // 1

// Función strtolower() - Convierte una cadena a minúsculas
echo "Cadena en minúsculas: " . strtolower($cadena) . "\n"; // "hola mundo"

// Función lcfirst() - Convierte el primer carácter de una cadena a minúsculas
echo "Primera letra en minúscula: " . lcfirst($cadena2) . "\n"; // "hola Mundo"

// Función strtoupper() - Convierte una cadena a mayúsculas
echo "Cadena en mayúsculas: " . strtoupper($var2) . "\n"; // "HOLA MUNDO"

// Función ucfirst() - Convierte el primer carácter de una cadena a mayúsculas
echo "Primera letra en mayúscula: " . ucfirst($var2) . "\n"; // "Hola mundo"

// Función ucwords() - Convierte el primer carácter de cada palabra a mayúsculas
echo "Primera letra de cada palabra en mayúscula: " . ucwords($var2) . "\n"; // "Hola Mundo"

// Función strrev() - Invierte una cadena
echo "Cadena invertida: " . strrev($var2) . "\n"; // "odnum aloH"

// Función strpos() - Encuentra la posición de la primera aparición de un substring en una cadena
echo "Posición de 'mundo' en \$var2: " . strpos($var2, 'mundo') . "\n"; // 5


?>