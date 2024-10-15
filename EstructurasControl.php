<?php
// Estructuras de Control en PHP

// 1. Estructura condicional: if
if ($condicion) {
    // Código a ejecutar si la condición es verdadera
} elseif ($otraCondicion) {
    // Código a ejecutar si la otra condición es verdadera
} else {
    // Código a ejecutar si ninguna condición es verdadera
}

// 2. Estructura condicional: switch
switch ($variable) {
    case 'valor1':
        // Código a ejecutar si variable es igual a valor1
        break;
    case 'valor2':
        // Código a ejecutar si variable es igual a valor2
        break;
    default:
        // Código a ejecutar si no se cumple ningún caso
        break;
}

// 3. Bucle: while
while ($condicion) {
    // Código a ejecutar mientras la condición sea verdadera
}

// 4. Bucle: do...while
do {
    // Código a ejecutar al menos una vez, luego mientras la condición sea verdadera
} while ($condicion);

// 5. Bucle: for
for ($inicializacion; $condicion; $incremento) {
    // Código a ejecutar mientras la condición sea verdadera
}

// 6. Bucle: foreach (para arrays y objetos)
foreach ($array as $clave => $valor) {
    // Código a ejecutar para cada clave-valor del array
}

// 7. Estructura de control: break
// Usada para salir de un bucle o switch
break;

// 8. Estructura de control: continue
// Usada para saltar el resto del código y continuar con la siguiente iteración del bucle
continue;

// 9. Estructura de control: return
function miFuncion()
{
    return $valor; // Devuelve un valor y termina la función
}

// 10. Estructura de control: include y require
include 'archivo.php';  // Incluye un archivo, si no lo encuentra, muestra un aviso
require 'archivo.php';  // Incluye un archivo, si no lo encuentra, lanza un error fatal

// 11. Estructura de control: goto (evitar en código moderno)
goto etiqueta;
echo "Esto se saltará";
etiqueta:
echo "Esto se ejecutará después de goto";

// 12. Estructura de control: try...catch (para manejo de excepciones)
try {
    // Código que puede lanzar una excepción
} catch (Exception $e) {
    // Código a ejecutar si ocurre una excepción
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
}

?>