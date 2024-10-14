<?php
// Declarar arrays
$numeros = array(1, 2, 3, 4, 5);
$animales = ["Perro", "Gato", "Elefante"];
$frutas = array("Manzana", "Banana", "Naranja");

// Acceder a los elementos del array
echo $animales[0]; // Imprime: Perro
echo $frutas[0]; // Imprime: Manzana

// Modificar un elemento
$animales[1] = "León";

// Añadir un elemento al array
$animales[] = "Tigre";
$frutas[] = "Uva";

// Recorrer arrays
foreach ($animales as $animal) {
    echo $animal . " ";
}

$personas = ["Juan" => 25, "Maria" => 30];
foreach ($personas as $nombre => $edad) {
    echo "$nombre tiene $edad años. ";
}

// Arrays multidimensionales
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $matriz[1][2]; // Imprime: 6

// Funciones útiles
echo count($animales); // Imprime: 4
sort($animales); // Ordena alfabéticamente
shuffle($numeros); // Mezcla los elementos aleatoriamente

$indice = array_search("Gato", $animales);
if ($indice !== false) {
    echo "Gato encontrado en el índice " . $indice;
}

// Arrays asociativos
$edades = ["Juan" => 25, "Maria" => 30, "Pedro" => 35];
echo $edades["Maria"]; // Imprime: 30
$edades["Ana"] = 28;

// Manipulación avanzada de arrays
$combinado = array_merge($frutas, $animales);
$fragmentos = array_chunk($numeros, 2);

$numeros_pares = array_filter($numeros, function ($valor) {
    return $valor % 2 === 0;
});

?>