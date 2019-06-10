<?php

class Date
{
    public $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    protected $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    private $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
}

$date = new Date();

echo $date -> days[0];
echo '<br>';
#echo '<pre>';
#var_dump($date);
#echo '</pre>';
echo $date -> days2[0];
echo '<br>';
echo $date -> days3[0];
echo '<br>';