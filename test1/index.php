<table border = "1" width = "80%" cellspacing = "0" cellpadding = "5">
<tr>
    <th><b>Rbr.</th>
    <th><b>Prezime</th>
    <th><b>Ime</th>
    <th><b>Datum prijave</th>
    <th><b>Placeno</th>
</tr>
<tr>
<?php

function date_trans($datum_US){
    $datum_HR = explode('-', $datum_US);
    return "$datum_HR[2].[$datum_HR[1].$datum_HR[0]";
}
include 'data.php';

foreach ($data as $key => $value) {
    echo "<tr><td>$key</td>";
    foreach ($value as $k => $v) {
        echo "<td>$v</td>";
    }
    echo "</tr>";
}

?>
</tr>
</table>