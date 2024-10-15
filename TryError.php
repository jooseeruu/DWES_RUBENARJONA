<?php
// Esta función intentará ejecutar código inválido que genera un Error
function ejecutarError()
{
    $arr = [];
    return $arr->propiedadInexistente; // Intento de acceder a una propiedad de un array
}

try {
    ejecutarError();
} catch (Error $e) {
    echo "Error capturado: " . $e->getMessage();
}
?>