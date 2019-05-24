<?php
function author($autor, $prikaz, $velicina){
    switch ($prikaz){
        case 1:
            $temp = substr(((explode(',',$autor))[1]),0,1).'. '.((explode(',',$autor))[0]);
            break;
        case 2:
            $temp = ((explode(',',$autor))[1]).' '.((explode(',',$autor))[0]);
            break;
    }
    switch ($velicina){
        case 'velika':
        return $temp = mb_strtoupper($temp).'<br>';
        case 'mala':
        return $temp = mb_strtolower($temp).'<br>';
    }
}
echo author('pEric,PerO',1,'velika');
echo author('pEric,PerO',2,'velika');
echo author('pEric,PerO',1,'mala');
echo author('pEric,PerO',2,'mala');
?>