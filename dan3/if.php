<?php
$a=10;
$b='10';
//u slučaju bez vitičastih zagrada php 
//izvršava (samo prvi red poslije if upita)
// tzv. SINTAKSA BEZ VITIČASTIH ZAGRADA
if($a==10)
    echo'Varijabla A ima vrijednost '.$a;

echo'<br>';
//ovo je python način (tzv. "SINTAKSA S DVOTOČKAMA")
//inače PHP koristi vitičaste, a ne (:) nakon if, else i endif;
if($a==$b):
    echo'Jednake su';
else:
    echo'Nisu jednake';
endif;
echo'<br>';
///=== uspoređuje vrijednosti i tip podatka (int!=str)
if($a===$b){
    echo'Identične su';
}else{
    echo'Nisu identične';
}
echo'<br>';
//****************************/
if($a!=$b):
    echo'Različite su';
else:
    echo'Nisu različite';
endif;
echo'<br>';
if($a!==$b){
    echo'Nisu identične';
}else{
    echo'Identične su';
}
echo'<br>';
$a=15;
#komentar jednoga reda
# < manje od
# > veće od
# <= manje ili jednako
# >= veće ili jednako

if ($a > $b){
    echo 'a je veće od b';
}else{
    echo'b je veće od a';
}
echo'<br>';

if('Ana'=='Ana'){
    echo'Istina';
}
echo'<br>';
if(array()){
    echo'Istina';
}else{
    echo 'Laž';
}
echo'<br>';
$a=NULL;
$a='FAS';
if($a){
    echo 'varijabla ima vrijednost';
}else{
    echo 'nema vrijednost';
}
echo'<br>';
$a=NULL;
if(isset($a)){
    echo'varijabla je postavljena';
}else{
    echo'nije postavljena';
}
echo'<br>';
$a=NULL;
if(empty($a)){
    echo'varijabla je postavljena';
}else{
    echo'nije postavljena';
}
echo'<br>';
$a = 1;
if($a==1);
echo 'Varijabla A je jednaka 1.';
echo'<br>';
$a = 1;
if($a=2);
echo 'Varijabla A je jednaka 2.';
echo'<br>';


//ternarni uvjetni operator
$a = 3;
$b = ($a > 5) ? -1 : 1;
echo $a+$b;