<?php

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

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation){
        case "sum":
            return sum($arg1, $arg2);
    
        case "sub":
            return sub($arg1, $arg2);
        
        case "mul":
            return mul($arg1, $arg2);
        
        case "dev":
            return dev($arg1, $arg2);

        default:
            return "ошибка операции";
    }
}

echo mathOperation(10, 0, "dev");