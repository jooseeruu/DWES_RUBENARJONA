<?php
// Convertir cadena vacía a entero (int)
$cadena = "";
$entero = (int) $cadena;
echo "Cadena a entero: " . $entero . "\n"; // Salida: 0

// Convertir cadena vacía a flotante (float)
$flotante = (float) $cadena;
echo "Cadena a flotante: " . $flotante . "\n"; // Salida: 0

// Convertir cadena vacía a booleano (bool)
$booleano = (bool) $cadena;
echo "Cadena a booleano: " . $booleano . "\n"; // Salida: (nada, ya que es false)

// Convertir cadena vacía a array
$array = explode(",", $cadena);
echo "Cadena a array: ";
print_r($array); // Salida: Array ( [0] => )

// Convertir cadena vacía a objeto
$objeto = (object) $cadena;
echo "Cadena a objeto: ";
print_r($objeto); // Salida: stdClass Object ( )

// Convertir cadena a entero (int)
$cadena = "123";
$entero = (int) $cadena;
echo "Cadena a entero: " . $entero . "\n"; // Salida: 123

// Convertir cadena a flotante (float)
$cadena = "123.45";
$flotante = (float) $cadena;
echo "Cadena a flotante: " . $flotante . "\n"; // Salida: 123.45

// Convertir entero a cadena (string)
$numero = 123;
$cadena = (string) $numero;
echo "Entero a cadena: " . $cadena . "\n"; // Salida: "123"

// Convertir cadena a booleano (bool)
$cadena = "true";
$booleano = (bool) $cadena;
echo "Cadena a booleano: " . $booleano . "\n"; // Salida: 1 (true)

// Convertir cadena a array
$cadena = "a,b,c";
$array = explode(",", $cadena);
echo "Cadena a array: ";
print_r($array); // Salida: Array ( [0] => a [1] => b [2] => c )

// Convertir array a objeto
$array = array('clave1' => 'valor1', 'clave2' => 'valor2');
$objeto = (object) $array;
echo "Array a objeto: ";
print_r($objeto); // Salida: stdClass Object ( [clave1] => valor1 [clave2] => valor2 )
?>