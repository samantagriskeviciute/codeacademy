<?php
//vienmatis masyvas is vardu
$m =["samanta", "gitana", "karolis", "gytis",'vytautas'];
//masyvo elemento pradinis indeksas nulis
$i=0;

foreach ($m as $raides) {//foreach ciklas
$m[$i++]=strtoupper($raides);//pakeisti teksta i did.raides prisiejant indeksa +1
//forech($m as $t)$m($m[$i++]=strtoupper($t);
    }

var_dump($m);//isvedimas i ekrana

//$m=['a'=>1, "b"=>2];
//foreach ($s as $key=>$value);


