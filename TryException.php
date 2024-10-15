<?php
function dividir($numerador, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("No se puede dividir por cero.");
    }
    return $numerador / $divisor;
}

try {
    echo dividir(10, 0);
} catch (Exception $e) {
    echo "Excepción capturada: " . $e->getMessage();
}
?>