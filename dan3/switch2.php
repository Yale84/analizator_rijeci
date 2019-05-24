<?php
$vrijeme = time();
echo $vrijeme;
echo '<br>';
var_dump($vrijeme);
echo '<br><br>';
$datum = date('d.m.y / h:i:s', $vrijeme);
echo $datum;
echo '<br><br>';

$mjesec = date('n', $vrijeme);
switch($mjesec)
{
    case 1:
        echo 'Siječanj';
        break;
    case 2:
        echo 'Veljača';
        break;
    case 3:
        echo 'Ožujak';
        break;
    case 4:
        echo 'Travanj';
        break;
    case 5:
        echo 'Svibanj';
        break;
    case 6:
        echo 'Lipanj';
        break;
    case 7:
        echo 'Srpanj';
        break;
    case 8:
        echo 'Kolovoz';
        break;
    case 9:
        echo 'Rujan';
        break;
    case 10:
        echo 'Listopad';
        break;
    case 11:
        echo 'Studeni';
        break;
    case 12:
        echo 'Prosinac';
        break;
    default:
        echo 'Nepoznat mjesec';
}