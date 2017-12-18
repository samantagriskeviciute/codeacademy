<?php

function sulyginti($a,$b){
    if ($a>$b)return 1;
    elseif ($a==$b) return 0;
    else return -1;
}
echo sulyginti(3,2);
echo '<br>';
echo sulyginti(3,3);
echo '<br>';
echo sulyginti(2,3);

function ilgis($a,$b){
    if(strlen($a)==0)return 'tuscias';
    elseif (strlen($a)>$b)return'daugiau';
    elseif (strlen($a)==$b)return'lygu';
    else return 'maziau';
}
echo ilgis('kaunas',10);
echo '<br>';
echo ilgis('',10);
echo ilgis('kaunas',3);
echo '<br>';

function ilgis1($a,$b){
    $r='';
    if(strlen($a)==0) $r='tuscias';
    elseif (strlen($a)>$b)$r='daugiau';
    elseif (strlen($a)==$b)$r='lygu';
    else $r= 'maziau';
    return $r;
    echo '<br>';
}
echo ilgis1('kaunas',10);

function lyg ($a,$b)
{
    if ($a > $b) return true;
    else return false;
}
    function lyg1($a,$b){
    return $a>$b;
}
echo '<br>';


$c=lyg(6,7);
if ($c)echo'daugiau';
else echo 'nedaugiau';

echo'<br>';
if (lyg1(6,5)) echo'daugiau';
else echo 'nedaugiau';

//yra 3 vardai,i funkcija paduodam vardo ilgi,grazinti varda arba nerasta, funkcijos parametras ilgis vardo,, su echo grazinti

function varduilgis($f){//funkcija
 $f1='Jonas';//3vardai
    $f2='Petriokas';
    $f3='Antanas';
    if (strlen($f1) == $f) return $f1;//grazina vardus, parametras
    elseif (strlen($f2)==$f) return $f2;
    elseif (strlen($f3)==$f) return $f3;
    else return 'nerasta';//arba nerasta
}

echo varduilgis(5);//vardo ilgis kuris grazina su echo