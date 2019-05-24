<?php
$polje=array('Tesla','Edison','Bell');
//ili
$polje=array();
$polje[0]='Tesla';
$polje[1]='Edison';
$polje[2]='Bell';
//malo drugačiji način
$polje=array('Penkala');
$polje[]='Tesla';
$polje[]='Edison';
$polje[]='Bell';
//definiranje brojčane vrijednosti ključa
$polje=array('5' => 'Tesla', '6' => 'Edison','7' => 'Bell');
$polje[] = 'Penkala';
//ugrađena funkcija za dodavanje jednog ili više elemenata na kraj polja
$polje=array('naranča','banana');
array_push($polje, 'jabuka','jagoda');
//asocijativna polja
$polje=array('boja1' => 'plava', 'boja2' => 'crvena','boja3' => 'zelena');
//ili
$polje=array();
$polje['boja1']='plava';
$polje['boja2']='crvena';
$polje['boja3']='zelena';
//kombinacija str i int
$polje=array();
$polje[1]='Tesla';
$polje['dva']='Edison';
$polje[]='Bell';
//ispisat će 1, dva, 2 kao ključeve polja
//prikaz i ispis polja
$polje=array('Tesla','Edison','Bell');
echo $polje[1];
echo '<hr>';
for($i=0;$i<=2;$i++)
{
    echo $polje[$i].'<br>';
}
//ili petljom foreach
foreach ($polje as $ime) {
    echo '<br>'.$ime;
}
//pri traženju grešaka se koristi print_r funkcija
$polje=array('Tesla','ime'=>'Edison','Bell');
echo '<pre>';
print_r($polje);
echo '</pre>';
echo '<hr>';
$polje=array('Tesla','Edison','Bell');
echo $polje[0].'<br>';
echo $polje[1].'<br>';
echo $polje[2];
echo '<hr>';
for($i=0;$i<=2;$i++){
    echo $polje[$i].'<br>';
}
echo '<hr>';
for($i=0;$i<count($polje);$i++){
    echo $polje[$i].'<br>';
}
echo '<hr>';
$polje=array('Tesla','Edison','Bell');
foreach ($polje as $ime) {
    echo $ime.'<br>';
}
echo '<hr>';
$polje=array('Tesla','Edison','Bell');
foreach ($polje as $key => $ime) {
    echo 'Element broj '.$key.' ima vrijednost: '.$ime.'<br>';
}
echo '<hr>';
$učenici=array('1'=>array('ime'=>'Ivan','prezime'=>'Ivanić'),
                '2'=>array('ime'=>'Mate','prezime'=>'Matić'),
                '3'=>array('ime'=>'Ante','prezime'=>'Antić'));

                foreach ($učenici as $br_učenika => $podaci) {
                    foreach ($podaci as $naziv_podataka => $vrijednost_podataka) {
                        echo 'Učenik br. '.$br_učenika.' - '.$naziv_podataka.': '.$vrijednost_podataka.'<br>';
                    }
                }