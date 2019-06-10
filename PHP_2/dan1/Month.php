<?php

include 'Date.php';
class Month extends Date
{
    private $months = array('January', 'February', 'Mars', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

    public function getMonthName($date)
    {
        $month = date('n', strtotime($date));
        $month--;
        $monthName = $this->months[$month];
        $dayname = $this->getDayName($date);
        return "It was $dayname in the month of $monthName.";
    }
}
$month = new Month();
echo $month->getMonthName('2019-06-07');