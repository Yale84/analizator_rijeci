<?php
//Napuniti polje s 10 elemenata
//Ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom,
//zadnja vrijednost na kraju ne smije imati zarez

$a = array('Ante', 'Brane', 'Daniel', 'Franjo', 'Hrvoje', 'Ivan', 'Marko', 'Pero', 'Stipe', 'Vinko');
for($i=0; $i < count($a); $i++)
{
    echo $a[$i];
    if ($i < (count($a)-1)){
        echo ', ';
    }
}
echo'<hr>';
//2. Izbrisati prvi i zadnji element polja
//      Ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom,
//      zadnja vrijendost na kraju ne smije imati zarez
array_pop($a);
array_shift($a);
for($i=0; $i < count($a); $i++)
{
    echo $a[$i];
    if ($i < (count($a)-1)){
        echo ', ';
    }
}

//3. Sortirati polje uzlazno
//      Ispisati vrijednosti svakoga elementa tako da su vrijednnnosti odvojene zarezom
//      zadnja vrijendost na kraju ne smije imati zarez.