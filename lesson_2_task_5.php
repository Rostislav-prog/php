<?php

function power($val, $pov)
{
    return($pov == 1)? $val : $val * power($val, $pov - 1);
}

echo power(5, 5);