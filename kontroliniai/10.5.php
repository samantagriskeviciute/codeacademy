<?php
/*
Sukurkite PHP skriptą, kuriame aprašykime klasę rndList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas, taip pat būtų metodas generate(), kuris sugeneruoja atsitiktini skaičių ir padeda į masyvą sąvybę $numbers. Taip pat sukurkite metodą list(), kuris surikiuoja masyve esančius skaičius ir išveda juos su echo atskiriant vieną nuo kito tarpais.
*/
class rndList {
    public $numbers = [];
    function generate(){
        $this->numbers[] = rand(0, 1000);
    }
    function listNumbers(){
        sort($this->numbers);
        foreach($this->numbers as $number){
            echo $number . ' ';
        }
    }
}
$a = new rndList();
$a->generate();
$a->generate();
$a->generate();
$a->generate();
$a->generate();
$a->listNumbers();

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
