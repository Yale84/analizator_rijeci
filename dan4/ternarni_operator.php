<?php
$a=10;
if($a==10):
    echo'10';
else:
    echo'Nije 10';
endif;
echo '<hr>';
echo($a == 10) ? '10' : 'Nije 10';
echo '<hr>';
if($a==10):
    $b = 5;
else:
    $b=3;
endif;
/*Uvjet u zagradama, upitnik (?) je if-blok, 
između dvotočke (:) i točke-zareza (;) je else-blok.*/
$b = ($a == 10) ? 5 : 3;
echo $b;