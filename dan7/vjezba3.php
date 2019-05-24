<?php
function pp($array){
    '<pre>';
    print_r($array);
    '</pre>';
}

$ucenik = array();

$ucenik[1]['ime'] = 'Ivo';
$ucenik[1]['prezime'] = 'Ivić';
$ucenik[1]['email'] = 'ivo@ivo.iv';

$ucenik[2]['ime'] = 'Ivana';
$ucenik[2]['prezime'] = 'Ivanić';
$ucenik[2]['email'] = 'ivana@ivanić.iv';

$ucenik[3]['ime'] = 'Marija';
$ucenik[3]['prezime'] = 'Marijić';
$ucenik[3]['email'] = 'marija@marija.ma';

$ucenik[4]['ime'] = 'Štef';
$ucenik[4]['prezime'] = 'Štefanec';
$ucenik[4]['email'] = 'stef@stefanec.st';

$ucenik[5]['ime'] = 'Goran';
$ucenik[5]['prezime'] = 'Gorić';
$ucenik[5]['email'] = 'gorki@goran.gr';

//pp($ucenik);
?>

<table border = "1" width = "80%" cellspacing = "0" cellpadding = "5">
<tr>
    <th>Redni broj</th>
    <th>Ime</th>
    <th>Prezime</th>
    <th>Email</th>
</tr>
<tr>
<?php

foreach ($ucenik as $key => $value) {
    echo "<tr><td>$key</td>";
    foreach ($value as $k => $v) {
        echo "<td>$v</td>";
    }
    echo "</tr>";
}

?>
</tr>
</table>