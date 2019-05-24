<?php
switch ($func_name) {
    case 'sum':
        sum();
        break;
    case 'avg':
        avg();
        break;
    case 'min':
        min();
        break;
    case 'max':
        max();
        break;
}
//ili
if (function_exists($func_name))
$func_name();