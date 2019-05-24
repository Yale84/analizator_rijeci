<?php
//statične var
function inc_a(){
    static $a;
    $a++;
    echo $a;
}
inc_a();
inc_a();
inc_a();