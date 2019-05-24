<?php
$e1=array(1,5,7);
$e2=array(4,8,9);
$e3=array(2,3,6);
$multi_array=array($e1,$e2,$e3);
echo '<pre>';
print_r($multi_array);
echo '</pre>';
echo '<hr>';
echo $multi_array[2][1];
echo '<hr>';
foreach ($multi_array as $el) {
    foreach ($el as $val) {
        echo $val.'<br>';
    }
}
echo '<hr>';
$el1 = array('ime' => 'Petar','prezime' => 'Petrić', 'MB' => '123');
$el2 = array('ime' => 'Ante','prezime' => 'Antić', 'MB' => '234');
$multi_array = array('učenik1' => $el1, 'učenik2' => $e2);
echo '<pre>';
print_r($multi_array);
echo '</pre>';
echo $multi_array['učenik2']['MB'];