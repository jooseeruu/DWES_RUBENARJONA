<?php
function VerificarString()
{
    try {
        $name = "NamEL";
        if (preg_match("/[0-9]/", $name)) {
            echo $name . " contiene números.";
            return;
        }
        $nameEnMinusculas = strtolower($name);
        $posicion = strpos($nameEnMinusculas, 'name');

        if ($posicion === false) {
            echo "Introducir nombre nuevamente.";
        } else {
            echo "Contiene la palabra name.";
        }
    } catch (Exception $e) {
        echo "ERROR! " . $e->getPrevious()->getMessage() . " " . $e->getMessage();
    }
}

VerificarString();
?>