<?php

function author($ime){
$author_array = explode(',',$ime);
$ime = $author_array[1];
$prezime = $author_array[0];

$prezime = mb_strtolower($prezime); //perić za UTF-8 znakove stavlja se ispred mb_
$prezime = ucfirst($prezime);//Perić
//ili kraće $prezime = ucfirst(strtolower($prezime));
$ime_slovo = strtoupper(substr($ime, 0, 1));
return $ime_slovo.'. '.$prezime;

print_r($author_array);
}
echo author('pEriĆ,peRo'); //očekivani rezultat P. Perić