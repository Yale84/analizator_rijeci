<?php

class Date
{
    public $day = "Friday";
    public $format = 'US';

    private function format()
    {

    }
}
// izrada objekta iz klase naziva se INSTANTIATION
$instance = new Date();

#pozivanje svojstva (property)

echo $instance->format;
echo '<br>';
# ili echo $instance->day;

/*echo '<pre>';
var_dump($instance);
echo '</pre>';*/

$instance->day = "Wednesday";
echo $instance->day;
echo '<br>';

$instance2 = new Date();
echo $instance2->day;
echo '<br>';

$instance2->day = "Monday";
echo $instance2->day;
echo '<br>';
# reference to a $method
$instance3 = $instance;
echo $instance3->day;
echo '<br>';

# copies the $method
$instance4 = clone $instance2;
echo $instance4->day;
echo '<br>';

