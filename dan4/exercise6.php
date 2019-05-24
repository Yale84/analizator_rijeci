<?php
$a=7;
$b=5;
if($a > $b){
    echo 'A je '.$a.'<br>';
    echo 'B je '.$b.'<br>';
    $a++;
}else{
    $a--;
    echo 'A je '.$a.'<br>';
    echo 'B je '.$b.'<br>';
}
echo '<hr>';
$i=1;
while($i < 51){
    echo $i.'<br>';
    $i++;
}
echo '<hr>';
for($i=20; $i >= 20 && $i <= 30; $i++){
    $zbroj += $i;
    echo $zbroj;
}