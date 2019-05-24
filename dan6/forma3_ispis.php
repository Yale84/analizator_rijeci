<?php
if(isset($_POST['submit'])){
    echo $_POST['ime'].' '.$_POST['prezime'];
    }else{
        header('location:forma3php');
}
?>