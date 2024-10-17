<?php
$nota = 6;


switch ($nota) {
    case 1:
    case 2:
    case 3:
    case 4:
        echo 'Suspendido';
        break;
    case 5:
        echo 'Aprobado';
        break;
    case 6:
        echo 'Bien';
        break;
    case 7:
    case 8:
        echo 'Notable';
        break;
    case 9:
    case 10:
        echo 'Excelente';
        break;
    default:
        echo 'Nota no válida';
        break;
}
?>