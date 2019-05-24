<?php
$x=0;
$y=0;
$counter=1; //brojač izvršavanja petlji
while($x <= 10){
{
    while($y <= 10)
    {
        echo '<br>koordinata x= '.$x.'<br>y= '.$y;
    $y++;
    $counter++;
        if($counter > 110)
            break 2;
    }
$y=0;
$x++;
$counter++;
}