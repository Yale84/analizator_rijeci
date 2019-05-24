<?php
//djelokrug varijabli - $a izvan i unutar funkcije su dvije različite varijable PS kod ne radi
$a = 2;

function inc_a(){
        global $a;
        $a++;
        echo $a;
    }
inc_a();
echo $a;