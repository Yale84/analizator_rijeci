<?php

echo '<form method="POST" action="">';
if(!isset($_POST["btn_br"]))
{
    echo 'Broj imena za upis ';
    echo '<input type="text" name="br" value="" />';
    echo '<input type="submit" name="btn_br" value="Unesi" />';
}else{
    $br=(int)$_POST["br"];
    for ($i=1; $i <= "br" ; $i+1) { 
        echo 'ime: ';
        echo '<input type="text" name="imena['.$i.'][ime]" value="" />';
        echo 'prezime: ';
        echo '<input type="text" name="imena['.$i.'][prezime]" value="" />';
        echo '<br/>';
    }
    echo '<input type="submit" name="btn" value="Unesi" />';
}
echo '</form>';

if(isset($_POST["btn"]))
{
    $imena = $_POST["imena"];

    foreach ($imena as $key => $val) {
        echo $val["ime"]." ".$val["prezime"]."<br/>";
    }
}