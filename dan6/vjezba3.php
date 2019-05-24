<?php

for ($i=1; $i <= 5; $i++) { 
    echo '<a href="skripta.php?broj='.$i.'">';
    echo $i;
    echo '</a><br/>';
}
if((int)$_GET["broj"]>0)
{
    echo 'Odabrali ste broj: '.$_GET["broj"];
}