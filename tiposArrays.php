<?php
$array = array(
    1 => "a",
    "1" => "b",
    1.9 => "c",
    true => "d",
);
var_dump($array);

// Arrays indexados
$numerico = array(3, 8, 1223, "rojo");

// Arrays asociativos
$mimatriz = array("clave" => array());

$miarray = array(
    "altura" => 170,
    "peso" => 70
);

// Arrays multidimensionales
$mimatriz = array(
    0 => array(0 => 2, 1 => 4),
    1 => array(0 => 1, 1 => 3)
);
var_dump($mimatriz);

// Arrays con claves mixtas
$mixto = array(
    "nombre" => "Juan",
    0 => "uno",
    "edad" => 25,
    1 => "dos"
);
var_dump($mixto);

// Arrays anidados (arrays dentro de arrays)
$anidados = array(
    "frutas" => array("Manzana", "Banana", "Uva"),
    "verduras" => array("Zanahoria", "Lechuga", "Tomate")
);
var_dump($anidados);

// Arrays multidimensionales con claves asociativas
$matriz_asociativa = array(
    "fila1" => array("col1" => 2, "col2" => 4),
    "fila2" => array("col1" => 1, "col2" => 3)
);
var_dump($matriz_asociativa);

// Arrays con diferentes tipos de datos
$tipos_diferentes = array(
    "entero" => 10,
    "cadena" => "Hola",
    "booleano" => true,
    "flotante" => 2.5,
    "nulo" => null,
    "array" => array(1, 2, 3)
);
var_dump($tipos_diferentes);

?>