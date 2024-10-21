<?php
function demo($arr, $val = 0)
{
    $men = 0;
    $may = 0;
    $ig = 0;
    $i = 0;
    $largoArr = count($arr);

    while ($i < $largoArr) {
        if ($arr[$i] < $val) {
            $men++;
        } elseif ($arr[$i] > $val) {
            $may++;
        } else {
            $ig++;
        }
        $i++;
    }

    echo "$men menores de $val.<br />";
    echo "$may mayores a $val.<br />";
    echo "$ig igual a $val.";
}

demo([37, 1222, 123, 44, 35], 37);
?>