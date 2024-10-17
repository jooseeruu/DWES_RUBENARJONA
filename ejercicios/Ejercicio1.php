<?php
$today = date("l");
$todayAll = date("Y-m-d");
echo $todayAll;

switch ($today) {
    case 'Monday':
        echo 'Es lunes';
        break;
    case 'Tuesday':
        echo 'Es martes';
        break;
    case 'Wednesday':
        echo ' Es miércoles';
        break;
    case 'Thursday':
        echo ' Es jueves';
        break;
    case 'Friday':
        echo 'Es viernes';
        break;
    case 'Saturday':
        echo 'Es sábado';
        break;
    case 'Sunday':
        echo 'Es domingo';
        break;
    default:
        echo 'Dia inexistente';
        break;
}
?>