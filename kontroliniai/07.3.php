<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas tekstas sudarytas iš žodžių. Suskaidykite tekstą į žodžius ir sukelkite į masyvą. Panaudodami for ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą mažosiomis raidėmis, pirmą raidę - didžiąja. Sujunkite visus masyvo elementus į vieną teksto eilutę sujungdami juos vertikaliais '|' brūšniais.
*/
$s="Labas rytas!, Labas vakaras!";

$e=explode(' ' ,$s);

for($m=0;$m<count($e);$m++){
    $e[$m]=ucfirst(strtolower($e[$m]));
}
$a=implode('|',$e);
echo($a);