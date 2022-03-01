<?php

$a = rand(1, 10);
$b = rand(0, 2);

function sum($arg1, $arg2)
{
    return $arg1 + $arg2;
}

function sub($arg1, $arg2)
{
    return $arg1 - $arg2;
}

function mul($arg1, $arg2)
{
    return $arg1 * $arg2;
}

function dev($arg1, $arg2)
{
    return ($arg2 === 0)? "на 0 делить нельзя" :  $arg1 / $arg2;
}

echo arithmetic($a, $b);