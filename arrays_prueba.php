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
?>