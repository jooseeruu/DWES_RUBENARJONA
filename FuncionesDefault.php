<?php
// Funciones de manipulación de cadenas
// strlen(): Devuelve la longitud de una cadena.
$length = strlen("Hola Mundo!"); // 11
echo "Longitud de la cadena: $length\n";

// strpos(): Encuentra la posición de la primera aparición de una subcadena en una cadena.
$pos = strpos("Hola Mundo!", "Mundo"); // 5
echo "Posición de 'Mundo' en 'Hola Mundo!': $pos\n";

// str_replace(): Reemplaza todas las apariciones de una cadena de búsqueda con otra.
$nuevaCadena = str_replace("Mundo", "PHP", "Hola Mundo!"); // "Hola PHP!"
echo "Cadena reemplazada: $nuevaCadena\n";

// substr(): Devuelve una parte de una cadena especificada por el offset y la longitud.
$subcadena = substr("Hola Mundo!", 5, 5); // "Mundo"
echo "Subcadena: $subcadena\n";

// strtolower(): Convierte una cadena a minúsculas.
$minusculas = strtolower("Hola Mundo!"); // "hola mundo!"
echo "En minúsculas: $minusculas\n";

// strtoupper(): Convierte una cadena a mayúsculas.
$mayusculas = strtoupper("Hola Mundo!"); // "HOLA MUNDO!"
echo "En mayúsculas: $mayusculas\n";

// explode(): Divide una cadena en un array utilizando un delimitador.
$array = explode(" ", "Hola Mundo!"); // ["Hola", "Mundo!"]
echo "Array: ";
print_r($array);

// Funciones de manejo de arrays
// count(): Cuenta todos los elementos en un array.
$count = count([1, 2, 3, 4]); // 4
echo "Cantidad de elementos en el array: $count\n";

// in_array(): Comprueba si un valor existe en un array.
$existe = in_array(2, [1, 2, 3, 4]); // true
echo "Existe el valor 2 en el array: " . ($existe ? "sí" : "no") . "\n";

// Funciones de manejo de fechas
// time(): Devuelve el momento actual como un timestamp.
$timestamp = time();
echo "Timestamp actual: $timestamp\n";

// date(): Formatea una fecha y una hora local.
$fecha = date("Y-m-d H:i:s", time()); // Formato: "2024-11-19 01:00:00"
echo "Fecha y hora actual: $fecha\n";

// strtotime(): Convierte una descripción de fecha/hora en inglés a un timestamp.
$timestamp = strtotime("next Monday");
echo "Timestamp del próximo lunes: $timestamp\n";

// getdate(): Devuelve información sobre una fecha específica.
$infoFecha = getdate();
echo "Información de la fecha actual: ";
print_r($infoFecha);

// Funciones de manejo de archivos
// fopen(): Abre un archivo o URL.
$file = fopen("For.php", "r");
echo "Archivo abierto: " . ($file ? "sí" : "no") . "\n";

// fclose(): Cierra un puntero de archivo abierto.
fclose($file);
echo "Archivo cerrado: " . ($file ? "sí" : "no") . "\n";

// file_get_contents(): Lee el contenido completo de un archivo en una cadena.
$contenido = file_get_contents("For.php");
echo "Contenido del archivo: $contenido\n";

// Funciones de manejo de variables
// isset(): Comprueba si una variable está definida y no es null.
$variable = "example"; // Inicializar la variable
if (isset($variable)) {
    echo "La variable está definida\n";
}

// empty(): Comprueba si una variable está vacía.
if (empty($variable)) {
    echo "La variable está vacía\n";
} else {
    echo "La variable no está vacía\n";
}

// unset(): Destruye una variable especificada.
unset($variable);
echo "La variable ha sido destruida\n";

// is_string(): Comprueba si una variable es de tipo string.
$variable = "example"; // Inicializar la variable nuevamente
if (is_string($variable)) {
    echo "La variable es una cadena\n";
}

// is_numeric(): Comprueba si una variable es un número o una cadena numérica.
if (is_numeric($variable)) {
    echo "La variable es numérica\n";
} else {
    echo "La variable no es numérica\n";
}

// Funciones de manejo de números
// rand(): Genera un número entero aleatorio.
$randomNumber = rand(1, 100); // Número aleatorio entre 1 y 100
echo "Número aleatorio: $randomNumber\n";

// Funciones de manejo de sesiones
// session_start(): Inicia una nueva sesión o reanuda una sesión existente.
session_start();
echo "Sesión iniciada\n";

// session_destroy(): Destruye todos los datos asociados con la sesión actual.
session_destroy();
echo "Sesión destruida\n";

// session_unset(): Libera todas las variables de sesión.
session_unset();
echo "Variables de sesión liberadas\n";

// Funciones de manejo de errores
// error_reporting(): Establece qué niveles de errores de PHP son notificados.
error_reporting(E_ALL);
echo "Nivel de reporte de errores establecido\n";

// Funciones de seguridad
// htmlspecialchars(): Convierte caracteres especiales en entidades HTML.
$seguro = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo "Cadena segura: $seguro\n";

// exit() / die(): Salir del script actual.
// exit("Script terminado.");
// o
// die("Script terminado.");
?>