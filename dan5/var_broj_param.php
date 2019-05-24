<?php
function sum()
{
    for ($i=0; $i < func_num_args(); $i++) { 
        $sum += func_get_arg($i);
    }
    return $sum;
}
echo sum(1, 7, 3);
echo '<br>';

function sum()
{
    $parametres = func_get_args();

    foreach ($parametres as $param) {
        $sum += $param;
    }
    return $sum;
}
echo sum(1, 3, 7);