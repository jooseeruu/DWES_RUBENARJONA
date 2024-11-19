<?php
// Funciones de manipulación de cadenas
// strlen(): Devuelve la longitud de una cadena.
$length = strlen("Hola Mundo!"); // 11

// strpos(): Encuentra la posición de la primera aparición de una subcadena en una cadena.
$pos = strpos("Hola Mundo!", "Mundo"); // 5

// str_replace(): Reemplaza todas las apariciones de una cadena de búsqueda con otra.
$nuevaCadena = str_replace("Mundo", "PHP", "Hola Mundo!"); // "Hola PHP!"

// substr(): Devuelve una parte de una cadena especificada por el offset y la longitud.
$subcadena = substr("Hola Mundo!", 5, 5); // "Mundo"

// strtolower(): Convierte una cadena a minúsculas.
$minusculas = strtolower("Hola Mundo!"); // "hola mundo!"

// strtoupper(): Convierte una cadena a mayúsculas.
$mayusculas = strtoupper("Hola Mundo!"); // "HOLA MUNDO!"

// explode(): Divide una cadena en un array utilizando un delimitador.
$array = explode(" ", "Hola Mundo!"); // ["Hola", "Mundo!"]

// Funciones de manejo de arrays
// count(): Cuenta todos los elementos en un array.
$count = count([1, 2, 3, 4]); // 4

// in_array(): Comprueba si un valor existe en un array.
$existe = in_array(2, [1, 2, 3, 4]); // true

// Funciones de manejo de fechas
// time(): Devuelve el momento actual como un timestamp.
$timestamp = time();

// date(): Formatea una fecha y una hora local.
$fecha = date("Y-m-d H:i:s", time()); // Formato: "2024-11-19 01:00:00"

// strtotime(): Convierte una descripción de fecha/hora en inglés a un timestamp.
$timestamp = strtotime("next Monday");

// getdate(): Devuelve información sobre una fecha específica.
$infoFecha = getdate();

// Funciones de manejo de archivos
// fopen(): Abre un archivo o URL.
$file = fopen("archivo.txt", "r");

// fclose(): Cierra un puntero de archivo abierto.
fclose($file);

// file_get_contents(): Lee el contenido completo de un archivo en una cadena.
$contenido = file_get_contents("archivo.txt");

// Funciones de manejo de variables
// isset(): Comprueba si una variable está definida y no es null.
if (isset($variable)) { /* código */
}

// empty(): Comprueba si una variable está vacía.
if (empty($variable)) { /* código */
}

// unset(): Destruye una variable especificada.
unset($variable);

// is_string(): Comprueba si una variable es de tipo string.
if (is_string($variable)) { /* código */
}

// is_numeric(): Comprueba si una variable es un número o una cadena numérica.
if (is_numeric($variable)) { /* código */
}

// Funciones de manejo de números
// rand(): Genera un número entero aleatorio.
$randomNumber = rand(1, 100); // Número aleatorio entre 1 y 100

// Funciones de manejo de sesiones
// session_start(): Inicia una nueva sesión o reanuda una sesión existente.
session_start();

// session_destroy(): Destruye todos los datos asociados con la sesión actual.
session_destroy();

// session_unset(): Libera todas las variables de sesión.
session_unset();

// Funciones de manejo de errores
// error_reporting(): Establece qué niveles de errores de PHP son notificados.
error_reporting(E_ALL);

// exit() / die(): Salir del script actual.
exit("Script terminado.");
// o
die("Script terminado.");

// Funciones de seguridad
// htmlspecialchars(): Convierte caracteres especiales en entidades HTML.
$seguro = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
?>