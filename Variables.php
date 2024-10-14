<?php
// Declarar variables
$nombre = "Juan";
$edad = 25;
$es_estudiante = true;

// Tipos de datos
$texto = "Hola, mundo"; // String
$numero = 123; // Integer
$decimal = 3.14; // Float
$booleano = true; // Boolean
$array = array("Manzana", "Banana"); // Array
$objeto = (object) ['nombre' => 'Juan', 'edad' => 25]; // Object
$nulo = null; // Null

// Operadores
$suma = 5 + 3;
$resta = 10 - 4;
$multiplicacion = 7 * 2;
$division = 20 / 4;
$modulo = 15 % 4;

$x = 10;
$x += 5; // $x ahora es 15
$x -= 3; // $x ahora es 12

$igual = ($x == 10); // true o false
$identico = ($x === 10); // true o false

$y = true && false; // false
$z = true || false; // true

// Variables globales y locales
$variable_global = "Soy global";

function pruebaVariable()
{
    $variable_local = "Soy local";
    echo $variable_local; // Acceso permitido
}

pruebaVariable();
echo $variable_global; // Acceso permitido

// Variables superglobales
$nombre = $_GET['nombre'];
$edad = $_POST['edad'];

$metodo_solicitud = $_SERVER['REQUEST_METHOD'];
$script_nombre = $_SERVER['SCRIPT_NAME'];

// Variables dinámicas
$foo = 'bar';
$$foo = 'baz'; // Crea una variable $bar con valor 'baz'

echo $bar; // Imprime: baz

// Manejo de variables
if (isset($nombre)) {
    echo "$nombre está definido.";
}

unset($nombre);

if (is_int($edad)) {
    echo "$edad es un entero.";
}

// Funciones adicionales para variables

// Obtener el tipo de variable
echo gettype($nombre); // Imprime: string

// Comprobar si una variable es de un tipo específico
if (is_string($texto)) {
    echo "$texto es una cadena de texto.";
}

// Convertir el tipo de una variable
$numero_str = strval($numero); // Convierte a string
$numero_int = intval($texto); // Convierte a integer
$numero_float = floatval($texto); // Convierte a float

// Verificar si una variable está vacía
if (empty($nombre)) {
    echo "La variable nombre está vacía.";
}

// Definir una variable si no existe
if (!isset($apellido)) {
    $apellido = "Perez";
}

// Imprimir el valor de una variable para depuración
var_dump($nombre);
?>