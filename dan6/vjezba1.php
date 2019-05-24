<?php
echo '<form method="POST" action="">';
for ($i=1; $i <= 15 ; $i++) { 
    echo "ime ";
        echo '<input type="text" name="imena['.$i.'][ime]" value="" />';
        echo 'prezime';
        echo '<input type="text" name="imena['.$i.'][prezime]" value="" />';
        echo '<br/>';
}
echo '<input type="submit" name="btn" value="Unesi" />
</form>';

if(isset($_POST["btn"]))
{
    $imena = $_POST["imena"];

    foreach ($imena as $key => $val) {
        echo $val["ime"]." ".$val["prezime"]."<br/>";
    }
}