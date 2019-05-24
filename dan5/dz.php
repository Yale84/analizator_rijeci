<?php
function autor($autor, $prikaz, $vel = 'V')
{
    $autor_polje = explode(',', $autor);
    //print_r($autor_polje); die(); ili var_dump
    $ime = trim($autor_polje[0]);
    $prezime = trim($autor_polje[1]);
    switch ($prikaz) {
        case 1:
            $autor_ispis = substr($ime,0,1).'. '.$prezime;
            break;
        case 2:
            $autor_ispis = $ime.''.$prezime;
            break;
        default:
            $autor_ispis = '';
            break;
    }
    switch ($vel) {
        case 'V':
            $autor_ispis = strtoupper($autor_ispis);
            break;
        case 'M':
            $autor_ispis = strtolower($autor_ispis);
        break;
        default:
            $autor_ispis = '';
            break;
    }
    return $autor_ispis;
}
echo autor('pero,PeRic',1,'M').'<br>';
echo autor('pEro,PeRic',2).'<br>';
echo autor('pero,PeRic',2,).'<br>';
echo autor('pero,PeRic',1,'M').'<br>';