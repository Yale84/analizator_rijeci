<?php

$ucenik1 = array('ime' => 'Marko',
                'prezime' => 'Markić',
                'email' => 'marko@marko.mr',
                'adresa' => array(
                    'grad' => 'Zagreb',
                    'ulica' => 'Aleksandrove stube'));
$ucenik2 = array();
$ucenik2['ime'] = 'Ivo';
$ucenik2['prezime'] = 'Ivić';
$ucenik2['email'] = 'ivo@ivo.iv';
$ucenik2['adresa']['grad'] = 'Pula';
$ucenik2['adresa']['ulica'] = 'Puležanska';

pp($ucenik2);

foreach ($ucenik1 as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $k => $v) {
            echo $v.'<br>'; 
        }
    }else {
        echo $value.'<br>';        
    }

}

function pp($array){
    '<pre>';
    print_r($array);
    '</pre>';
}
echo '<hr>';
?>