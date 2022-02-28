<?php

$a = rand(1, 10);
$b = rand(11, 20);

function arithmetic($var1, $var2)
{
    $add = $var1 + $var2;
    $sub = $var1 - $var2;
    $mul = $var1 * $var2;
    $dev = $var1 / $var2;

    return "$add <br> $sub <br>  $mul <br>  $dev";
}

echo arithmetic($a, $b);