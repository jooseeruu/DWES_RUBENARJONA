<?php
$beer = 'san miguel';
switch ($beer) {
    case 'alhambra':
        echo 'Sure ?';
        break;
    case 'carlsberg':
    case 'heineken':
        echo 'Good choice';
        break;
    default:
        echo 'Please make a new selection ...';
        break;
}
?>