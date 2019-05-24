<?php
$a=15;
$b=10;
$c=5;

if($b < $a && $c <= 4){
    echo'Uvijet ispunjen';
}else{
    echo'Uvijet nije ispunjen';
}
echo'<br>';

if($b < $a || $c <= 4){
    echo'Uvijet ispunjen';
}else{
    echo'Uvijet nije ispunjen';
}
echo'<br>';

//želimo vidjeti je li prvi ili drugi dio true
if(($b > $a && $b < $c) | ($b < $a && $b > $c)){
    echo'Uvijet ispunjen';
}else{
    echo'Uvijet nije ispunjen';
}
echo'<br>';

$a = 5;

if($a > 0 && $a < 10){
    echo 'Broj je u traženom nizu.';
}else{
    echo 'Broj nije u traženom nizu.';
}

echo'<br>';

$a = 0;
$b = -2;

if($a > 0 || $b < 0){
    echo 'Uvjet je zadovoljen.';
}else{
    echo 'Uvjet nije zadovoljen.';
}
echo'<br>';

$a = 0;

if($a){
    echo 'Uvjet je istinit.';
}else{
    echo 'Uvjet je lažan.';
}
echo'<br>';

$a = 0;

if(!$a){
    echo 'Uvjet je istinit.';
}else{
    echo 'Uvjet je lažan.';
}
