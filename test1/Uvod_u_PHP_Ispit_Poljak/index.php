<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }
        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>
<body>

<?php

function date_trans($datum_US){
        $datum_HR = explode('-',$datum_US);
        return "$datum_HR[2].$datum_HR[1].$datum_HR[0]";
}

include ('data.php');

?>

<h2>Index</h2>

<table>
    <tr>
        <th>Rbr.</th>
        <?php
            foreach ($data[1] as $key => $value){
                $naslov = ucfirst($key);
                echo "<th>$naslov</th>";
            }
            foreach($data as $key => $value){
                echo '</tr>';
                echo "<td>$key</td>";
                foreach($value as $kljuc => $vrijednost){
                    if ($kljuc == "datum"){
                        echo "<td>";
                        echo date_trans($vrijednost);
                        echo "</td>";
                    } else if ($kljuc == "placeno"){
                        echo '<td>';
                        echo '<select name="select">';
                            echo '<option value="da"';
                            if ($vrijednost == "Da"){
                                echo 'selected="selected"';
                            }
                            echo '>Da</option><option value="ne"';
                            if ($vrijednost == "Ne"){
                                echo 'selected="selected"';
                            }
                            echo '>Ne</option>';
                        echo '</select>';
                        echo '</td>';
                    } else {
                        echo "<td>$vrijednost</td>"; 
                }            
            }
            echo '</tr>';
        }
    ?>
</table>
</body>
</html>

