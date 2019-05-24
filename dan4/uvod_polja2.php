<?php

$b = array();

$b[0] = 'Prvi element';
$b[10] = 'Drugi element';
$b[11] = 'Treći element';
$b[] = 'Četvrti element';
$b[] = 'Peti element';
/*for($i = 0; $i < count($b); $i++){
    echo $i.' => '. $b[$i] . '<br>';
} */
foreach($b as $vrijednost){
    echo $vrijednost;
    echo '<br>';
}
//foreach petlju ne zanimaju [ključevi]
echo '<hr>';
foreach($b as $kljuc => $vrijednost){
    echo $kljuc .' => '. $vrijednost;
    echo '<br>';
}
echo '<hr>';
$c = array('osoba1' => 'Mirko', 'osoba2' => 'Slavko', 'osoba3' => 'Pero', 'osoba4' => 'Marko');
foreach ($c as $key => $value) {
    echo $key .' => '.$value;
    echo '<br>';
}
echo '<pre>';
print_r($c);
echo '</pre>';

//još jedan način inicijalizacije polja
$d = ['osoba1' => 'Mirko', 'osoba2' => 'Slavko', 'osoba3' => 'Pero', 'osoba4' => 'Marko'];