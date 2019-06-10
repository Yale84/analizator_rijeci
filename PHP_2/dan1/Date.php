<?php

class Date
{
    protected $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    protected function getDayName($date)
    {
        #echo $date; die();
        $day = date('N', strtotime($date));
        #echo $date; die();
        $day--;
        #$this pseudovarijabla koja zamijenjuje objekt
        $dayname = $this->days[$day];
        #echo $dayname; die();
        return $dayname;
    }
}
//$date = new Date();
//echo $date->getDayName('2019-06-07');