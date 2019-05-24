<?php
function potencija(&$val)
{
    $val = $val * $val;
}
$a = 2;
potencija($a);
echo $a;