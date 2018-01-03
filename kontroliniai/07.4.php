<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas tekstas sudarytas iš žodžių. Suskaidykite tekstą į žodžius ir sukelkite į
 * masyvą. Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą didžiosiomis raidemis, gale
 * teksto prijunkite simbolį '*'. Sujunkite visus masyvo elementus į vieną teksto eilutę sujungdami juos horizontaliais
 * '-' brūšniais.
 */


$s="Grazi diena!,Grazus vakaras!";
echo $s * ;

$e=explode(' ',$s);

foreach ($s as $raides) {//foreach ciklas
    $e[$m++]=strtoupper($e[$raides]);//pakeisti teksta i did.raides prisiejant indeksa +1
    }
$v=implode('-',$e);
//var_dump($v);
echo"$raides <br>";