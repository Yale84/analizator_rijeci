<?php

function f($a){
    $a++;
    echo $a . '<br>';
}
f(3);
echo '<br>';

$a=5;
function func(){
    $a++;
    echo $a . '<br>';
}

func();
echo $a . '<br>';
echo '<br>';
function show_naslov($naslov = 'no_title')
{
    switch ($naslov) {
        case 'film':
            $var = 'Terminator';
            break;
        case 'serija':
            $var = 'Dr. House';
            break;
        case 'no_title':
            $var = '';
            break;
    }
    echo $var;
}
function show_imena($imena = array())
{
    foreach ($imena as $ime) {
        echo $ime;
    }
}
show_naslov();
show_imena();