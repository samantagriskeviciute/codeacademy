<?php
/**
 Php skriptas,aprasytas asociatyvinis masyvas is 5 eiluciu,panaudojant forech cikla,
 * pakeisdami mazasiosm ir pirmom didziosiom raidem.
 */
$m=[
    'Mama'=>'faina',
    'Dangus'=>'melynas',
    'Sienos'=> 'tinkuotos',
    'Kraujas'=>'raudona',
    'Grandinele'=>'sidabrine'
];

foreach ($m as $raktas=>$up) {

    $m[$raktas] =ucfirst ($up) ;strtoupper($up);
}
var_dump($m);