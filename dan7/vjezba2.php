<?php

$ucenik1 = array('Marko','Markić', 'marko@marko.mr','Zagreb','Aleksandrove stube');
$ucenik2 = array();
$ucenik2[] = 'Ivo';
$ucenik2[] = 'Ivić';
$ucenik2[] = 'ivo@ivo.iv';
$ucenik2[] = 'Pula';
$ucenik2[] = 'Puležanska';

pp($ucenik1);
pp($ucenik2);

for ($i=0; $i < count($ucenik2); $i++) { 
    echo $ucenik2[$i];
}
function pp($array){
    '<pre>';
    print_r($array);
    '</pre>';
}
?>