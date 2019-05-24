<?php
$naziv='Algebra';
if(strlen($naziv) > 10){
    echo 'Naziv ima više od 10 znakova';
}elseif(strlen($naziv) >= 5 && strlen($naziv) <= 10){
    echo 'Naziv je u zadanom nizu';
}else{
    echo 'Naziv je prekratak';
}

echo'<br><br><br><br>';

$c='';
$d='d';
//
if(empty($c)){
    if(empty($d)){
        echo 'Varijabla C je prazna! <br>';
        echo 'Varijabla D je prazna! <br>';
    }else{
        echo 'Varijabla C je prazna! <br>';
        echo 'Varijabla D je puna! <br>';
    }
}else{
    if(empty($d)){
        echo 'Varijabla C je puna! <br>';
        echo 'Varijabla D je prazna! <br>';
    }else{
        echo 'Varijabla C je puna! <br>';
        echo 'Varijabla D je puna! <br>';
    }
}

echo '<br><br><br>';
if(empty($c) && empty($d)){
    echo 'Varijabla C je prazna! <br>';
    echo 'Varijabla D je prazna! <br>';
}elseif(empty($c) && !empty($d)){
    echo 'Varijabla C je prazna! <br>';
    echo 'Varijabla D je puna! <br>';
}elseif(!empty($c) && empty($d)){
    echo 'Varijabla C je puna! <br>';
    echo 'Varijabla D je prazna! <br>';
}else{
    echo 'Varijabla C je puna! <br>';
    echo 'Varijabla D je puna! <br>';
}