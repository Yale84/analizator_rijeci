<?php
$a=0;

while($a < 5)
{
    echo $a.'<br>';
    $a++;
}
echo '<hr>';

$a=0;
while($a < 5)
{
    $a++;
    echo $a.'<br>';
}
echo '<hr>';
$a=0;
do
{
    echo $a.'<br>';
    $a++;
}while($a <= 10);
echo '<hr>';
$a = 0;
$b = 0;
while($a < 5)
{
    echo $a.'<br>';
    $a++;
}
echo '<hr>';
do
{
    echo $b.'<br>';
    $b++;
}while($b <= 10);
echo '<hr>';
$a=1;
$zbroj=0;
while($a <= 100)
{
    $zbroj += $a;
    $a++;
}
echo $zbroj;

//b+=a == b=b+a
//b++ == b=b+1 == b=b+1