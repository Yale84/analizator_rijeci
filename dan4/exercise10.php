<?php
$fruits = array(0 => 'lemon', 'a' => 'orange', 1 => 'banana','b' => 'apple');
$br_el=0;
foreach ($fruits as $value) {
    $br_el++;
}
echo $br_el;
//ili
echo count($fruits);
var_dump(count($fruits));

foreach ($fruits as $key => $value) {
}
echo $value;
//ili
echo end($fruits);

echo '<br>';
foreach ($fruits as $key => $value) {
    if ($value == 'banana') {
        break;
    }
}
echo $key;
//ili
echo '<hr>';
$key = array_search('banana', $fruits);
echo $key;
//ako samo želimo saznati je li neka vrijednost u polju
echo '<hr>';
if (in_array('banana', $fruits)) {
    echo 'Banana postoji u polju.';
}
echo '<hr>';
//1. Napišite program koji upisuje pet imena u polje $imena i ispisuje ih s pomoću petlje foreach.
$polje = array('Darinko', 'Hrvatin', 'Miomir', 'Radovan', 'Vinko');
foreach ($polje as $imena) {
    echo $imena.'<br>';
    /*if ($imena < count($polje)-1) {
        echo ', ';
    }*/
}
//2. Polju iz prethodnog zadatka promijenite ključeve tako da umjesto ključa 1 piše ime5, umjesto ključa 2 ime4 itd.
echo '<hr>';
$polje = array('ime5' => 'Darinko', 'ime4' => 'Hrvatin', 'ime3' => 'Miomir', 'ime2' => 'Radovan', 'ime1' => 'Vinko');
echo '<pre>';
print_r($polje);
echo '</pre>';
echo '<hr>';
//ili
$polje_imena = array();

$polje_imena["ime5"] = "Darinko";
$polje_imena["ime4"] = "Hrvatin";
$polje_imena["ime3"] = "Miomir";
$polje_imena["ime2"] = "Radovan";
$polje_imena["ime1"] = "Vinko";

foreach ($polje_imena as $key => $ime) {
    echo $key." => ".$ime."<br>";
}
//3. Posložite imena u polju iz prvoga zadatka abecednim redom i ispišite vrijednosti elemenata uz pomoć petlje for.
echo '<hr>';
$polje_imena = array();
$polje_imena[] = "Miomir";
$polje_imena[] = "Radovan";
$polje_imena[] = "Vinko";
$polje_imena[] = "Darinko";
$polje_imena[] = "Hrvatin";

sort($polje_imena);
for($i=0; $i < count($polje_imena); $i++){
    echo $polje_imena[$i]."<br>";
}
//4.Posložite ključeve u polju abecednim redom i ispišite vrijednosti elemenata zajedno s pripadajućim ključevima s pomoču petlje foreach.
echo '<hr>';

$polje_imena = array();
$polje_imena["ime5"] = "Darinko";
$polje_imena["ime4"] = "Hrvatin";
$polje_imena["ime3"] = "Miomir";
$polje_imena["ime2"] = "Radovan";
$polje_imena["ime1"] = "Vinko";
//sort($polje_imena);
ksort($polje_imena);
foreach ($polje_imena as $key => $value){
    echo $key." => ".$value."<br>";
}

//5. Napišite program koji će s pomoću petlje for automatski stvoriti polje brojeva od 1 do 100 s petljom foreach ispisati sadr
//žaj polja
echo '<hr>';
$polje_brojeva = array();
for ($i=1; $i <= 100; $i++) {
    $polje_brojeva[] = $i;
}
//print_r($polje_brojeva);
foreach ($polje_brojeva as $key) {
    echo $key."<br>";
}