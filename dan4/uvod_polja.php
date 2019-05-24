<?php

$a = array();

$a[] = 'Prvi element';
$a[] = 'Drugi element';
$a[] = 'Treći element';
$a[] = 'Četvrti element';
$a[] = 'Peti element';

echo '<pre>';
print_r($a);
echo '</pre>';

echo'vrijednost elementa s ključem 2 je: '.$a[2];
echo '<br>';
echo 'Polje $a se sastoji od: ' . count($a).' elemenata';
echo '<hr>';
for($i = 0; $i < count($a); $i++){
    echo $i.' => '. $a[$i] . '<br>';
}