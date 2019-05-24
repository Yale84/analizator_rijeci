<?php
$a = 1;

$b = (int)$a;
$c = (string)$a;

if($b === $c){
    echo 'Identične su.';
}else{
    echo 'Nisu identične.';
}
