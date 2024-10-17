<?php
$nota = 8.3;
//Básicamente ahora los case del switch funcionan como si fuesen ifs si nota esta entre x numero y y numero printea mensaje correspondiente
//No necesitamos redondear la nota de esta manera
switch ($nota) {
    case $nota < 5:
        echo 'Suspendido';
        break;
    case $nota >= 5 && $nota < 6:
        echo 'Aprobado';
        break;
    case $nota >= 6 && $nota < 7:
        echo 'Bien';
        break;

    case $nota >= 7 && $nota < 9:
        echo 'Notable';
        break;
    case $nota >= 9 && $nota <= 10:
        echo 'Excelente';
        break;
    default:
        echo 'Nota no válida';
        break;
}


?>