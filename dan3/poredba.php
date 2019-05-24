<?php
$a=1;
$b=1;
if($a==$b)
{
    echo 'Jednaki su.';
}else{
    echo 'Nisu jednaki.';
}
$a++;
$b= "1";

echo '<br>';

if($a===$b){
    echo 'Identične su.';
}else{
    echo 'Nisu identične.';
}
echo '<br>';

$a = 1;
$b = 2;

if($a != $b){
    $a++;
}else{
    $a--;
}
echo 'a = '.$a;

echo '<br>';

$a = 2;
$b = 2;

if($a != $b){
    $a++;
}else{
    $a--;
}
echo 'a = '.$a;

echo '<br>';

$a = 1;
$b = 2;

if($a > $b){
    $a++;
}else{
    $a--;
}
echo 'a = '.$a;

echo '<br>';

$a = 1;
$b = 2;

if($a >= $b){
    $a++;
}else{
    $a--;
}
echo 'a = '.$a;

echo '<br>';

$a = 1;
$b = 2;

if($a < $b){
    $a++;
}else{
    $a--;
}
echo 'a = '.$a;

echo '<br>';

$a = 1;
$b = 2;

if($a <= $b){
    $a++;
}else{
    $a--;
}
echo 'a = '.$a;