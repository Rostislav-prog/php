<?php

$a = rand(0,15);

function up_to_15($var)
{
    switch ($var){
        case 0:
            echo 0;
        
        case 1:
            echo 1;
        
        case 2:
            echo 2;
        
        case 3:
            echo 3;
        
        case 4:
            echo 4;

        case 5:
            echo 5;

        case 6:
            echo 6;

        case 7:
            echo 7;

        case 8:
            echo 8;

        case 9:
            echo 9;

        case 10:
            echo 10;

        case 11:
            echo 11;

        case 12:
            echo 12;

        case 13:
            echo 13;

        case 14:
            echo 14;

        case 15:
            echo 15;
            break;

                        
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







