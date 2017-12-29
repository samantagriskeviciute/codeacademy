<?php

$auto= [
        'gamintojas'=> 'bmw',
        'modelis'=> '320i',
        'metai'=> 2010,
        'spalva'=> 'raudona',
        'galia'=> '200'
    ];
var_dump($auto);

//isset($c)true    != nelygu

//isset($d)false

//unset($c)panaikinti

//masyvo sulyginimas
//$color=['raudonas','balta','zalia'];
//count=3 nes 3 spalvos
//echo $color [1];|balta
// $color [0]='geltona';| pakeitimas
//echo $color [0];|geltona

//$color[3]='melyna';prideda kita spalva
//$color[]='juoda'

//$color[count(color)];suskaiciuoja kiek yra masyve elementu

//asocaityvinis masyvas
//$m=['iphone' 5=>500,
  //'iphone7'=>700,
//'iphonex'=>1300];
//echo $m[0];klaida
//echo $m['iPhone5']; 300
//echo $m[labas];klaida
//unset $m[Iphone5];panaikina iphone 5
//echo count ($m);
