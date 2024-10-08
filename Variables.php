<?php
// Este archivo demuestra el uso de diferentes tipos de variables en PHP, incluyendo funciones, clases, constantes y variables globales

// Definición de una constante
define("NOMBRE_SITIO", "Mi Sitio Web");

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

// Variables asociativas
$persona = [
    "nombre" => "Juan Pérez",
    "edad" => 30,
    "altura" => 1.75
];

// Variables null
$direccion = null;
$telefono = null;

// Variable global
$mensajeGlobal = "Este es un mensaje global";

// Función para calcular el promedio de un array
function calcularPromedio($array)
{
    $suma = 0;
    foreach ($array as $valor) {
        $suma += $valor;
    }
    return $suma / count($array);
}

// Clase Persona
class Persona
{
    public $nombre;
    public $edad;
    public $altura;
    public $direccion;
    public $telefono;

    public function __construct($nombre, $edad, $altura, $direccion = null, $telefono = null)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
    }

    public function presentarse()
    {
        global $mensajeGlobal; // Uso de variable global
        $presentacion = "Mi nombre es: " . $this->nombre . ", tengo " . $this->edad . " años y mido " . $this->altura . " metros.<br>";
        if ($this->direccion !== null) {
            $presentacion .= "Vivo en: " . $this->direccion . "<br>";
        }
        if ($this->telefono !== null) {
            $presentacion .= "Mi teléfono es: " . $this->telefono . "<br>";
        }
        $presentacion .= $mensajeGlobal . "<br>";
        return $presentacion;
    }
}

// Crear una instancia de la clase Persona
$juan = new Persona("Juan Pérez", 30, 1.75);

// Imprimimos los valores de las variables
echo $juan->presentarse();
echo "Un saludo: " . $saludo . "<br>";

// Condicional utilizando una variable booleana
if ($esEstudiante) {
    echo "Soy estudiante.<br>";
}

// Recorriendo un array
foreach ($frutas as $fruta) {
    echo $fruta . ", ";
}

// Calculando la suma de los elementos de un array
echo "<br>El promedio de calificaciones es: " . calcularPromedio($calificaciones) . "<br>";

// Uso de variables superglobales
echo "El método de la solicitud es: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "El nombre del script es: " . $_SERVER['PHP_SELF'] . "<br>";

// Manejo de formularios (simulación)
$_POST['nombre'] = "Carlos";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Nombre enviado por POST: " . $_POST['nombre'] . "<br>";
}

// Ejemplos de variables null
if ($direccion === null) {
    echo "La dirección no está definida.<br>";
}
if ($telefono === null) {
    echo "El teléfono no está definido.<br>";
}

// Uso de una constante
echo "Bienvenido a " . NOMBRE_SITIO . "<br>";
?>