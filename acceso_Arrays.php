<?php
// Declarar un array
$colores = array("Rojo", "Verde", "Azul");

// Acceder a los elementos del array
echo $colores[0]; // Imprime: Rojo
echo $colores[1]; // Imprime: Verde
echo $colores[2]; // Imprime: Azul

// Declarar un array asociativo
$edades = array("Juan" => 25, "Maria" => 30, "Pedro" => 35);




// Acceder a los elementos del array asociativo
echo $edades["Juan"]; // Imprime: 25
echo $edades["Maria"]; // Imprime: 30
echo $edades["Pedro"]; // Imprime: 35

// Recorrer un array con un bucle
foreach ($colores as $color) {
    echo $color . " ";
}

// Recorrer un array asociativo con un bucle
foreach ($edades as $nombre => $edad) {
    echo "$nombre tiene $edad años. ";
}
?>