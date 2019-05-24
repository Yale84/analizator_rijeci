<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['ime']) && !empty($_POST['prezime'])){
        include 'forma3_ispis.php';
    }else{
        echo 'Molimo ispunite sva polja!';
    }
}else{
    header('location:forma3.php');
}
?>