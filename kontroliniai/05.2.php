<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas masyvas, aprašantis tris automobilius, kurių kiekvienas yra aprašytas asociatyviniu masyvu naudojant raktus. Asociatyviniuose  masyvuose turi būti laukeliai: gamintojas, modelis, pagaminimo metai, galingumas.
*/
$auto=[
    [
        'gamintojas'=>'bmw',
        'modelis'=>'320i',
        'galingumas'=>'150',
        'metai'=>2010
    ],
    [
        'gamintojas'=>'audi',
        'modelis'=>'100',
        'galingumas'=>'200',
        'metai'=>1990
    ],
    [
        'gamintojas'=>'honda',
        'modelis'=>'civic',
        'galingumas'=>'100',
        'metai'=>1996
        ]
    ];

    var_dump($auto);