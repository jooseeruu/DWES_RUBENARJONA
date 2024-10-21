<?php
function contarCadena($var1, $var2)
{
    $longitudVar2 = strlen($var2);
    $Iguales = 0;

    for ($j = 0; $j <= strlen($var1); $j += $longitudVar2) {
        if (substr($var1, $j, $longitudVar2) == $var2) {
            $Iguales++;
            echo substr($var1, $j, $longitudVar2) . "<br />";
        }
    }
    echo "Número de bloques iguales: " . $Iguales;
}

contarCadena("holahola", "ho");
?>