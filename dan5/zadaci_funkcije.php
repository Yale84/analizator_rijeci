<?php
//Napišite funkciju koja vraća hrvatski naziv za trenutačni mjesec.
//Parametar koji prosljeđujete funkciji je rezultat funkcije date('n')
function hr_mjesec($mj)
{
    $mj_array = array();
    $mj_array[1] = "Siječanj";
    $mj_array[2] = "Veljača";
    $mj_array[3] = "Ožujak";
    $mj_array[4] = "Travanj";
    $mj_array[5] = "Svibanj";
    $mj_array[6] = "Lipanj";
    $mj_array[7] = "Srpanj";
    $mj_array[8] = "Kolovoz";
    $mj_array[9] = "Rujan";
    $mj_array[10] = "Listopad";
    $mj_array[11] = "Studeni";
    $mj_array[12] = "Prosinac";
return $mj_array[$mj];
}
$mj = date('n');
echo hr_mjesec($mj);
echo '<hr>';

function ispis_tablica($imenaArray)
{
    echo
    '<table border="1">
            <tr>
            <th>Ime</th>
            <th>Prezime</th>
    </tr>';
    foreach ($imenaArray as $key => $učenik) {
        echo
        '<tr>
                <td>'.$učenik["ime"].'</td>
                <td>'.$učenik["prezime"].'</td>
        </tr>';
    }
echo '</table>';
}

$učenici = array();
$učenici[1]["ime"] = "Ivan";
$učenici[1]["prezime"] = "Ivić";
$učenici[2]["ime"] = "Petar";
$učenici[2]["prezime"] = "Perić";
ispis_tablica($učenici);