<?php

$a = rand(0,15);

function up_to_15($var)
{
    switch ($var){
        case 0:
            echo $var++;
        
        case 1:
            echo $var++;
        
        case 2:
            echo $var++;
        
        case 3:
            echo $var++;
        
        case 4:
            echo $var++;

        case 5:
            echo $var++;

        case 6:
            echo $var++;

        case 7:
            echo $var++;

        case 8:
            echo $var++;

        case 9:
            echo $var++;

        case 10:
            echo $var++;

        case 11:
            echo $var++;

        case 12:
            echo $var++;

        case 13:
            echo $var++;

        case 14:
            echo $var++;

        case 15:
            echo $var++;

                        
    }
}

function up_to_15V2($var)
{
    if($var == 15){
        return 15;
    }
    return $var . up_to_15V2($var + 1);
}

echo up_to_15($a);
echo "<br>";
echo up_to_15V2($a);







