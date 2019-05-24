<?php

$zbroj = 0;

for($i = 1; $i <= 10; $i++)
{
    echo' i = <br>'.$i.'<br>';
    $zbroj = $zbroj + $i;
}
echo 'Suma = '.$zbroj;

echo '<hr>';

for($i = 10; $i >= 1; $i--){
    echo 'i = '.$i.'<br>';
}