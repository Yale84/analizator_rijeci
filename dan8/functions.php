<?php
if (isset($_REQUEST["analyze"])) {
    function word_validation($string){
        if (!empty($string)) {
            if (strlen($string > 2)) {
                if (preg_match('/^[A-zšđčćžŠĐČĆŽ]+$/', $string)) {
                    return "Regex prošao.";
                }else{
                    return "Riječ za analizu ne smije sadržavati brojeve i posebne znakove.";
            }else{
                echo "Riječ za analizu mora sadržavati najmanje 3 slova.";
        }else{
            echo "Molim popuniti polje!";
        }
    }
    function to_uppercase($string){}
        // return(strtoupper,$string) 
    function separate_into_vowels($string){}
        // implode($string)
    function vowels($string){}
        //preg_match('/^[aeiou]+$/', $string)
    function consonants($string){}
    function cro_letters($string){}
    function print($string){}
}
?>