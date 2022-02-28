<?php

$a = rand(-1,10);
$b = rand(-11,20);

function defin($var1, $var2)
{
    if ($var1 >= 0 && $var2 >=0){
        return "a и b положительные";
    } elseif ($var1 <= 0 && $var2 <= 0){
        return "a и b отрицательные";
    } else { 
        return "a и b разных знаков";
    }
}

echo defin($a, $b);