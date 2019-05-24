<?php
$fp = fopen('data.txt', 'a');
fwrite($fp, "\nDada,Dadić");
fwrite($fp, "\nHrvoje,Horvat");
fclose($fp);

?>