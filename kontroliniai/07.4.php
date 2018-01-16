<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas tekstas sudarytas iš žodžių. Suskaidykite tekstą į žodžius ir sukelkite į
 * masyvą. Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą didžiosiomis raidemis, gale
 * teksto prijunkite simbolį '*'. Sujunkite visus masyvo elementus į vieną teksto eilutę sujungdami juos horizontaliais
 * '-' brūšniais.
 */
//

$s="Grazi diena!,Grazus vakaras!";//apsirasiau zodziais masyva

$e=explode(' ',$s);//masyvo pradzia

foreach ($s as $raides) {//foreach ciklas
    echo $raides=>strtoupper($s).'*';//pakeisti teksta i did.raides
    }
$v=implode('-',$e);//masyvo galas

$s = "aaa bbb ccc";
$m = explode(' ', $s);
for ($i=0; $i<count($m); $i++){
    $m[$i] = strtoupper($m[$i]) . '*';
}
$x = implode('-', $m);
echo $x;

