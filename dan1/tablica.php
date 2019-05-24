<?php
require 'podatci/podatci.php';

// ovo je php komentar

/* ovo je 
višelinijski php komentar
*/
?>

<!DOCTYPE html>
<html>
<table style="width:50%" border="1">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td><?php echo $name ?></td>
    <td><?php echo $last_name ?></td> 
    <td><?php echo $godine ?></td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>
<html>