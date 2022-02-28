<?php


function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation){
        case "sum":
            return $arg1 + $arg2;
    

        case "sub":
            return $arg1 - $arg2;
        

        case "mul":
            return $arg1 * $arg2;
        

        case "dev":
            return $arg1 / $arg2;
        
    }
}

echo mathOperation(10, 20, "sum");